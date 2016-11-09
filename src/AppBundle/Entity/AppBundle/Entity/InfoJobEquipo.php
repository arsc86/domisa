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


}
