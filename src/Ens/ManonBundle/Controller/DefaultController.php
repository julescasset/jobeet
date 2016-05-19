<?php

namespace Ens\ManonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EnsManonBundle:Default:index.html.twig');
    }
}
