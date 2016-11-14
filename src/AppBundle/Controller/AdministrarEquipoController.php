<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\InfoEquipo;
use AppBundle\Entity\InfoEquipoHistorial;

class AdministrarEquipoController extends Controller
{
    /**
     * @Route("/administrarEquipo", name="adminEquipo")
     */
    public function indexAction()
    { 
        $em = $this->getDoctrine()->getManager();
        
        $arrayEquipos = $em->getRepository("AppBundle:InfoEquipo")
                            ->findBy(array('estado'=>array('Activo','Modificado')));
        return $this->render('AppBundle:administracion/equipos:index.html.twig',
                             array('equipos'=>$arrayEquipos));            
    }
    
    /**
     * @Route("/showEquipo/{id}", name="showEquipo")
     */
    public function showEquipoAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        
        $objEquipo = $em->getRepository("AppBundle:InfoEquipo")->find($id);
        
        $objEquipoHist = $em->getRepository("AppBundle:InfoEquipo")
                            ->getArrayEquipoHistorial($id);       
        
        return $this->render('AppBundle:administracion/equipos:show.html.twig',
                             array('equipo'     =>$objEquipo,
                                   'equipoHist' =>$objEquipoHist)); 
        
    }
    
    /**
     * @Route("/newEquipo", name="newEquipo")
     */
    public function newAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        $objAdmiUbicacion = $em->getRepository("AppBundle:AdmiUbicacion")
                         ->findBy(array('estado' => array('Activo','Modificado')));
        
        $objAdmiAcceso = $em->getRepository("AppBundle:AdmiAcceso")
                         ->findBy(array('estado' => array('Activo','Modificado')));
        
        return $this->render('AppBundle:administracion/equipos:new.html.twig',
                             array('ubicaciones'=>$objAdmiUbicacion,
                                   'accesos'    =>$objAdmiAcceso)); 
    }
    
    /**
     * @Route("/createEquipo", name="createEquipo")
     */
    public function createAction(Request $request)
    {
        $session = $request->getSession();
        
        $nombreEquipo      = $request->get('nombreEquipo');
        $descripcionEquipo = $request->get('descripcionEquipo');
        $ubicacionEquipo   = $request->get('ubicacionEquipo');
        $tipoEquipo        = $request->get('tipoEquipo');
        $ipEquipo          = $request->get('ipEquipo');
        $acceso            = $request->get('acceso');
               
        $em = $this->getDoctrine()->getEntityManager();
        
        $em->getConnection()->beginTransaction();
        
        $objUbicacion = $em->getRepository("AppBundle:AdmiUbicacion")->find($ubicacionEquipo);
        $objAcceso    = $em->getRepository("AppBundle:AdmiAcceso")->find($acceso);
        
        $objEquipo = new InfoEquipo();
        $objEquipo->setNombre($nombreEquipo);
        $objEquipo->setDescripcion($descripcionEquipo);
        $objEquipo->setIp($ipEquipo);
        $objEquipo->setTipo($tipoEquipo);
        $objEquipo->setAcceso($objAcceso);
        $objEquipo->setUbicacion($objUbicacion);
        $objEquipo->setEstado("Activo");
        $objEquipo->setStatus("UP");
        $objEquipo->setUsrCreacion($session->get('user'));
        $objEquipo->setFeCreacion(new \DateTime());
        $em->persist($objEquipo);
        $em->flush();
        
        $objEquipoHistorial = new InfoEquipoHistorial();
        $objEquipoHistorial->setEquipo($objEquipo);
        $objEquipoHistorial->setObservacion("Se Ingreso Nuevo Equipo");
        $objEquipoHistorial->setEstado($objEquipo->getEstado());
        $objEquipoHistorial->setFeCreacion(new \DateTime());
        $objEquipoHistorial->setUsrCreacion($session->get('user'));
        $em->persist($objEquipoHistorial);
        $em->flush();
        
        if($em->getConnection()->isTransactionActive())
        {
            $em->commit();
            $em->close();
        }
        
        return $this->redirect($this->generateUrl('adminEquipo'));
  
    }
    
    /**
     * @Route("/editEquipo/{id}", name="editEquipo")
     */
    public function editEquipoAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        
        $objAdmiUbicacion = $em->getRepository("AppBundle:AdmiUbicacion")
                         ->findBy(array('estado' => array('Activo','Modificado')));
        
        $objAdmiAcceso = $em->getRepository("AppBundle:AdmiAcceso")
                         ->findBy(array('estado' => array('Activo','Modificado')));
        
        $objEquipo = $em->getRepository("AppBundle:InfoEquipo")->find($id);
                        
        return $this->render('AppBundle:administracion/equipos:edit.html.twig',
                             array('ubicaciones'=>$objAdmiUbicacion,
                                   'accesos'    =>$objAdmiAcceso,
                                   'equipo'     =>$objEquipo)); 
    }
    
    /**
     * @Route("/updateEquipo", name="updateEquipo")
     */
    public function updateEquipoAction(Request $request)
    {
        $session = $request->getSession();
        
        $nombreEquipo      = $request->get('nombreEquipo');
        $descripcionEquipo = $request->get('descripcionEquipo');
        $ubicacionEquipo   = $request->get('ubicacionEquipo');
        $tipoEquipo        = $request->get('tipoEquipo');
        $ipEquipo          = $request->get('ipEquipo');
        $acceso            = $request->get('acceso');     
        $idEquipo          = $request->get('idEquipo');       
        $em = $this->getDoctrine()->getEntityManager();
        
        $em->getConnection()->beginTransaction();
        
        $objUbicacion = $em->getRepository("AppBundle:AdmiUbicacion")->find($ubicacionEquipo);
        $objAcceso    = $em->getRepository("AppBundle:AdmiAcceso")->find($acceso);
        
        $objEquipo    = $em->getRepository("AppBundle:InfoEquipo")->find($idEquipo);
               
        $objEquipo->setNombre($nombreEquipo);
        $objEquipo->setDescripcion($descripcionEquipo);
        $objEquipo->setIp($ipEquipo);
        $objEquipo->setTipo($tipoEquipo);
        $objEquipo->setAcceso($objAcceso);
        $objEquipo->setUbicacion($objUbicacion);
        $em->persist($objEquipo);
        $em->flush();
        
        $objEquipoHistorial = new InfoEquipoHistorial();
        $objEquipoHistorial->setEquipo($objEquipo);
        $objEquipoHistorial->setObservacion("Se realizo Actualizacion de Equipo");
        $objEquipoHistorial->setEstado($objEquipo->getEstado());
        $objEquipoHistorial->setFeCreacion(new \DateTime());
        $objEquipoHistorial->setUsrCreacion($session->get('user'));
        $em->persist($objEquipoHistorial);
        $em->flush();
        
        if($em->getConnection()->isTransactionActive())
        {
            $em->commit();
            $em->close();
        }
        
        return $this->redirect($this->generateUrl('adminEquipo'));
  
    }
    /**
     * @Route("/deleteEquipo/{id}", name="deleteEquipo")
     */
    public function deleteEquipoAction($id)
    {
        $session = $this->getRequest()->getSession();
        
        $em = $this->getDoctrine()->getEntityManager();
        
        $em->getConnection()->beginTransaction();
        
        $objEquipo = $em->getRepository("AppBundle:InfoEquipo")->find($id);
               
        $objEquipo->setEstado("Eliminado");        
        $em->persist($objEquipo);
        $em->flush();
        
        $objEquipoHistorial = new InfoEquipoHistorial();
        $objEquipoHistorial->setEquipo($objEquipo);
        $objEquipoHistorial->setObservacion("Se Elimino de Equipo");
        $objEquipoHistorial->setEstado($objEquipo->getEstado());
        $objEquipoHistorial->setFeCreacion(new \DateTime());
        $objEquipoHistorial->setUsrCreacion($session->get('user'));
        $em->persist($objEquipoHistorial);
        $em->flush();
        
        if($em->getConnection()->isTransactionActive())
        {
            $em->commit();
            $em->close();
        }
        
        return $this->redirect($this->generateUrl('adminEquipo'));
    }
    
    
}
