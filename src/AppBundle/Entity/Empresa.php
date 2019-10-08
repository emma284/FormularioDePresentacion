<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Empresa
 *
 * @ORM\Table(name="empresa", indexes={@ORM\Index(name="idPerito", columns={"idPerito"})})
 * @ORM\Entity
 */
class Empresa
{
    /**
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Representante", cascade={"persist"})
     * @Assert\NotBlank(message="No puede dejar en blanco")
     */
    protected $representantes;


    /**
     * @var bigint
     *
     * @ORM\Column(name="cuit", type="bigint", nullable=false)
     * @Assert\NotBlank(message="No puede dejar en blanco")
     */
    private $cuit;

    /**
     * @var string
     *
     * @ORM\Column(name="razonSocial", type="string", length=50, nullable=false)
     * @Assert\NotBlank(message="No puede dejar en blanco")
     */
    private $razonSocial;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaInicioActividades", type="date", nullable=false)
     * @Assert\NotBlank(message="No puede dejar en blanco")
     */
    private $fechainicioactividades;

    /**
     * @var integer
     *
     * @ORM\Column(name="tipoPersona", type="integer", nullable=false)
     * @Assert\NotBlank(message="No puede dejar en blanco")
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
     * 
     */
    private $idperito;

    /**
     * @var \Doctrine\Common\Collections\Collection
     * 
     *
     * @ORM\OneToMany(targetEntity="ActividadEmpresa", mappedBy="idempresa", fetch="EXTRA_LAZY")
     *
     *
     */
    protected $actividadEmpresa;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->actividadEmpresa = new ArrayCollection();
        $this->representantes = new ArrayCollection();
        
    }
    
    public function getRepresentantes()
    {
        return $this->representantes;
    }
    
    public function addRepresentante(Representante $representante)
    {
        
        
        // for a many-to-one association:
        $representante->setIdempresa($this);

        $this->representantes->add($representante);
        
    }

    public function removeRepresentante(Representante $representante)
    {
        $this->representantes->removeElement($representante);
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
     * @param string $razonSocial
     *
     * @return Empresa
     */
    public function setRazonsocial($razonSocial)
    {
        $this->razonSocial = $razonSocial;

        return $this;
    }

    /**
     * Get razonsocial
     *
     * @return string
     */
    public function getRazonSocial()
    {
        return $this->razonSocial;
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
     * Add actividadEmpresa
     *
     * @param \AppBundle\Entity\ActividadEmpresa $actividadEmpresa
     *
     * @return Empresa
     */
    public function addActividadEmpresa(\AppBundle\Entity\ActividadEmpresa $actividadEmpresa)
    {
        $this->actividadEmpresa[] = $actividadEmpresa;

        return $this;
    }

    /**
     * Remove actividadEmpresa
     *
     * @param \AppBundle\Entity\ActividadEmpresa $actividadEmpresa
     */
    public function removeActividadEmpresa(\AppBundle\Entity\Actividad $actividadEmpresa)
    {
        $this->actividadEmpresa->removeElement($actividadEmpresa);
    }

    /**
     * Get actividadEmpresa
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getActividadEmpresa()
    {
        return $this->actividadEmpresa;
    }
    
    public function setActividadEmpresa($actividadEmpresa)
    {
        $this->actividadEmpresa[] = $actividadEmpresa;

        return $this;
    }
   
}
