<?php

namespace AppBundle\Entity;

/**
 * AdmiAcceso
 */
class AdmiAcceso
{
    /**
     * @var string
     */
    private $nombreAcceso;

    /**
     * @var string
     */
    private $usuarioAcceso;

    /**
     * @var string
     */
    private $claveAcceso;

    /**
     * @var string
     */
    private $estado;

    /**
     * @var \DateTime
     */
    private $feCreacion;

    /**
     * @var string
     */
    private $usrCreacion;

    /**
     * @var integer
     */
    private $idAcceso;


    /**
     * Set nombreAcceso
     *
     * @param string $nombreAcceso
     * @return AdmiAcceso
     */
    public function setNombreAcceso($nombreAcceso)
    {
        $this->nombreAcceso = $nombreAcceso;

        return $this;
    }

    /**
     * Get nombreAcceso
     *
     * @return string 
     */
    public function getNombreAcceso()
    {
        return $this->nombreAcceso;
    }

    /**
     * Set usuarioAcceso
     *
     * @param string $usuarioAcceso
     * @return AdmiAcceso
     */
    public function setUsuarioAcceso($usuarioAcceso)
    {
        $this->usuarioAcceso = $usuarioAcceso;

        return $this;
    }

    /**
     * Get usuarioAcceso
     *
     * @return string 
     */
    public function getUsuarioAcceso()
    {
        return $this->usuarioAcceso;
    }

    /**
     * Set claveAcceso
     *
     * @param string $claveAcceso
     * @return AdmiAcceso
     */
    public function setClaveAcceso($claveAcceso)
    {
        $this->claveAcceso = $claveAcceso;

        return $this;
    }

    /**
     * Get claveAcceso
     *
     * @return string 
     */
    public function getClaveAcceso()
    {
        return $this->claveAcceso;
    }

    /**
     * Set estado
     *
     * @param string $estado
     * @return AdmiAcceso
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
     * @return AdmiAcceso
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
     * @return AdmiAcceso
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

   
    public function getidAcceso()
    {
        return $this->idAcceso;
    }
}
