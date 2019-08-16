<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Emisiongaseosa
 *
 * @ORM\Table(name="emisiongaseosa", indexes={@ORM\Index(name="idPlanta", columns={"idPlanta"})})
 * @ORM\Entity
 */
class Emisiongaseosa
{
    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=60, nullable=false)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="emision", type="string", length=50, nullable=false)
     */
    private $emision;

    /**
     * @var string
     *
     * @ORM\Column(name="procesoGenerador", type="string", length=100, nullable=false)
     */
    private $procesogenerador;

    /**
     * @var string
     *
     * @ORM\Column(name="tratamiento", type="string", length=100, nullable=false)
     */
    private $tratamiento;

    /**
     * @var string
     *
     * @ORM\Column(name="componentesRelevantes", type="string", length=100, nullable=false)
     */
    private $componentesrelevantes;

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

