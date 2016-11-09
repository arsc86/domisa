<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InfoScript
 *
 * @ORM\Table(name="INFO_SCRIPT", uniqueConstraints={@ORM\UniqueConstraint(name="ID_SCRIPT_UNIQUE", columns={"ID_SCRIPT"})})
 * @ORM\Entity
 */
class InfoScript
{
    /**
     * @var string
     *
     * @ORM\Column(name="NOMBRE_SCRIPT", type="string", length=45, nullable=false)
     */
    private $nombreScript;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPCION", type="string", length=100, nullable=true)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="SCRIPT", type="blob", length=65535, nullable=false)
     */
    private $script;

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
     * @ORM\Column(name="ID_SCRIPT", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idScript;



    /**
     * Set nombreScript
     *
     * @param string $nombreScript
     * @return InfoScript
     */
    public function setNombreScript($nombreScript)
    {
        $this->nombreScript = $nombreScript;

        return $this;
    }

    /**
     * Get nombreScript
     *
     * @return string 
     */
    public function getNombreScript()
    {
        return $this->nombreScript;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return InfoScript
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set script
     *
     * @param string $script
     * @return InfoScript
     */
    public function setScript($script)
    {
        $this->script = $script;

        return $this;
    }

    /**
     * Get script
     *
     * @return string 
     */
    public function getScript()
    {
        return $this->script;
    }

    /**
     * Set estado
     *
     * @param string $estado
     * @return InfoScript
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
     * @return InfoScript
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
     * @return InfoScript
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
     * Get idScript
     *
     * @return integer 
     */
    public function getIdScript()
    {
        return $this->idScript;
    }
}
