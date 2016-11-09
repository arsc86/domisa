<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InfoJobHistorial
 *
 * @ORM\Table(name="INFO_JOB_HISTORIAL", uniqueConstraints={@ORM\UniqueConstraint(name="ID_JOB_HISTORIAL_UNIQUE", columns={"ID_JOB_HISTORIAL"})}, indexes={@ORM\Index(name="JOB_ID_1_idx", columns={"JOB_ID"})})
 * @ORM\Entity
 */
class InfoJobHistorial
{
    /**
     * @var string
     *
     * @ORM\Column(name="OBSERVACION", type="blob", length=65535, nullable=false)
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
     * @ORM\Column(name="ID_JOB_HISTORIAL", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idJobHistorial;

    /**
     * @var \AppBundle\Entity\InfoJob
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\InfoJob")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="JOB_ID", referencedColumnName="ID_JOB")
     * })
     */
    private $job;



    /**
     * Set observacion
     *
     * @param string $observacion
     * @return InfoJobHistorial
     */
    public function setObservacion($observacion)
    {
        $this->observacion = $observacion;

        return $this;
    }

    /**
     * Get observacion
     *
     * @return string 
     */
    public function getObservacion()
    {
        return $this->observacion;
    }

    /**
     * Set estado
     *
     * @param string $estado
     * @return InfoJobHistorial
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
     * @return InfoJobHistorial
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
     * @return InfoJobHistorial
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
     * Get idJobHistorial
     *
     * @return integer 
     */
    public function getIdJobHistorial()
    {
        return $this->idJobHistorial;
    }

    /**
     * Set job
     *
     * @param \AppBundle\Entity\InfoJob $job
     * @return InfoJobHistorial
     */
    public function setJob(\AppBundle\Entity\InfoJob $job = null)
    {
        $this->job = $job;

        return $this;
    }

    /**
     * Get job
     *
     * @return \AppBundle\Entity\InfoJob 
     */
    public function getJob()
    {
        return $this->job;
    }
}
