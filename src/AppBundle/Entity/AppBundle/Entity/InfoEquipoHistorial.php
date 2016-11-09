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


}
