<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Actividad
 *
 * @ORM\Table(name="actividad", indexes={@ORM\Index(name="idGrupo", columns={"idGrupo"})})
 * @ORM\Entity
 */
class Actividad
{
    /**
     * @var integer
     *
     * @ORM\Column(name="cuacm", type="integer", nullable=false)
     * @Assert\NotBlank(message="No puede dejar en blanco")
     */
    private $cuacm;

    /**
     * @var string
     *
     * @ORM\Column(name="nombreActividad", type="string", length=100, nullable=false)
     * @Assert\NotBlank(message="No puede dejar en blanco")
     */
    private $nombreactividad;

    /**
     * @var integer
     *
     * @ORM\Column(name="estandar", type="integer", nullable=true)
     * @Assert\NotBlank(message="No puede dejar en blanco")
     */
    private $estandar;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Grupoactividad
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Grupoactividad")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idGrupo", referencedColumnName="id")
     * })
     */
    private $idgrupo;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="ActividadEmpresa", mappedBy="idactividad")
     */
    private $actividadEmpresa;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->actividadEmpresa = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set cuacm
     *
     * @param integer $cuacm
     *
     * @return Actividad
     */
    public function setCuacm($cuacm)
    {
        $this->cuacm = $cuacm;

        return $this;
    }

    /**
     * Get cuacm
     *
     * @return integer
     */
    public function getCuacm()
    {
        return $this->cuacm;
    }

    /**
     * Set nombreactividad
     *
     * @param string $nombreactividad
     *
     * @return Actividad
     */
    public function setNombreactividad($nombreactividad)
    {
        $this->nombreactividad = $nombreactividad;

        return $this;
    }

    /**
     * Get nombreactividad
     *
     * @return string
     */
    public function getNombreactividad()
    {
        return $this->nombreactividad;
    }

    /**
     * Set estandar
     *
     * @param integer $estandar
     *
     * @return Actividad
     */
    public function setEstandar($estandar)
    {
        $this->estandar = $estandar;

        return $this;
    }

    /**
     * Get estandar
     *
     * @return integer
     */
    public function getEstandar()
    {
        return $this->estandar;
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
     * Set idgrupo
     *
     * @param \AppBundle\Entity\Grupoactividad $idgrupo
     *
     * @return Actividad
     */
    public function setIdgrupo(\AppBundle\Entity\Grupoactividad $idgrupo = null)
    {
        $this->idgrupo = $idgrupo;

        return $this;
    }

    /**
     * Get idgrupo
     *
     * @return \AppBundle\Entity\Grupoactividad
     */
    public function getIdgrupo()
    {
        return $this->idgrupo;
    }

    /**
     * Add actividadEmpresa
     *
     * @param \AppBundle\Entity\Empresa $actividadEmpresa
     *
     * @return Actividad
     */
    public function addActividadEmpresa(\AppBundle\Entity\Empresa $actividadEmpresa)
    {
        $this->actividadEmpresa[] = $actividadEmpresa;

        return $this;
    }

    /**
     * Remove actividadEmpresa
     *
     * @param \AppBundle\Entity\Empresa $actividadEmpresa
     */
    public function removeActividadEmpresa(\AppBundle\Entity\Empresa $actividadEmpresa)
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
    
    public function __toString() 
    {
        return $this->getNombreactividad();
    }
}
