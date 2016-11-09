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


}
