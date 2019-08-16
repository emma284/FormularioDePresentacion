<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Residuossolidos
 *
 * @ORM\Table(name="residuossolidos", indexes={@ORM\Index(name="idPlanta", columns={"idPlanta"})})
 * @ORM\Entity
 */
class Residuossolidos
{
    /**
     * @var string
     *
     * @ORM\Column(name="residuo", type="string", length=150, nullable=false)
     */
    private $residuo;

    /**
     * @var float
     *
     * @ORM\Column(name="cantidad", type="float", precision=10, scale=0, nullable=false)
     */
    private $cantidad;

    /**
     * @var string
     *
     * @ORM\Column(name="unidad", type="string", length=10, nullable=false)
     */
    private $unidad;

    /**
     * @var string
     *
     * @ORM\Column(name="periodo", type="string", length=10, nullable=false)
     */
    private $periodo;

    /**
     * @var string
     *
     * @ORM\Column(name="procesoGenerador", type="string", length=50, nullable=false)
     */
    private $procesogenerador;

    /**
     * @var string
     *
     * @ORM\Column(name="gestion", type="string", length=200, nullable=false)
     */
    private $gestion;

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
     * Set residuo
     *
     * @param string $residuo
     *
     * @return Residuossolidos
     */
    public function setResiduo($residuo)
    {
        $this->residuo = $residuo;

        return $this;
    }

    /**
     * Get residuo
     *
     * @return string
     */
    public function getResiduo()
    {
        return $this->residuo;
    }

    /**
     * Set cantidad
     *
     * @param float $cantidad
     *
     * @return Residuossolidos
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return float
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set unidad
     *
     * @param string $unidad
     *
     * @return Residuossolidos
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
     * Set periodo
     *
     * @param string $periodo
     *
     * @return Residuossolidos
     */
    public function setPeriodo($periodo)
    {
        $this->periodo = $periodo;

        return $this;
    }

    /**
     * Get periodo
     *
     * @return string
     */
    public function getPeriodo()
    {
        return $this->periodo;
    }

    /**
     * Set procesogenerador
     *
     * @param string $procesogenerador
     *
     * @return Residuossolidos
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
     * Set gestion
     *
     * @param string $gestion
     *
     * @return Residuossolidos
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
     * Set tipo
     *
     * @param string $tipo
     *
     * @return Residuossolidos
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
     * @return Residuossolidos
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
