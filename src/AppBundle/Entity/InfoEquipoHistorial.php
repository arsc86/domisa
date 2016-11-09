<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InfoEquipoHistorial
 *
 * @ORM\Table(name="INFO_EQUIPO_HISTORIAL", uniqueConstraints={@ORM\UniqueConstraint(name="ID_EQUIPO_HITORIAL_UNIQUE", columns={"ID_EQUIPO_HITORIAL"})}, indexes={@ORM\Index(name="EQUIPO_ID_idx", columns={"EQUIPO_ID"})})
 * @ORM\Entity
 */
class InfoEquipoHistorial
{
    /**
     * @var string
     *
     * @ORM\Column(name="OBSERVACION", type="blob", length=65535, nullable=true)
     */
    private $observacion;

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
     * @ORM\Column(name="ID_EQUIPO_HITORIAL", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEquipoHitorial;

    /**
     * @var \AppBundle\Entity\InfoEquipo
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\InfoEquipo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="EQUIPO_ID", referencedColumnName="ID_EQUIPO")
     * })
     */
    private $equipo;



    /**
     * Set observacion
     *
     * @param blob $observacion
     * @return InfoEquipoHistorial
     */
    public function setObservacion($observacion)
    {
        $this->observacion = $observacion;

        return $this;
    }

    /**
     * Get observacion
     *
     * @return blob 
     */
    public function getObservacion()
    {
        return $this->observacion;
    }

    /**
     * Set estado
     *
     * @param string $estado
     * @return InfoEquipoHistorial
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string 
     */
    public function getEstado()
    {
        return $this->estado;
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
