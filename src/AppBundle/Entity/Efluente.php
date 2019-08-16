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



    /**
     * Set procesogenerador
     *
     * @param string $procesogenerador
     *
     * @return Efluente
     */
    public function setProcesogenerador($procesogenerador)
    {
        $this->procesogenerador = $procesogenerador;

        return $this;
    }

    /**
     * Get procesogenerador
     *
     * @return string
     */
    public function getProcesogenerador()
    {
        return $this->procesogenerador;
    }

    /**
     * Set componentesrelevantes
     *
     * @param string $componentesrelevantes
     *
     * @return Efluente
     */
    public function setComponentesrelevantes($componentesrelevantes)
    {
        $this->componentesrelevantes = $componentesrelevantes;

        return $this;
    }

    /**
     * Get componentesrelevantes
     *
     * @return string
     */
    public function getComponentesrelevantes()
    {
        return $this->componentesrelevantes;
    }

    /**
     * Set volumen
     *
     * @param float $volumen
     *
     * @return Efluente
     */
    public function setVolumen($volumen)
    {
        $this->volumen = $volumen;

        return $this;
    }

    /**
     * Get volumen
     *
     * @return float
     */
    public function getVolumen()
    {
        return $this->volumen;
    }

    /**
     * Set unidad
     *
     * @param string $unidad
     *
     * @return Efluente
     */
    public function setUnidad($unidad)
    {
        $this->unidad = $unidad;

        return $this;
    }

    /**
     * Get unidad
     *
     * @return string
     */
    public function getUnidad()
    {
        return $this->unidad;
    }

    /**
     * Set unidaddetiempo
     *
     * @param string $unidaddetiempo
     *
     * @return Efluente
     */
    public function setUnidaddetiempo($unidaddetiempo)
    {
        $this->unidaddetiempo = $unidaddetiempo;

        return $this;
    }

    /**
     * Get unidaddetiempo
     *
     * @return string
     */
    public function getUnidaddetiempo()
    {
        return $this->unidaddetiempo;
    }

    /**
     * Set gestion
     *
     * @param string $gestion
     *
     * @return Efluente
     */
    public function setGestion($gestion)
    {
        $this->gestion = $gestion;

        return $this;
    }

    /**
     * Get gestion
     *
     * @return string
     */
    public function getGestion()
    {
        return $this->gestion;
    }

    /**
     * Set cuerporeceptor
     *
     * @param string $cuerporeceptor
     *
     * @return Efluente
     */
    public function setCuerporeceptor($cuerporeceptor)
    {
        $this->cuerporeceptor = $cuerporeceptor;

        return $this;
    }

    /**
     * Get cuerporeceptor
     *
     * @return string
     */
    public function getCuerporeceptor()
    {
        return $this->cuerporeceptor;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     *
     * @return Efluente
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idplanta
     *
     * @param \AppBundle\Entity\Planta $idplanta
     *
     * @return Efluente
     */
    public function setIdplanta(\AppBundle\Entity\Planta $idplanta = null)
    {
        $this->idplanta = $idplanta;

        return $this;
    }

    /**
     * Get idplanta
     *
     * @return \AppBundle\Entity\Planta
     */
    public function getIdplanta()
    {
        return $this->idplanta;
    }
}
