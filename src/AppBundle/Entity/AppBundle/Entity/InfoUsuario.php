<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InfoUsuario
 *
 * @ORM\Table(name="INFO_USUARIO", uniqueConstraints={@ORM\UniqueConstraint(name="ID_USUARIO_UNIQUE", columns={"ID_USUARIO"})}, indexes={@ORM\Index(name="ROL_ID_idx", columns={"ROL_ID"})})
 * @ORM\Entity
 */
class InfoUsuario
{
    /**
     * @var string
     *
     * @ORM\Column(name="NOMBRE", type="string", length=100, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="USER", type="string", length=45, nullable=false)
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="PASSWORD", type="string", length=45, nullable=false)
     */
    private $password;

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
    private $usrCreacio;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_USUARIO", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUsuario;

    /**
     * @var \AppBundle\Entity\AdmiRol
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\AdmiRol")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ROL_ID", referencedColumnName="ID_ROL")
     * })
     */
    private $rol;


}
