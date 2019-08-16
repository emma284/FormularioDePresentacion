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



    /**
     * Set combustiblesliquidos
     *
     * @param boolean $combustiblesliquidos
     *
     * @return Sustanciasaux
     */
    public function setCombustiblesliquidos($combustiblesliquidos)
    {
        $this->combustiblesliquidos = $combustiblesliquidos;

        return $this;
    }

    /**
     * Get combustiblesliquidos
     *
     * @return boolean
     */
    public function getCombustiblesliquidos()
    {
        return $this->combustiblesliquidos;
    }

    /**
     * Set airecomprimido
     *
     * @param boolean $airecomprimido
     *
     * @return Sustanciasaux
     */
    public function setAirecomprimido($airecomprimido)
    {
        $this->airecomprimido = $airecomprimido;

        return $this;
    }

    /**
     * Get airecomprimido
     *
     * @return boolean
     */
    public function getAirecomprimido()
    {
        return $this->airecomprimido;
    }

    /**
     * Set gasnatural
     *
     * @param boolean $gasnatural
     *
     * @return Sustanciasaux
     */
    public function setGasnatural($gasnatural)
    {
        $this->gasnatural = $gasnatural;

        return $this;
    }

    /**
     * Get gasnatural
     *
     * @return boolean
     */
    public function getGasnatural()
    {
        return $this->gasnatural;
    }

    /**
     * Set aceitesylubricantes
     *
     * @param boolean $aceitesylubricantes
     *
     * @return Sustanciasaux
     */
    public function setAceitesylubricantes($aceitesylubricantes)
    {
        $this->aceitesylubricantes = $aceitesylubricantes;

        return $this;
    }

    /**
     * Get aceitesylubricantes
     *
     * @return boolean
     */
    public function getAceitesylubricantes()
    {
        return $this->aceitesylubricantes;
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
     * @return Sustanciasaux
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
