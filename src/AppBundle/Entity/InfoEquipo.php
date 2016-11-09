<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InfoEquipo
 *
 * @ORM\Table(name="INFO_EQUIPO", uniqueConstraints={@ORM\UniqueConstraint(name="ID_EQUIPO_UNIQUE", columns={"ID_EQUIPO"})}, indexes={@ORM\Index(name="UBICACION_ID_idx", columns={"UBICACION_ID"})})
 * @ORM\Entity
 */
class InfoEquipo
{
    /**
     * @var string
     *
     * @ORM\Column(name="NOMBRE", type="string", length=50, nullable=false)
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
     * @ORM\Column(name="TIPO", type="string", length=10, nullable=false)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="IP", type="string", length=20, nullable=false)
     */
    private $ip;

    /**
     * @var string
     *
     * @ORM\Column(name="STATUS", type="string", length=10, nullable=false)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="USUARIO", type="string", length=45, nullable=false)
     */
    private $usuario;

    /**
     * @var string
     *
     * @ORM\Column(name="PASSWORD", type="string", length=45, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="ESTADO", type="string", length=20, nullable=false)
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
     * @ORM\Column(name="ID_EQUIPO", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEquipo;

    /**
     * @var \AppBundle\Entity\AdmiUbicacion
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\AdmiUbicacion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="UBICACION_ID", referencedColumnName="ID_UBICACION")
     * })
     */
    private $ubicacion;

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

    public function getTipo() {
        return $this->tipo;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function getIp() {
        return $this->ip;
    }

    public function setIp($ip) {
        $this->ip = $ip;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

    public function getUsuario() {
        return $this->usuario;
    }

    public function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
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

    public function getIdEquipo() {
        return $this->idEquipo;
    } 


    /**
     * Set ubicacion
     *
     * @param \AppBundle\Entity\AdmiUbicacion $ubicacion
     * @return InfoEquipo
     */
    public function setUbicacion(\AppBundle\Entity\AdmiUbicacion $ubicacion = null)
    {
        $this->ubicacion = $ubicacion;

        return $this;
    }

    /**
     * Get ubicacion
     *
     * @return \AppBundle\Entity\AdmiUbicacion 
     */
    public function getUbicacion()
    {
        return $this->ubicacion;
    }
    /**
     * @var \AppBundle\Entity\AdmiAcceso
     */
    private $acceso;


    /**
     * Set acceso
     *
     * @param \AppBundle\Entity\AdmiAcceso $acceso
     * @return InfoEquipo
     */
    public function setAcceso(\AppBundle\Entity\AdmiAcceso $acceso = null)
    {
        $this->acceso = $acceso;

        return $this;
    }

    /**
     * Get acceso
     *
     * @return \AppBundle\Entity\AdmiAcceso 
     */
    public function getAcceso()
    {
        return $this->acceso;
    }
}
