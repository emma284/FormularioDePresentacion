<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Insumo
 *
 * @ORM\Table(name="insumo", indexes={@ORM\Index(name="idPlanta", columns={"idPlanta"})})
 * @ORM\Entity
 */
class Insumo
{
    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=50, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="estadoFisico", type="string", length=20, nullable=false)
     */
    private $estadofisico;

    /**
     * @var float
     *
     * @ORM\Column(name="consumoAnual", type="float", precision=10, scale=0, nullable=false)
     */
    private $consumoanual;

    /**
     * @var string
     *
     * @ORM\Column(name="unidad", type="string", length=10, nullable=false)
     */
    private $unidad;

    /**
     * @var string
     *
     * @ORM\Column(name="almacenamiento", type="string", length=100, nullable=false)
     */
    private $almacenamiento;

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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Insumo
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set estadofisico
     *
     * @param string $estadofisico
     *
     * @return Insumo
     */
    public function setEstadofisico($estadofisico)
    {
        $this->estadofisico = $estadofisico;

        return $this;
    }

    /**
     * Get estadofisico
     *
     * @return string
     */
    public function getEstadofisico()
    {
        return $this->estadofisico;
    }

    /**
     * Set consumoanual
     *
     * @param float $consumoanual
     *
     * @return Insumo
     */
    public function setConsumoanual($consumoanual)
    {
        $this->consumoanual = $consumoanual;

        return $this;
    }

    /**
     * Get consumoanual
     *
     * @return float
     */
    public function getConsumoanual()
    {
        return $this->consumoanual;
    }

    /**
     * Set unidad
     *
     * @param string $unidad
     *
     * @return Insumo
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
     * Set almacenamiento
     *
     * @param string $almacenamiento
     *
     * @return Insumo
     */
    public function setAlmacenamiento($almacenamiento)
    {
        $this->almacenamiento = $almacenamiento;

        return $this;
    }

    /**
     * Get almacenamiento
     *
     * @return string
     */
    public function getAlmacenamiento()
    {
        return $this->almacenamiento;
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
     * @return Insumo
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
