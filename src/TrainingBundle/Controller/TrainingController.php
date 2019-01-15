<?php

namespace TrainingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * @Route("/trainings")
 */
class TrainingController extends Controller
{
    /**
     * @Route("/index")
     */
    public function indexAction()
    {
        return $this->render('TrainingBundle:Training:index.html.twig', array(
            // ...
        ));
    }

}
