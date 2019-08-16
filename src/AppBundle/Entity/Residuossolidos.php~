<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Residuossolidos
 *
 * @ORM\Table(name="residuossolidos", indexes={@ORM\Index(name="idPlanta", columns={"idPlanta"})})
 * @ORM\Entity
 */
class Residuossolidos
{
    /**
     * @var string
     *
     * @ORM\Column(name="residuo", type="string", length=150, nullable=false)
     */
    private $residuo;

    /**
     * @var float
     *
     * @ORM\Column(name="cantidad", type="float", precision=10, scale=0, nullable=false)
     */
    private $cantidad;

    /**
     * @var string
     *
     * @ORM\Column(name="unidad", type="string", length=10, nullable=false)
     */
    private $unidad;

    /**
     * @var string
     *
     * @ORM\Column(name="periodo", type="string", length=10, nullable=false)
     */
    private $periodo;

    /**
     * @var string
     *
     * @ORM\Column(name="procesoGenerador", type="string", length=50, nullable=false)
     */
    private $procesogenerador;

    /**
     * @var string
     *
     * @ORM\Column(name="gestion", type="string", length=200, nullable=false)
     */
    private $gestion;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=50, nullable=false)
     */
    private $tipo;

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

