<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sustanciasauxyfluidos
 *
 * @ORM\Table(name="sustanciasauxyfluidos", indexes={@ORM\Index(name="idPlanta", columns={"idPlanta"})})
 * @ORM\Entity
 */
class Sustanciasauxyfluidos
{
    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=50, nullable=false)
     */
    private $nombre;

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
     * @ORM\Column(name="almacenamiento", type="string", length=50, nullable=false)
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
     * @return Sustanciasauxyfluidos
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
     * Set consumoanual
     *
     * @param float $consumoanual
     *
     * @return Sustanciasauxyfluidos
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
     * @return Sustanciasauxyfluidos
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
     * @return Sustanciasauxyfluidos
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
     * @return Sustanciasauxyfluidos
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
