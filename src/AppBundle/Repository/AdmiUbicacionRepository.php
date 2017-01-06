<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

class AdmiUbicacionRepository extends EntityRepository{
   
    public function getDashboardPanel()
    {
        $query = $this->_em->createQuery();
        
        $sql = "SELECT 
                ubicacion.idUbicacion,
                ubicacion.nombre,
                ubicacion.descripcion,
                (SELECT count(e1) FROM 
                    AppBundle:InfoEquipo e1 
                    WHERE e1.ubicacion = ubicacion.idUbicacion and e1.status = 'DOWN') caidos,
                (SELECT count(e) FROM 
                    AppBundle:InfoEquipo e 
                    WHERE e.ubicacion = ubicacion.idUbicacion) numeroEquipos
                FROM
                AppBundle:AdmiUbicacion ubicacion
                WHERE
                ubicacion.estado <> 'Eliminado'
               ";
        
        $query->setDQL($sql);
        
        $arrayResultado = $query->getResult();
        
        return $arrayResultado;
        
    }
}

?>
