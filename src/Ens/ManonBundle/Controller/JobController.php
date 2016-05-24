<?php

namespace Ens\ManonBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Ens\ManonBundle\Entity\Job;
use Ens\ManonBundle\Form\JobType;

/**
 * Job controller.
 *
 */
class JobController extends Controller
{
    /**
     * Lists all Job entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $categories = $em->getRepository('EnsManonBundle:Category')->getWithJobs();

        foreach($categories as $category)
        {
            $category->setActiveJobs($em->getRepository('EnsManonBundle:Job')->getActiveJobs($category->getId(), $this->container->getParameter('max_jobs_on_homepage')));
            $category->setMoreJobs($em->getRepository('EnsManonBundle:Job')->countActiveJobs($category->getId()) - $this->container->getParameter('max_jobs_on_homepage'));
        }

        return $this->render('job/index.html.twig', array(
            'categories' => $categories,
        ));
    }

    /**
     * Creates a new Job entity.
     *
     */
    public function newAction(Request $request)
    {
        $job = new Job();
        $job->setType('full-time');
        $form = $this->createForm('Ens\ManonBundle\Form\JobType', $job);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($job);
            $em->flush();

            return $this->redirectToRoute('job_show', array('id' => $job->getId()));
        }

        return $this->render('job/new.html.twig', array(
            'job' => $job,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Job entity.
     *
     */
    public function showAction(Job $job)
    {
        $deleteForm = $this->createDeleteForm($job);

        $em = $this->getDoctrine()->getManager();

        $job = $em->getRepository('EnsManonBundle:Job')->getActiveJob($job);

        return $this->render('job/show.html.twig', array(
            'job' => $job,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    public function previewAction($token)
    {
        $em = $this->getDoctrine()->getManager();

        $job = $em->getRepository('EnsManonBundle:Job')->findOneByToken($token);

        if (!$job) {
            throw $this->createNotFoundException('Unable to find Job entity.');
        }

        $deleteForm = $this->createDeleteForm($job->getId());
        $publishForm = $this->createPublishForm($job->getToken());

        return $this->render('job/show.html.twig', array(
            'job'      => $job,
            'delete_form' => $deleteForm->createView(),
            'publish_form' => $publishForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Job entity.
     *
     */
    public function editAction($token)
    {
        $em = $this->getDoctrine()->getManager();

        $job = $em->getRepository('EnsManonBundle:Job')->findOneByToken($token);

        if (!$job) {
            throw $this->createNotFoundException('Unable to find Job entity.');
        }

        $deleteForm = $this->createDeleteForm($job);
        $editForm = $this->createForm('Ens\ManonBundle\Form\JobType', $job);

        return $this->render('job/edit.html.twig.', array(
            'job' => $job,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Updates a Job entity.
     *
     */
    public function updateAction(Request $request, $token)
    {
        $em = $this->getDoctrine()->getManager();
        $job = $em->getRepository('EnsManonBundle:Job')->findOneByToken($token);

        if (!$job) {
            throw $this->createNotFoundException('Unable to find Job entity.');
        }
        $editForm   = $this->createForm(new JobType(), $job);
        $deleteForm = $this->createDeleteForm($token);

        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->persist($job);
            $em->flush();

            return $this->redirect($this->generateUrl('job_preview', array(
                'company' => $job->getCompanySlug(),
                'location' => $job->getLocationSlug(),
                'token' => $job->getToken(),
                'position' => $job->getPositionSlug()
            )));
        }

        return $this->render('job/edit.html.twig', array(
            'job'      => $job,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Job entity.
     *
     */
    public function deleteAction(Request $request, $token)
    {
        $form = $this->createDeleteForm($token);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $job = $em->getRepository('EnsManonBundle:Job')->findOneByToken($token);

            if (!$job) {
                throw $this->createNotFoundException('Unable to find Job entity.');
            }

            $em->remove($job);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('job_index'));
    }

    /**
     * Creates a form to delete a Job entity.
     *
     * @param Job $job The Job entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($token)
    {
        return $this->createFormBuilder(array('token' => $token))
            ->add('token', 'hidden')
            ->getForm()
            ;
    }

    public function createAction(Request $request)
    {
        $job = new Job();
        $form = $this->createForm('Ens\ManonBundle\Form\JobType', $job);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();

            $em->persist($job);
            $em->flush();

            return $this->redirect($this->generateUrl('job_preview', array(
                'company' => $job->getCompanySlug(),
                'location' => $job->getLocationSlug(),
                'token' => $job->getToken(),
                'position' => $job->getPositionSlug()
            )));
        }

        return $this->render('job/new.html.twig', array(
            'job' => $job,
            'form'   => $form->createView()
        ));
    }

    public function publishAction(Request $request, $token)
    {
        $form = $this->createPublishForm($token);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $job = $em->getRepository('EnsManonBundle:Job')->findOneByToken($token);

            if (!$job) {
                throw $this->createNotFoundException('Unable to find Job entity.');
            }

            $job->publish();
            $em->persist($job);
            $em->flush();

            $this->get('session')->setFlash('notice', 'Your job is now online for 30 days.');
        }

        return $this->redirect($this->generateUrl('ens_job_preview', array(
            'company' => $job->getCompanySlug(),
            'location' => $job->getLocationSlug(),
            'token' => $job->getToken(),
            'position' => $job->getPositionSlug()
        )));
    }

    private function createPublishForm($token)
    {
        return $this->createFormBuilder(array('token' => $token))
            ->add('token', 'hidden')
            ->getForm()
            ;
    }
}
