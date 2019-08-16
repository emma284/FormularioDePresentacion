<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Riesgopresunto
 *
 * @ORM\Table(name="riesgopresunto", indexes={@ORM\Index(name="idPlanta", columns={"idPlanta"})})
 * @ORM\Entity
 */
class Riesgopresunto
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="fuentesMoviles", type="boolean", nullable=false)
     */
    private $fuentesmoviles;

    /**
     * @var boolean
     *
     * @ORM\Column(name="aparatosSometidos", type="boolean", nullable=false)
     */
    private $aparatossometidos;

    /**
     * @var boolean
     *
     * @ORM\Column(name="sustanciasQuimicas", type="boolean", nullable=false)
     */
    private $sustanciasquimicas;

    /**
     * @var boolean
     *
     * @ORM\Column(name="explosion", type="boolean", nullable=false)
     */
    private $explosion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="incendio", type="boolean", nullable=false)
     */
    private $incendio;

    /**
     * @var boolean
     *
     * @ORM\Column(name="otro", type="boolean", nullable=false)
     */
    private $otro;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones", type="string", length=200, nullable=false)
     */
    private $observaciones;

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
     * Set fuentesmoviles
     *
     * @param boolean $fuentesmoviles
     *
     * @return Riesgopresunto
     */
    public function setFuentesmoviles($fuentesmoviles)
    {
        $this->fuentesmoviles = $fuentesmoviles;

        return $this;
    }

    /**
     * Get fuentesmoviles
     *
     * @return boolean
     */
    public function getFuentesmoviles()
    {
        return $this->fuentesmoviles;
    }

    /**
     * Set aparatossometidos
     *
     * @param boolean $aparatossometidos
     *
     * @return Riesgopresunto
     */
    public function setAparatossometidos($aparatossometidos)
    {
        $this->aparatossometidos = $aparatossometidos;

        return $this;
    }

    /**
     * Get aparatossometidos
     *
     * @return boolean
     */
    public function getAparatossometidos()
    {
        return $this->aparatossometidos;
    }

    /**
     * Set sustanciasquimicas
     *
     * @param boolean $sustanciasquimicas
     *
     * @return Riesgopresunto
     */
    public function setSustanciasquimicas($sustanciasquimicas)
    {
        $this->sustanciasquimicas = $sustanciasquimicas;

        return $this;
    }

    /**
     * Get sustanciasquimicas
     *
     * @return boolean
     */
    public function getSustanciasquimicas()
    {
        return $this->sustanciasquimicas;
    }

    /**
     * Set explosion
     *
     * @param boolean $explosion
     *
     * @return Riesgopresunto
     */
    public function setExplosion($explosion)
    {
        $this->explosion = $explosion;

        return $this;
    }

    /**
     * Get explosion
     *
     * @return boolean
     */
    public function getExplosion()
    {
        return $this->explosion;
    }

    /**
     * Set incendio
     *
     * @param boolean $incendio
     *
     * @return Riesgopresunto
     */
    public function setIncendio($incendio)
    {
        $this->incendio = $incendio;

        return $this;
    }

    /**
     * Get incendio
     *
     * @return boolean
     */
    public function getIncendio()
    {
        return $this->incendio;
    }

    /**
     * Set otro
     *
     * @param boolean $otro
     *
     * @return Riesgopresunto
     */
    public function setOtro($otro)
    {
        $this->otro = $otro;

        return $this;
    }

    /**
     * Get otro
     *
     * @return boolean
     */
    public function getOtro()
    {
        return $this->otro;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     *
     * @return Riesgopresunto
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string
     */
    public function getObservaciones()
    {
        return $this->observaciones;
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
     * @return Riesgopresunto
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
