<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sustanciasaux
 *
 * @ORM\Table(name="sustanciasaux", indexes={@ORM\Index(name="idPlanta", columns={"idPlanta"})})
 * @ORM\Entity
 */
class Sustanciasaux
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="combustiblesLiquidos", type="boolean", nullable=false)
     */
    private $combustiblesliquidos;

    /**
     * @var boolean
     *
     * @ORM\Column(name="aireComprimido", type="boolean", nullable=false)
     */
    private $airecomprimido;

    /**
     * @var boolean
     *
     * @ORM\Column(name="gasNatural", type="boolean", nullable=false)
     */
    private $gasnatural;

    /**
     * @var boolean
     *
     * @ORM\Column(name="aceitesYLubricantes", type="boolean", nullable=false)
     */
    private $aceitesylubricantes;

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

