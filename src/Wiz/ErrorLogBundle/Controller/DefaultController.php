<?php

namespace Wiz\ErrorLogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('WizErrorLogBundle:Default:index.html.twig', array('name' => $name));
    }
}
