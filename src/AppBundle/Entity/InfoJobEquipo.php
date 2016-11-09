<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InfoJobEquipo
 *
 * @ORM\Table(name="INFO_JOB_EQUIPO", uniqueConstraints={@ORM\UniqueConstraint(name="ID_JOB_EQUIPO_UNIQUE", columns={"ID_JOB_EQUIPO"})}, indexes={@ORM\Index(name="JOB_ID_idx", columns={"JOB_ID"}), @ORM\Index(name="EQUIPO_ID_idx", columns={"EQUIPO_ID"})})
 * @ORM\Entity
 */
class InfoJobEquipo
{
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
     * @ORM\Column(name="ID_JOB_EQUIPO", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idJobEquipo;

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
     * @var \AppBundle\Entity\InfoEquipo
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\InfoEquipo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="EQUIPO_ID", referencedColumnName="ID_EQUIPO")
     * })
     */
    private $equipo;



    /**
     * Set estado
     *
     * @param string $estado
     * @return InfoJobEquipo
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
     * @return InfoJobEquipo
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
     * @return InfoJobEquipo
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
     * Get idJobEquipo
     *
     * @return integer 
     */
    public function getIdJobEquipo()
    {
        return $this->idJobEquipo;
    }

    /**
     * Set job
     *
     * @param \AppBundle\Entity\InfoJob $job
     * @return InfoJobEquipo
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

    /**
     * Set equipo
     *
     * @param \AppBundle\Entity\InfoEquipo $equipo
     * @return InfoJobEquipo
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
