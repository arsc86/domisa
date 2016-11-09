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


}
