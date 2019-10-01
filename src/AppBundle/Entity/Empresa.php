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
     */
    protected $representantes;
    protected $grupoActividad;




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
    protected $idactividad;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idactividad = new ArrayCollection();
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
    
    public function setIdactividad($idactividad)
    {
        $this->idactividad[] = $idactividad;

        return $this;
    }
    
    public function setGrupoActividad($grupoActividad)
    {
        $this->grupoActividad = $grupoActividad;

        return $this;
    }

    public function getGrupoActividad()
    {
        return $this->grupoActividad;
    }
}
