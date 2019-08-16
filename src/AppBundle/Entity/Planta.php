<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Planta
 *
 * @ORM\Table(name="planta", indexes={@ORM\Index(name="idEmpresa", columns={"idEmpresa"})})
 * @ORM\Entity
 */
class Planta
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="fueraProv", type="boolean", nullable=false)
     */
    private $fueraprov;

    /**
     * @var float
     *
     * @ORM\Column(name="superficieDeposito", type="float", precision=10, scale=0, nullable=false)
     */
    private $superficiedeposito;

    /**
     * @var float
     *
     * @ORM\Column(name="superficieTotalM2", type="float", precision=10, scale=0, nullable=false)
     */
    private $superficietotalm2;

    /**
     * @var float
     *
     * @ORM\Column(name="superficieCubiertaM2", type="float", precision=10, scale=0, nullable=false)
     */
    private $superficiecubiertam2;

    /**
     * @var float
     *
     * @ORM\Column(name="potenciaInstaladaHP", type="float", precision=10, scale=0, nullable=false)
     */
    private $potenciainstaladahp;

    /**
     * @var integer
     *
     * @ORM\Column(name="dotacionDePersonal", type="integer", nullable=false)
     */
    private $dotaciondepersonal;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaInicioActividades", type="date", nullable=false)
     */
    private $fechainicioactividades;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Empresa
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Empresa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idEmpresa", referencedColumnName="id")
     * })
     */
    private $idempresa;



    /**
     * Set fueraprov
     *
     * @param boolean $fueraprov
     *
     * @return Planta
     */
    public function setFueraprov($fueraprov)
    {
        $this->fueraprov = $fueraprov;

        return $this;
    }

    /**
     * Get fueraprov
     *
     * @return boolean
     */
    public function getFueraprov()
    {
        return $this->fueraprov;
    }

    /**
     * Set superficiedeposito
     *
     * @param float $superficiedeposito
     *
     * @return Planta
     */
    public function setSuperficiedeposito($superficiedeposito)
    {
        $this->superficiedeposito = $superficiedeposito;

        return $this;
    }

    /**
     * Get superficiedeposito
     *
     * @return float
     */
    public function getSuperficiedeposito()
    {
        return $this->superficiedeposito;
    }

    /**
     * Set superficietotalm2
     *
     * @param float $superficietotalm2
     *
     * @return Planta
     */
    public function setSuperficietotalm2($superficietotalm2)
    {
        $this->superficietotalm2 = $superficietotalm2;

        return $this;
    }

    /**
     * Get superficietotalm2
     *
     * @return float
     */
    public function getSuperficietotalm2()
    {
        return $this->superficietotalm2;
    }

    /**
     * Set superficiecubiertam2
     *
     * @param float $superficiecubiertam2
     *
     * @return Planta
     */
    public function setSuperficiecubiertam2($superficiecubiertam2)
    {
        $this->superficiecubiertam2 = $superficiecubiertam2;

        return $this;
    }

    /**
     * Get superficiecubiertam2
     *
     * @return float
     */
    public function getSuperficiecubiertam2()
    {
        return $this->superficiecubiertam2;
    }

    /**
     * Set potenciainstaladahp
     *
     * @param float $potenciainstaladahp
     *
     * @return Planta
     */
    public function setPotenciainstaladahp($potenciainstaladahp)
    {
        $this->potenciainstaladahp = $potenciainstaladahp;

        return $this;
    }

    /**
     * Get potenciainstaladahp
     *
     * @return float
     */
    public function getPotenciainstaladahp()
    {
        return $this->potenciainstaladahp;
    }

    /**
     * Set dotaciondepersonal
     *
     * @param integer $dotaciondepersonal
     *
     * @return Planta
     */
    public function setDotaciondepersonal($dotaciondepersonal)
    {
        $this->dotaciondepersonal = $dotaciondepersonal;

        return $this;
    }

    /**
     * Get dotaciondepersonal
     *
     * @return integer
     */
    public function getDotaciondepersonal()
    {
        return $this->dotaciondepersonal;
    }

    /**
     * Set fechainicioactividades
     *
     * @param \DateTime $fechainicioactividades
     *
     * @return Planta
     */
    public function setFechainicioactividades($fechainicioactividades)
    {
        $this->fechainicioactividades = $fechainicioactividades;

        return $this;
    }

    /**
     * Get fechainicioactividades
     *
     * @return \DateTime
     */
    public function getFechainicioactividades()
    {
        return $this->fechainicioactividades;
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
     * Set idempresa
     *
     * @param \AppBundle\Entity\Empresa $idempresa
     *
     * @return Planta
     */
    public function setIdempresa(\AppBundle\Entity\Empresa $idempresa = null)
    {
        $this->idempresa = $idempresa;

        return $this;
    }

    /**
     * Get idempresa
     *
     * @return \AppBundle\Entity\Empresa
     */
    public function getIdempresa()
    {
        return $this->idempresa;
    }
}
