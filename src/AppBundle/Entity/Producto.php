<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Producto
 *
 * @ORM\Table(name="producto", indexes={@ORM\Index(name="idPlanta", columns={"idPlanta"})})
 * @ORM\Entity
 */
class Producto
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
     * @ORM\Column(name="produccionAnual", type="float", precision=10, scale=0, nullable=false)
     */
    private $produccionanual;

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
     * @var string
     *
     * @ORM\Column(name="clasificacion", type="string", length=20, nullable=false)
     */
    private $clasificacion;

    /**
     * @var string
     *
     * @ORM\Column(name="especificacion", type="string", length=200, nullable=false)
     */
    private $especificacion;

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
     * @return Producto
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
     * @return Producto
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
     * Set produccionanual
     *
     * @param float $produccionanual
     *
     * @return Producto
     */
    public function setProduccionanual($produccionanual)
    {
        $this->produccionanual = $produccionanual;

        return $this;
    }

    /**
     * Get produccionanual
     *
     * @return float
     */
    public function getProduccionanual()
    {
        return $this->produccionanual;
    }

    /**
     * Set unidad
     *
     * @param string $unidad
     *
     * @return Producto
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
     * @return Producto
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
     * Set clasificacion
     *
     * @param string $clasificacion
     *
     * @return Producto
     */
    public function setClasificacion($clasificacion)
    {
        $this->clasificacion = $clasificacion;

        return $this;
    }

    /**
     * Get clasificacion
     *
     * @return string
     */
    public function getClasificacion()
    {
        return $this->clasificacion;
    }

    /**
     * Set especificacion
     *
     * @param string $especificacion
     *
     * @return Producto
     */
    public function setEspecificacion($especificacion)
    {
        $this->especificacion = $especificacion;

        return $this;
    }

    /**
     * Get especificacion
     *
     * @return string
     */
    public function getEspecificacion()
    {
        return $this->especificacion;
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
     * @return Producto
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
