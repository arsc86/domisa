<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\InfoUsuario;

class AdministrarUsuarioController extends Controller
{
    /**
     * @Route("/administrarUsuario", name="adminUser")
     */
    public function indexAction()
    { 
        $em = $this->getDoctrine()->getManager();
        
        $arrayUsuarios = $em->getRepository("AppBundle:InfoUsuario")
                            ->findBy(array('estado'=>array('Activo','Modificado')));
        return $this->render('AppBundle:administracion/usuarios:index.html.twig',array('usuarios'=>$arrayUsuarios));            
    }
    
    /**
     * @Route("/newUsuario", name="newUsuario")
     */
    public function newAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        $objAdmiRol = $em->getRepository("AppBundle:AdmiRol")
                         ->findBy(array('estado' => 'Activo'));
        
        return $this->render('AppBundle:administracion/usuarios:new.html.twig',array('roles'=>$objAdmiRol)); 
    }
    
    /**
     * @Route("/createUsuario", name="createUsuario")
     */
    public function createAction(Request $request)
    {
        $session = $request->getSession();
        
        $tipoRol           = $request->get('tipoRol');
        $nombreUsuario     = $request->get('nombreUsuario');
        $loginUsuario      = $request->get('loginUsuario');
        $contrasenaUsuario = $request->get('passwordUsuario');
               
        $em = $this->getDoctrine()->getEntityManager();
        
        $em->getConnection()->beginTransaction();
        
        $objTipoRol = $em->getRepository("AppBundle:AdmiRol")->find($tipoRol);
        
        $objInfoUsuario = new InfoUsuario();
        $objInfoUsuario->setRol($objTipoRol);
        $objInfoUsuario->setNombre($nombreUsuario);
        $objInfoUsuario->setUser($loginUsuario);
        $objInfoUsuario->setPassword(md5(base64_encode($contrasenaUsuario)));
        $objInfoUsuario->setEstado("Activo");
        $objInfoUsuario->setUsrCreacio($session->get('user'));
        $objInfoUsuario->setFeCreacion(new \DateTime());
        $em->persist($objInfoUsuario);
        $em->flush();
        
        if($em->getConnection()->isTransactionActive())
        {
            $em->commit();
            $em->close();
        }
        
        return $this->redirect($this->generateUrl('adminUser'));
  
    }
    
    /**
     * @Route("/editUsuario/{id}", name="editUsuario")
     */
    public function editUsuarioAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        
        $objAdmiRol = $em->getRepository("AppBundle:AdmiRol")
                         ->findBy(array('estado' => 'Activo'));
        
        $objUsuario = $em->getRepository("AppBundle:InfoUsuario")->find($id);
        
        return $this->render('AppBundle:administracion/usuarios:edit.html.twig',array('roles'=>$objAdmiRol,
            'usuario'=>$objUsuario)); 
    }
    
    /**
     * @Route("/updateUsuario", name="updateUsuario")
     */
    public function updateUsuarioAction(Request $request)
    {
        $session = $request->getSession();
        
        $tipoRol           = $request->get('tipoRol');
        $nombreUsuario     = $request->get('nombreUsuario');      
        $idUsuario         = $request->get('idUsuario');       
        $em = $this->getDoctrine()->getEntityManager();
        
        $em->getConnection()->beginTransaction();
        
        $objTipoRol = $em->getRepository("AppBundle:AdmiRol")->find($tipoRol);
        
        $objInfoUsuario = $em->getRepository("AppBundle:InfoUsuario")->find($idUsuario);
               
        $objInfoUsuario->setRol($objTipoRol);
        $objInfoUsuario->setNombre($nombreUsuario);
        $objInfoUsuario->setEstado("Modificado");
        $objInfoUsuario->setUsrCreacio($session->get('user'));
        $objInfoUsuario->setFeCreacion(new \DateTime());
        $em->persist($objInfoUsuario);
        $em->flush();
        
        if($em->getConnection()->isTransactionActive())
        {
            $em->commit();
            $em->close();
        }
        
        return $this->redirect($this->generateUrl('adminUser'));
  
    }
    /**
     * @Route("/deleteUsuario/{id}", name="deleteUsuario")
     */
    public function deleteUsuarioAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        
        $em->getConnection()->beginTransaction();
        
        $objInfoUsuario = $em->getRepository("AppBundle:InfoUsuario")->find($id);
               
        $objInfoUsuario->setEstado("Eliminado");        
        $em->persist($objInfoUsuario);
        $em->flush();
        
        if($em->getConnection()->isTransactionActive())
        {
            $em->commit();
            $em->close();
        }
        
        return $this->redirect($this->generateUrl('adminUser'));
    }
    
    
}
