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


}
