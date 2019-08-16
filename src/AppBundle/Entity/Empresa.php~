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
     * @var integer
     *
     * @ORM\Column(name="cuit", type="integer", nullable=false)
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

}

