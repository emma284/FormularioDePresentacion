<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Perito
 *
 * @ORM\Table(name="perito")
 * @ORM\Entity
 */
class Perito
{
    /**
     * @var integer
     *
     * @ORM\Column(name="nroRegistro", type="integer", nullable=false)
     */
    private $nroregistro;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido", type="string", length=50, nullable=false)
     */
    private $apellido;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=50, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="profesion", type="string", length=50, nullable=false)
     */
    private $profesion;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

