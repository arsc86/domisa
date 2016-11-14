<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InfoEquipoRespaldo
 *
 * @ORM\Table(name="INFO_EQUIPO_RESPALDO", uniqueConstraints={@ORM\UniqueConstraint(name="ID_RESPALDO_UNIQUE", columns={"ID_RESPALDO"})}, indexes={@ORM\Index(name="EQUIPO_ID_idx", columns={"EQUIPO_ID"})})
 * @ORM\Entity
 */
class InfoEquipoRespaldo
{
    /**
     * @var string
     *
     * @ORM\Column(name="OBSERVACION", type="blob", length=65535, nullable=true)
     */
    private $respaldo;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPCION", type="string", length=500, nullable=false)
     */
    private $descripcion;

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
     * @ORM\Column(name="ID_RESPALDO", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRespaldo;

    /**
     * @var \AppBundle\Entity\InfoEquipo
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\InfoEquipo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="EQUIPO_ID", referencedColumnName="ID_EQUIPO")
     * })
     */
    private $equipo;
  
    public function setRespaldo($respaldo)
    {
        $this->respaldo = $respaldo;

        return $this;
    }

    /**
     * Get respaldo
     *
     * @return blob 
     */
    public function getRespaldo()
    {
        return $this->respaldo;
    }

    /**
     * Set estado
     *
     * @param string $estado
     * @return InfoEquipoHistorial
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set feCreacion
     *
     * @param \DateTime $feCreacion
     * @return InfoEquipoHistorial
     */
    public function setFeCreacion($feCreacion)
    {
        $this->feCreacion = $feCreacion;

        return $this;
    }

    /**
     * Get feCreacion
     *
     * @return \DateTime 
     */
    public function getFeCreacion()
    {
        return $this->feCreacion;
    }

    /**
     * Set usrCreacion
     *
     * @param string $usrCreacion
     * @return InfoEquipoHistorial
     */
    public function setUsrCreacion($usrCreacion)
    {
        $this->usrCreacion = $usrCreacion;

        return $this;
    }

    /**
     * Get usrCreacion
     *
     * @return string 
     */
    public function getUsrCreacion()
    {
        return $this->usrCreacion;
    }

    /**
     * Get idEquipoHitorial
     *
     * @return integer 
     */
    public function getIdEquipoHitorial()
    {
        return $this->idEquipoHitorial;
    }

    /**
     * Set equipo
     *
     * @param \AppBundle\Entity\InfoEquipo $equipo
     * @return InfoEquipoHistorial
     */
    public function setEquipo(\AppBundle\Entity\InfoEquipo $equipo = null)
    {
        $this->equipo = $equipo;

        return $this;
    }

    /**
     * Get equipo
     *
     * @return \AppBundle\Entity\InfoEquipo 
     */
    public function getEquipo()
    {
        return $this->equipo;
    }
}
