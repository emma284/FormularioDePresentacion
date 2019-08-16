<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Servicio
 *
 * @ORM\Table(name="servicio", indexes={@ORM\Index(name="idPlanta", columns={"idPlanta"})})
 * @ORM\Entity
 */
class Servicio
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="energiaElectrica", type="boolean", nullable=false)
     */
    private $energiaelectrica;

    /**
     * @var boolean
     *
     * @ORM\Column(name="cloacas", type="boolean", nullable=false)
     */
    private $cloacas;

    /**
     * @var boolean
     *
     * @ORM\Column(name="aguaRed", type="boolean", nullable=false)
     */
    private $aguared;

    /**
     * @var boolean
     *
     * @ORM\Column(name="gasNatural", type="boolean", nullable=false)
     */
    private $gasnatural;

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

