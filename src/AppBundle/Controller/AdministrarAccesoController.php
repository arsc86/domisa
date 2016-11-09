<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\AdmiAcceso;

class AdministrarAccesoController extends Controller
{
    /**
     * @Route("/administrarAcceso", name="adminAcceso")
     */
    public function indexAction()
    { 
        $em = $this->getDoctrine()->getManager();
        
        $arrayAccesos = $em->getRepository("AppBundle:AdmiAcceso")
                            ->findBy(array('estado'=>array('Activo','Modificado')));
        return $this->render('AppBundle:administracion/acceso:index.html.twig',
                             array('accesos'=>$arrayAccesos));            
    }
    
    /**
     * @Route("/newAcceso", name="newAcceso")
     */
    public function newAction()
    {       
        return $this->render('AppBundle:administracion/acceso:new.html.twig'); 
    }
    
    /**
     * @Route("/createAcceso", name="createAcceso")
     */
    public function createAction(Request $request)
    {
        $session = $request->getSession();
        
        $nombre     = $request->get('nombreAcceso');
        $usuario    = $request->get('usuarioAcceso');
        $clave      = $request->get('claveAcceso');
      
        $em = $this->getDoctrine()->getEntityManager();
        
        $em->getConnection()->beginTransaction();
        
        $objAdmiAcceso = new AdmiAcceso();
        $objAdmiAcceso->setNombreAcceso($nombre);
        $objAdmiAcceso->setUsuarioAcceso($usuario);
        $objAdmiAcceso->setClaveAcceso($clave);      
        $objAdmiAcceso->setEstado("Activo");
        $objAdmiAcceso->setUsrCreacion($session->get('user'));
        $objAdmiAcceso->setFeCreacion(new \DateTime());
        $em->persist($objAdmiAcceso);
        $em->flush();
        
        if($em->getConnection()->isTransactionActive())
        {
            $em->commit();
            $em->close();
        }
        
        return $this->redirect($this->generateUrl('adminAcceso'));
  
    }
    
    /**
     * @Route("/editAcceso/{id}", name="editAcceso")
     */
    public function editEquipoAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        
        $objAdmiAcceso = $em->getRepository("AppBundle:AdmiAcceso")->find($id);
        
        return $this->render('AppBundle:administracion/acceso:edit.html.twig',array(
            'acceso'=>$objAdmiAcceso)); 
    }
    
    /**
     * @Route("/updateAcceso", name="updateAcceso")
     */
    public function updateEquipoAction(Request $request)
    {
        $session = $request->getSession();
        
        $nombre     = $request->get('nombreAcceso');
        $usuario    = $request->get('usuarioAcceso');
        $clave      = $request->get('claveAcceso');
        $idAcceso   = $request->get('idAcceso');
        
        $em = $this->getDoctrine()->getEntityManager();
        
        $em->getConnection()->beginTransaction();
        
        $objAdmiAcceso = $em->getRepository("AppBundle:AdmiAcceso")->find($idAcceso);
               
        $objAdmiAcceso->setNombreAcceso($nombre);
        $objAdmiAcceso->setUsuarioAcceso($usuario);
        $objAdmiAcceso->setClaveAcceso($clave);
        $objAdmiAcceso->setEstado("Modificado");
        $objAdmiAcceso->setUsrCreacion($session->get('user'));
        $objAdmiAcceso->setFeCreacion(new \DateTime());
        $em->persist($objAdmiAcceso);
        $em->flush();
        
        if($em->getConnection()->isTransactionActive())
        {
            $em->commit();
            $em->close();
        }
        
        return $this->redirect($this->generateUrl('adminAcceso'));
  
    }
    /**
     * @Route("/deleteAcceso/{id}", name="deleteAcceso")
     */
    public function deleteEquipoAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        
        $em->getConnection()->beginTransaction();
        
        $objAdmiAcceso = $em->getRepository("AppBundle:AdmiAcceso")->find($id);
               
        $objAdmiAcceso->setEstado("Eliminado");        
        $em->persist($objAdmiAcceso);
        $em->flush();
        
        if($em->getConnection()->isTransactionActive())
        {
            $em->commit();
            $em->close();
        }
        
        return $this->redirect($this->generateUrl('adminAcceso'));
    }
    
    
}
