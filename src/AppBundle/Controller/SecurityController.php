<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class SecurityController extends Controller
{
    /**
     * @Route("/", name="login")    
     */
    public function loginAction(Request $request)
    { 
        return $this->render('AppBundle:login:index.html.twig',array('authFail'=>$request->get('authFail')));
    }
    
    /**
     * @Route("/auth", name="auth")
     * @Method({"POST"})
     */
    public function authAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        
        $usuario  = $request->get('usuario');
        $password = $request->get('password');
        
        $objUsuario = $em->getRepository('AppBundle:InfoUsuario')
                         ->findOneBy(array('user'    => $usuario,
                                           'password'=> md5(base64_encode($password))));
        
        if($objUsuario)
        {
            //guardar valores de sesion
            $session = new Session();
            
            //Se obtiene rol del usuario en session
            $session->set('rol',$objUsuario->getRol()->getNombreRol());            
            $session->set('user',$objUsuario->getUser());
            $session->set('nombreUser',$objUsuario->getNombre());
            
            return $this->redirect($this->generateUrl('dashboard'));
        }
        else
        {
            return $this->redirect($this->generateUrl('login',array('authFail'=>'Usuario/Password Incorrecto')));
        }                    
    }
    
    /**
     * @Route("/" , name="logout")     
     */
    public function logOutAction(Request $request)
    {
        //eliminar datos de cache y de session
        $session = $request->getSession();
        $session->clear();
        return $this->redirect($this->generateUrl('login'));
    }
}
