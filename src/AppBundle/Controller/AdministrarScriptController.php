<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\InfoScript;

class AdministrarScriptController extends Controller
{
    /**
     * @Route("/administrarScript", name="adminScript")
     */
    public function indexAction()
    { 
        $em = $this->getDoctrine()->getManager();
        
        $arrayScripts = $em->getRepository("AppBundle:InfoScript")
                            ->getArrayScripts("");
        return $this->render('AppBundle:administracion/scripts:index.html.twig',
                             array('scripts'=>$arrayScripts));            
    }
    
    /**
     * @Route("/newScript", name="newScript")
     */
    public function newAction()
    {       
        return $this->render('AppBundle:administracion/scripts:new.html.twig'); 
    }
    
    /**
     * @Route("/createScript", name="createScript")
     */
    public function createAction(Request $request)
    {
        $session = $request->getSession();
        
        $nombre     = $request->get('nombreScript');
        $descripcion    = $request->get('descripcionScript');
        $script      = $request->get('script');
      
        $em = $this->getDoctrine()->getEntityManager();
        
        $em->getConnection()->beginTransaction();
        
        $objInfoScript = new InfoScript();
        $objInfoScript->setNombreScript($nombre);
        $objInfoScript->setDescripcion($descripcion);
        $objInfoScript->setScript($script);      
        $objInfoScript->setEstado("Activo");
        $objInfoScript->setUsrCreacion($session->get('user'));
        $objInfoScript->setFeCreacion(new \DateTime());
        $em->persist($objInfoScript);
        $em->flush();
        
        if($em->getConnection()->isTransactionActive())
        {
            $em->commit();
            $em->close();
        }
        
        return $this->redirect($this->generateUrl('adminScript'));
  
    }
    
    /**
     * @Route("/editScript/{id}", name="editScript")
     */
    public function editEquipoAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        
        $objInfoScript = $em->getRepository("AppBundle:InfoScript")->getArrayScripts($id);
        
        return $this->render('AppBundle:administracion/scripts:edit.html.twig',array(
            'script'=>$objInfoScript)); 
    }
    
    /**
     * @Route("/updateScript", name="updateScript")
     */
    public function updateEquipoAction(Request $request)
    {
        $session = $request->getSession();
        
        $nombre     = $request->get('nombreScript');
        $descripcion    = $request->get('descripcionScript');
        $script      = $request->get('script');
        $idScript    = $request->get('idScript');
        
        $em = $this->getDoctrine()->getEntityManager();
        
        $em->getConnection()->beginTransaction();
        
        $objInfoScript = $em->getRepository("AppBundle:InfoScript")->find($idScript);
               
        $objInfoScript->setNombreScript($nombre);
        $objInfoScript->setDescripcion($descripcion);
        $objInfoScript->setScript($script);
        $objInfoScript->setEstado("Modificado");
        $objInfoScript->setUsrCreacion($session->get('user'));
        $objInfoScript->setFeCreacion(new \DateTime());
        $em->persist($objInfoScript);
        $em->flush();
        
        if($em->getConnection()->isTransactionActive())
        {
            $em->commit();
            $em->close();
        }
        
        return $this->redirect($this->generateUrl('adminScript'));
  
    }
    /**
     * @Route("/deleteScript/{id}", name="deleteScript")
     */
    public function deleteEquipoAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        
        $em->getConnection()->beginTransaction();
        
        $objAdmiAcceso = $em->getRepository("AppBundle:InfoScript")->find($id);
               
        $objAdmiAcceso->setEstado("Eliminado");        
        $em->persist($objAdmiAcceso);
        $em->flush();
        
        if($em->getConnection()->isTransactionActive())
        {
            $em->commit();
            $em->close();
        }
        
        return $this->redirect($this->generateUrl('adminScript'));
    }
    
    
}
