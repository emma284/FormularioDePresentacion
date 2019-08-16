<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tanque
 *
 * @ORM\Table(name="tanque", indexes={@ORM\Index(name="idPlanta", columns={"idPlanta"})})
 * @ORM\Entity
 */
class Tanque
{
    /**
     * @var integer
     *
     * @ORM\Column(name="cantidad", type="integer", nullable=false)
     */
    private $cantidad;

    /**
     * @var float
     *
     * @ORM\Column(name="capacidadTotal", type="float", precision=10, scale=0, nullable=false)
     */
    private $capacidadtotal;

    /**
     * @var string
     *
     * @ORM\Column(name="unidad", type="string", length=2, nullable=false)
     */
    private $unidad;

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
     * Set cantidad
     *
     * @param integer $cantidad
     *
     * @return Tanque
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return integer
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set capacidadtotal
     *
     * @param float $capacidadtotal
     *
     * @return Tanque
     */
    public function setCapacidadtotal($capacidadtotal)
    {
        $this->capacidadtotal = $capacidadtotal;

        return $this;
    }

    /**
     * Get capacidadtotal
     *
     * @return float
     */
    public function getCapacidadtotal()
    {
        return $this->capacidadtotal;
    }

    /**
     * Set unidad
     *
     * @param string $unidad
     *
     * @return Tanque
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
     * @return Tanque
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
