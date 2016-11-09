<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AdmiUbicacion
 *
 * @ORM\Table(name="ADMI_UBICACION", uniqueConstraints={@ORM\UniqueConstraint(name="ID_UBICACION_UNIQUE", columns={"ID_UBICACION"})})
 * @ORM\Entity
 */
class AdmiUbicacion {

    /**
     * @var string
     *
     * @ORM\Column(name="NOMBRE", type="string", length=45, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPCION", type="string", length=100, nullable=true)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="ESTADO", type="string", length=100, nullable=false)
     */
    private $estado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FE_CREACION", type="datetime", nullable=false)
     */
    private $feCreacion;

    /**
     * @var string
     *
     * @ORM\Column(name="USR_CREACION", type="string", length=45, nullable=false)
     */
    private $usrCreacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_UBICACION", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUbicacion;

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
    }

    public function getFeCreacion() {
        return $this->feCreacion;
    }

    public function setFeCreacion($feCreacion) {
        $this->feCreacion = $feCreacion;
    }

    public function getUsrCreacion() {
        return $this->usrCreacion;
    }

    public function setUsrCreacion($usrCreacion) {
        $this->usrCreacion = $usrCreacion;
    }

    public function getIdUbicacion() {
        return $this->idUbicacion;
    }
}
