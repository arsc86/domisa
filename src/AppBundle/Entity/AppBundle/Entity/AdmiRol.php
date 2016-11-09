<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AdmiRol
 *
 * @ORM\Table(name="ADMI_ROL", uniqueConstraints={@ORM\UniqueConstraint(name="ID_ROL_UNIQUE", columns={"ID_ROL"}), @ORM\UniqueConstraint(name="NOMBRE_ROL_UNIQUE", columns={"NOMBRE_ROL"})})
 * @ORM\Entity
 */
class AdmiRol
{
    /**
     * @var string
     *
     * @ORM\Column(name="NOMBRE_ROL", type="string", length=45, nullable=false)
     */
    private $nombreRol;

    /**
     * @var string
     *
     * @ORM\Column(name="ESTADO", type="string", length=10, nullable=false)
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
     * @ORM\Column(name="ID_ROL", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRol;


}
