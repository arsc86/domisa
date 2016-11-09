<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/dashboard", name="dashboard")
     */
    public function indexAction()
    { 
        $em = $this->getDoctrine()->getManager();
        
        $arrayUbicaciones = $em->getRepository("AppBundle:AdmiUbicacion")->getDashboardPanel();
        
        return $this->render('AppBundle:monitoreo:index.html.twig',
                      array('ubicaciones'=>$arrayUbicaciones));
    }
    
    
}
