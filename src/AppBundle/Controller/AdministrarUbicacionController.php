<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\AdmiUbicacion;

class AdministrarUbicacionController extends Controller
{
    /**
     * @Route("/administrarUbicacion", name="adminUbicacion")
     */
    public function indexAction()
    {         
        $em = $this->getDoctrine()->getManager();
        
        $arrayUbicaciones = $em->getRepository("AppBundle:AdmiUbicacion")
                               ->findBy(array('estado'=>array('Activo','Modificado')));
        return $this->render('AppBundle:administracion/ubicacion:index.html.twig',
                              array('ubicaciones'=>$arrayUbicaciones));
    }
    
    /**
     * @Route("/newUbicacion", name="newUbicacion")
     */
    public function newAction()
    { 
        return $this->render('AppBundle:administracion/ubicacion:new.html.twig'); 
    }
    
    /**
     * @Route("/createUbicacion", name="createUbicacion")
     */
    public function createAction(Request $request)
    {
        $session = $request->getSession();
        
        $nombreUbicacion   = $request->get('nombreUbicacion');
        $descripcion       = $request->get('descripcionUbicacion');
               
        $em = $this->getDoctrine()->getEntityManager();
        
        $em->getConnection()->beginTransaction();
        
        $objAdmiUbicacion = new AdmiUbicacion();      
        $objAdmiUbicacion->setNombre($nombreUbicacion);
        $objAdmiUbicacion->setDescripcion($descripcion);
        $objAdmiUbicacion->setEstado("Activo");
        $objAdmiUbicacion->setUsrCreacion($session->get('user'));
        $objAdmiUbicacion->setFeCreacion(new \DateTime());
        $em->persist($objAdmiUbicacion);
        $em->flush();
        
        if($em->getConnection()->isTransactionActive())
        {
            $em->commit();
            $em->close();
        }
        
        return $this->redirect($this->generateUrl('adminUbicacion'));
  
    }
    
    /**
     * @Route("/editUbicacion/{id}", name="editUbicacion")
     */
    public function editUsuarioAction($id)
    {
        $em = $this->getDoctrine()->getManager();
         
        $objUbicacion = $em->getRepository("AppBundle:AdmiUbicacion")->find($id);
        
        return $this->render('AppBundle:administracion/ubicacion:edit.html.twig',
                      array('ubicacion'=>$objUbicacion)); 
    }
    
    /**
     * @Route("/updateUbicacion", name="updateUbicacion")
     */
    public function updateUsuarioAction(Request $request)
    {
        $session = $request->getSession();
              
        $idUbicacion         = $request->get('idUbicacion'); 
        $nombreUbicacion     = $request->get('nombreUbicacion');      
        $descripcion         = $request->get('descripcionUbicacion');
        
        $em = $this->getDoctrine()->getEntityManager();
        
        $em->getConnection()->beginTransaction();
                
        $objAdmiUbicacion = $em->getRepository("AppBundle:AdmiUbicacion")->find($idUbicacion);
               
        $objAdmiUbicacion->setNombre($nombreUbicacion);
        $objAdmiUbicacion->setDescripcion($descripcion);
        $objAdmiUbicacion->setEstado("Modificado");
        $objAdmiUbicacion->setUsrCreacion($session->get('user'));
        $objAdmiUbicacion->setFeCreacion(new \DateTime());
        $em->persist($objAdmiUbicacion);
        $em->flush();
        
        if($em->getConnection()->isTransactionActive())
        {
            $em->commit();
            $em->close();
        }
        
        return $this->redirect($this->generateUrl('adminUbicacion'));
  
    }
    /**
     * @Route("/deleteUbicacion/{id}", name="deleteUbicacion")
     */
    public function deleteUsuarioAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        
        $em->getConnection()->beginTransaction();
        
        $objUbicacion = $em->getRepository("AppBundle:AdmiUbicacion")->find($id);
               
        $objUbicacion->setEstado("Eliminado");        
        $em->persist($objUbicacion);
        $em->flush();
        
        if($em->getConnection()->isTransactionActive())
        {
            $em->commit();
            $em->close();
        }
        
        return $this->redirect($this->generateUrl('adminUbicacion'));
    }
    
    
}
