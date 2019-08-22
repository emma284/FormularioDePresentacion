<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Empresa
 *
 * @ORM\Table(name="empresa", indexes={@ORM\Index(name="idPerito", columns={"idPerito"})})
 * @ORM\Entity
 */
class Empresa
{
    /**
     * @var bigint
     *
     * @ORM\Column(name="cuit", type="bigint", nullable=false)
     */
    private $cuit;

    /**
     * @var string
     *
     * @ORM\Column(name="razonSocial", type="string", length=50, nullable=false)
     */
    private $razonsocial;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaInicioActividades", type="date", nullable=false)
     */
    private $fechainicioactividades;

    /**
     * @var integer
     *
     * @ORM\Column(name="tipoPersona", type="integer", nullable=false)
     */
    private $tipopersona;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Perito
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Perito")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idPerito", referencedColumnName="id")
     * })
     */
    private $idperito;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Actividad", inversedBy="idempresa")
     * @ORM\JoinTable(name="actividadempresa",
     *   joinColumns={
     *     @ORM\JoinColumn(name="idEmpresa", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="idActividad", referencedColumnName="id")
     *   }
     * )
     */
    private $idactividad;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idactividad = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set cuit
     *
     * @param integer $cuit
     *
     * @return Empresa
     */
    public function setCuit($cuit)
    {
        $this->cuit = $cuit;

        return $this;
    }

    /**
     * Get cuit
     *
     * @return integer
     */
    public function getCuit()
    {
        return $this->cuit;
    }

    /**
     * Set razonsocial
     *
     * @param string $razonsocial
     *
     * @return Empresa
     */
    public function setRazonsocial($razonsocial)
    {
        $this->razonsocial = $razonsocial;

        return $this;
    }

    /**
     * Get razonsocial
     *
     * @return string
     */
    public function getRazonsocial()
    {
        return $this->razonsocial;
    }

    /**
     * Set fechainicioactividades
     *
     * @param \DateTime $fechainicioactividades
     *
     * @return Empresa
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
     * Set tipopersona
     *
     * @param integer $tipopersona
     *
     * @return Empresa
     */
    public function setTipopersona($tipopersona)
    {
        $this->tipopersona = $tipopersona;

        return $this;
    }

    /**
     * Get tipopersona
     *
     * @return integer
     */
    public function getTipopersona()
    {
        return $this->tipopersona;
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
     * Set idperito
     *
     * @param \AppBundle\Entity\Perito $idperito
     *
     * @return Empresa
     */
    public function setIdperito(\AppBundle\Entity\Perito $idperito = null)
    {
        $this->idperito = $idperito;

        return $this;
    }

    /**
     * Get idperito
     *
     * @return \AppBundle\Entity\Perito
     */
    public function getIdperito()
    {
        return $this->idperito;
    }

    /**
     * Add idactividad
     *
     * @param \AppBundle\Entity\Actividad $idactividad
     *
     * @return Empresa
     */
    public function addIdactividad(\AppBundle\Entity\Actividad $idactividad)
    {
        $this->idactividad[] = $idactividad;

        return $this;
    }

    /**
     * Remove idactividad
     *
     * @param \AppBundle\Entity\Actividad $idactividad
     */
    public function removeIdactividad(\AppBundle\Entity\Actividad $idactividad)
    {
        $this->idactividad->removeElement($idactividad);
    }

    /**
     * Get idactividad
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdactividad()
    {
        return $this->idactividad;
    }
}
