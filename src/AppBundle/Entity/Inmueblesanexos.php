<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Inmueblesanexos
 *
 * @ORM\Table(name="inmueblesanexos", indexes={@ORM\Index(name="idPlanta", columns={"idPlanta"})})
 * @ORM\Entity
 */
class Inmueblesanexos
{
    /**
     * @var string
     *
     * @ORM\Column(name="domicilio", type="string", length=100, nullable=false)
     */
    private $domicilio;

    /**
     * @var string
     *
     * @ORM\Column(name="actividad", type="string", length=100, nullable=false)
     */
    private $actividad;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Planta
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Planta")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idPlanta", referencedColumnName="id")
     * })
     */
    private $idplanta;


}

