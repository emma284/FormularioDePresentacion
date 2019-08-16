<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Riesgopresunto
 *
 * @ORM\Table(name="riesgopresunto", indexes={@ORM\Index(name="idPlanta", columns={"idPlanta"})})
 * @ORM\Entity
 */
class Riesgopresunto
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="fuentesMoviles", type="boolean", nullable=false)
     */
    private $fuentesmoviles;

    /**
     * @var boolean
     *
     * @ORM\Column(name="aparatosSometidos", type="boolean", nullable=false)
     */
    private $aparatossometidos;

    /**
     * @var boolean
     *
     * @ORM\Column(name="sustanciasQuimicas", type="boolean", nullable=false)
     */
    private $sustanciasquimicas;

    /**
     * @var boolean
     *
     * @ORM\Column(name="explosion", type="boolean", nullable=false)
     */
    private $explosion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="incendio", type="boolean", nullable=false)
     */
    private $incendio;

    /**
     * @var boolean
     *
     * @ORM\Column(name="otro", type="boolean", nullable=false)
     */
    private $otro;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones", type="string", length=200, nullable=false)
     */
    private $observaciones;

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

