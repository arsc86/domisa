<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AdmiAcceso
 *
 * @ORM\Table(name="ADMI_UBICACION", uniqueConstraints={@ORM\UniqueConstraint(name="ID_ACCESO_UNIQUE", columns={"ID_ACCESO"})})
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AdmiAccesoRepository")
 */
class AdmiAcceso
{
    /**
     * @var string
     *
     * @ORM\Column(name="NOMBRE_ACCESO", type="string", length=50, nullable=false)
     */
    private $nombreAcceso;

    /**
     * @var string
     *
     * @ORM\Column(name="USUARIO_ACCESO", type="string", length=45, nullable=false)
     */
    private $usuarioAcceso;

    /**
     * @var string
     *
     * @ORM\Column(name="CLAVE_ACCESO", type="string", length=100, nullable=false)
     */
    private $claveAcceso;

    /**
     * @var string
     *
     * @ORM\Column(name="ESTADO", type="string", length=45, nullable=false)
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
     * @ORM\Column(name="ID_ACCESO", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAcceso;


}
