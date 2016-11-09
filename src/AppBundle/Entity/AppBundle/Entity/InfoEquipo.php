<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InfoEquipo
 *
 * @ORM\Table(name="INFO_EQUIPO", uniqueConstraints={@ORM\UniqueConstraint(name="ID_EQUIPO_UNIQUE", columns={"ID_EQUIPO"})}, indexes={@ORM\Index(name="UBICACION_ID_idx", columns={"UBICACION_ID"})})
 * @ORM\Entity
 */
class InfoEquipo
{
    /**
     * @var string
     *
     * @ORM\Column(name="NOMBRE", type="string", length=50, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPCION", type="string", length=100, nullable=true)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="TIPO", type="string", length=10, nullable=false)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="IP", type="string", length=20, nullable=false)
     */
    private $ip;

    /**
     * @var string
     *
     * @ORM\Column(name="STATUS", type="string", length=10, nullable=false)
     */
    private $status;

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
     * @ORM\Column(name="ID_EQUIPO", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEquipo;

    /**
     * @var \AppBundle\Entity\AdmiUbicacion
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\AdmiUbicacion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="UBICACION_ID", referencedColumnName="ID_UBICACION")
     * })
     */
    private $ubicacion;

    /**
     * @var \AppBundle\Entity\AdmiAcceso
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\AdmiAcceso")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ACCESO_ID", referencedColumnName="ID_ACCESOÍ")
     * })
     */
    private $acceso;


}
