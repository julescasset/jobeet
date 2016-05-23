<?php

namespace Ens\ManonBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class JobControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        // LES OFFRES EXPIRÉES NE SONT PAS LISTÉES
        $crawler = $client->request('GET', '/');
        $this->assertEquals('Ens\ManonBundle\Controller\JobController::indexAction',
            $client->getRequest()->attributes->get('_controller'));
        $this->assertTrue($crawler->filter('.jobs td.position:contains("Expired")')->count() == 0);

        $kernel = static::createKernel();
        $kernel->boot();

        // LES OFFRES SONT TRIÉES PAR DATE
        $this->assertTrue($crawler->filter('.category_programming tr')->first()->filter(sprintf('a[href*="/%d/"]',
                $this->getMostRecentProgrammingJob()->getId()))->count() == 1);

        // SEULEMENT N OFFRES SONT AFFICHÉES POUR UNE CATÉGORIE
        $max_jobs_on_homepage = $kernel->getContainer()->getParameter('max_jobs_on_homepage');
        $this->assertTrue($crawler->filter('.category_programming tr')->count() == $max_jobs_on_homepage);

        // UNE CATÉGORIE A UN LIEN VERS LA PAGE CATÉGORIE SEULEMENT S'IL Y A TROP D'OFFRES
        $this->assertTrue($crawler->filter('.category_design .more_jobs')->count() == 0);
        $this->assertTrue($crawler->filter('.category_programming .more_jobs')->count() == 1);

        // CHAQUE OFFRE SUR LA PAGE D'ACCUEIL EST CLIQUABLE
        $job = $this->getMostRecentProgrammingJob();
        $link = $crawler->selectLink('Web Developer')->first()->link();
        $crawler = $client->click($link);
        $this->assertEquals('Ens\ManonBundle\Controller\JobController::showAction', $client->getRequest()->attributes->get('_controller'));
        $this->assertEquals($job->getCompanySlug(), $client->getRequest()->attributes->get('company'));
        $this->assertEquals($job->getLocationSlug(), $client->getRequest()->attributes->get('location'));
        $this->assertEquals($job->getPositionSlug(), $client->getRequest()->attributes->get('position'));
        $this->assertEquals($job->getId(), $client->getRequest()->attributes->get('id'));
    }

    public function getMostRecentProgrammingJob()
    {
        $kernel = static::createKernel();
        $kernel->boot();
        $em = $kernel->getContainer()->get('doctrine.orm.entity_manager');

        // LES OFFRES SONT TRIÉES PAR DATE
        $query = $em->createQuery('SELECT j from EnsManonBundle:Job j LEFT JOIN j.category c WHERE c.slug = :slug AND
            j.expires_at > :date ORDER BY j.created_at DESC');
        $query->setParameter('slug', 'programming');
        $query->setParameter('date', date('Y-m-d H:i:s', time()));
        $query->setMaxResults(1);

        return $query->getSingleResult();
    }
}
