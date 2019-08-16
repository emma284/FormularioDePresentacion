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



    /**
     * Set cantidadobreros
     *
     * @param integer $cantidadobreros
     *
     * @return Formaciondepersonal
     */
    public function setCantidadobreros($cantidadobreros)
    {
        $this->cantidadobreros = $cantidadobreros;

        return $this;
    }

    /**
     * Get cantidadobreros
     *
     * @return integer
     */
    public function getCantidadobreros()
    {
        return $this->cantidadobreros;
    }

    /**
     * Set capacitacionobreros
     *
     * @param boolean $capacitacionobreros
     *
     * @return Formaciondepersonal
     */
    public function setCapacitacionobreros($capacitacionobreros)
    {
        $this->capacitacionobreros = $capacitacionobreros;

        return $this;
    }

    /**
     * Get capacitacionobreros
     *
     * @return boolean
     */
    public function getCapacitacionobreros()
    {
        return $this->capacitacionobreros;
    }

    /**
     * Set cantidadtecnicos
     *
     * @param integer $cantidadtecnicos
     *
     * @return Formaciondepersonal
     */
    public function setCantidadtecnicos($cantidadtecnicos)
    {
        $this->cantidadtecnicos = $cantidadtecnicos;

        return $this;
    }

    /**
     * Get cantidadtecnicos
     *
     * @return integer
     */
    public function getCantidadtecnicos()
    {
        return $this->cantidadtecnicos;
    }

    /**
     * Set capacitaciontecnicos
     *
     * @param boolean $capacitaciontecnicos
     *
     * @return Formaciondepersonal
     */
    public function setCapacitaciontecnicos($capacitaciontecnicos)
    {
        $this->capacitaciontecnicos = $capacitaciontecnicos;

        return $this;
    }

    /**
     * Get capacitaciontecnicos
     *
     * @return boolean
     */
    public function getCapacitaciontecnicos()
    {
        return $this->capacitaciontecnicos;
    }

    /**
     * Set cantidadprofesionales
     *
     * @param integer $cantidadprofesionales
     *
     * @return Formaciondepersonal
     */
    public function setCantidadprofesionales($cantidadprofesionales)
    {
        $this->cantidadprofesionales = $cantidadprofesionales;

        return $this;
    }

    /**
     * Get cantidadprofesionales
     *
     * @return integer
     */
    public function getCantidadprofesionales()
    {
        return $this->cantidadprofesionales;
    }

    /**
     * Set capacitacionprofesionales
     *
     * @param boolean $capacitacionprofesionales
     *
     * @return Formaciondepersonal
     */
    public function setCapacitacionprofesionales($capacitacionprofesionales)
    {
        $this->capacitacionprofesionales = $capacitacionprofesionales;

        return $this;
    }

    /**
     * Get capacitacionprofesionales
     *
     * @return boolean
     */
    public function getCapacitacionprofesionales()
    {
        return $this->capacitacionprofesionales;
    }

    /**
     * Get idformacionpersonal
     *
     * @return integer
     */
    public function getIdformacionpersonal()
    {
        return $this->idformacionpersonal;
    }

    /**
     * Set idplanta
     *
     * @param \AppBundle\Entity\Planta $idplanta
     *
     * @return Formaciondepersonal
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
