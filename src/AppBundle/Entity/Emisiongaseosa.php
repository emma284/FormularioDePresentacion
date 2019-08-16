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



    /**
     * Set tipo
     *
     * @param string $tipo
     *
     * @return Emisiongaseosa
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
     * Set emision
     *
     * @param string $emision
     *
     * @return Emisiongaseosa
     */
    public function setEmision($emision)
    {
        $this->emision = $emision;

        return $this;
    }

    /**
     * Get emision
     *
     * @return string
     */
    public function getEmision()
    {
        return $this->emision;
    }

    /**
     * Set procesogenerador
     *
     * @param string $procesogenerador
     *
     * @return Emisiongaseosa
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
     * Set tratamiento
     *
     * @param string $tratamiento
     *
     * @return Emisiongaseosa
     */
    public function setTratamiento($tratamiento)
    {
        $this->tratamiento = $tratamiento;

        return $this;
    }

    /**
     * Get tratamiento
     *
     * @return string
     */
    public function getTratamiento()
    {
        return $this->tratamiento;
    }

    /**
     * Set componentesrelevantes
     *
     * @param string $componentesrelevantes
     *
     * @return Emisiongaseosa
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
     * @return Emisiongaseosa
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
