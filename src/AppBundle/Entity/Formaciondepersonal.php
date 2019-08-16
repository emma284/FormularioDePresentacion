<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formaciondepersonal
 *
 * @ORM\Table(name="formaciondepersonal", indexes={@ORM\Index(name="idPlanta", columns={"idPlanta"})})
 * @ORM\Entity
 */
class Formaciondepersonal
{
    /**
     * @var integer
     *
     * @ORM\Column(name="cantidadObreros", type="integer", nullable=false)
     */
    private $cantidadobreros;

    /**
     * @var boolean
     *
     * @ORM\Column(name="capacitacionObreros", type="boolean", nullable=false)
     */
    private $capacitacionobreros;

    /**
     * @var integer
     *
     * @ORM\Column(name="cantidadTecnicos", type="integer", nullable=false)
     */
    private $cantidadtecnicos;

    /**
     * @var boolean
     *
     * @ORM\Column(name="capacitacionTecnicos", type="boolean", nullable=false)
     */
    private $capacitaciontecnicos;

    /**
     * @var integer
     *
     * @ORM\Column(name="cantidadProfesionales", type="integer", nullable=false)
     */
    private $cantidadprofesionales;

    /**
     * @var boolean
     *
     * @ORM\Column(name="capacitacionProfesionales", type="boolean", nullable=false)
     */
    private $capacitacionprofesionales;

    /**
     * @var integer
     *
     * @ORM\Column(name="idFormacionPersonal", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idformacionpersonal;

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

