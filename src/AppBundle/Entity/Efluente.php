<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Efluente
 *
 * @ORM\Table(name="efluente", indexes={@ORM\Index(name="idPlanta", columns={"idPlanta"})})
 * @ORM\Entity
 */
class Efluente
{
    /**
     * @var string
     *
     * @ORM\Column(name="procesoGenerador", type="string", length=50, nullable=false)
     */
    private $procesogenerador;

    /**
     * @var string
     *
     * @ORM\Column(name="componentesRelevantes", type="string", length=100, nullable=false)
     */
    private $componentesrelevantes;

    /**
     * @var float
     *
     * @ORM\Column(name="volumen", type="float", precision=10, scale=0, nullable=false)
     */
    private $volumen;

    /**
     * @var string
     *
     * @ORM\Column(name="unidad", type="string", length=5, nullable=false)
     */
    private $unidad;

    /**
     * @var string
     *
     * @ORM\Column(name="unidadDeTiempo", type="string", length=10, nullable=false)
     */
    private $unidaddetiempo;

    /**
     * @var string
     *
     * @ORM\Column(name="gestion", type="string", length=200, nullable=false)
     */
    private $gestion;

    /**
     * @var string
     *
     * @ORM\Column(name="cuerpoReceptor", type="string", length=200, nullable=false)
     */
    private $cuerporeceptor;

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

