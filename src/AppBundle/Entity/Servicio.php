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



    /**
     * Set energiaelectrica
     *
     * @param boolean $energiaelectrica
     *
     * @return Servicio
     */
    public function setEnergiaelectrica($energiaelectrica)
    {
        $this->energiaelectrica = $energiaelectrica;

        return $this;
    }

    /**
     * Get energiaelectrica
     *
     * @return boolean
     */
    public function getEnergiaelectrica()
    {
        return $this->energiaelectrica;
    }

    /**
     * Set cloacas
     *
     * @param boolean $cloacas
     *
     * @return Servicio
     */
    public function setCloacas($cloacas)
    {
        $this->cloacas = $cloacas;

        return $this;
    }

    /**
     * Get cloacas
     *
     * @return boolean
     */
    public function getCloacas()
    {
        return $this->cloacas;
    }

    /**
     * Set aguared
     *
     * @param boolean $aguared
     *
     * @return Servicio
     */
    public function setAguared($aguared)
    {
        $this->aguared = $aguared;

        return $this;
    }

    /**
     * Get aguared
     *
     * @return boolean
     */
    public function getAguared()
    {
        return $this->aguared;
    }

    /**
     * Set gasnatural
     *
     * @param boolean $gasnatural
     *
     * @return Servicio
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
     * @return Servicio
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
