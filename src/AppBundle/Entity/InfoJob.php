<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InfoJob
 *
 * @ORM\Table(name="INFO_JOB", uniqueConstraints={@ORM\UniqueConstraint(name="ID_JOB_UNIQUE", columns={"ID_JOB"})}, indexes={@ORM\Index(name="SCRIPT_ID_idx", columns={"SCRIPT_ID"})})
 * @ORM\Entity
 */
class InfoJob
{
    /**
     * @var string
     *
     * @ORM\Column(name="TIPO", type="string", length=10, nullable=false)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMBRE_JOB", type="string", length=80, nullable=false)
     */
    private $nombreJob;

    /**
     * @var string
     *
     * @ORM\Column(name="ESTADO", type="string", length=20, nullable=false)
     */
    private $estado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FE_EJECUCION", type="datetime", nullable=false)
     */
    private $feEjecucion;

    /**
     * @var integer
     *
     * @ORM\Column(name="INTERVALO", type="integer", nullable=false)
     */
    private $intervalo;

    /**
     * @var string
     *
     * @ORM\Column(name="DURACION", type="string", length=20, nullable=false)
     */
    private $duracion;

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
     * @ORM\Column(name="ID_JOB", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idJob;

    /**
     * @var \AppBundle\Entity\InfoScript
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\InfoScript")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="SCRIPT_ID", referencedColumnName="ID_SCRIPT")
     * })
     */
    private $script;



    /**
     * Set tipo
     *
     * @param string $tipo
     * @return InfoJob
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set nombreJob
     *
     * @param string $nombreJob
     * @return InfoJob
     */
    public function setNombreJob($nombreJob)
    {
        $this->nombreJob = $nombreJob;

        return $this;
    }

    /**
     * Get nombreJob
     *
     * @return string 
     */
    public function getNombreJob()
    {
        return $this->nombreJob;
    }

    /**
     * Set estado
     *
     * @param string $estado
     * @return InfoJob
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
     * Set feEjecucion
     *
     * @param \DateTime $feEjecucion
     * @return InfoJob
     */
    public function setFeEjecucion($feEjecucion)
    {
        $this->feEjecucion = $feEjecucion;

        return $this;
    }

    /**
     * Get feEjecucion
     *
     * @return \DateTime 
     */
    public function getFeEjecucion()
    {
        return $this->feEjecucion;
    }

    /**
     * Set intervalo
     *
     * @param integer $intervalo
     * @return InfoJob
     */
    public function setIntervalo($intervalo)
    {
        $this->intervalo = $intervalo;

        return $this;
    }

    /**
     * Get intervalo
     *
     * @return integer 
     */
    public function getIntervalo()
    {
        return $this->intervalo;
    }

    /**
     * Set duracion
     *
     * @param string $duracion
     * @return InfoJob
     */
    public function setDuracion($duracion)
    {
        $this->duracion = $duracion;

        return $this;
    }

    /**
     * Get duracion
     *
     * @return string 
     */
    public function getDuracion()
    {
        return $this->duracion;
    }

    /**
     * Set feCreacion
     *
     * @param \DateTime $feCreacion
     * @return InfoJob
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
     * @return InfoJob
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
     * Get idJob
     *
     * @return integer 
     */
    public function getIdJob()
    {
        return $this->idJob;
    }

    /**
     * Set script
     *
     * @param \AppBundle\Entity\InfoScript $script
     * @return InfoJob
     */
    public function setScript(\AppBundle\Entity\InfoScript $script = null)
    {
        $this->script = $script;

        return $this;
    }

    /**
     * Get script
     *
     * @return \AppBundle\Entity\InfoScript 
     */
    public function getScript()
    {
        return $this->script;
    }
}
