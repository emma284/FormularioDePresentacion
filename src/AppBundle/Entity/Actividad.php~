<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     */
    private $cuacm;

    /**
     * @var string
     *
     * @ORM\Column(name="nombreActividad", type="string", length=100, nullable=false)
     */
    private $nombreactividad;

    /**
     * @var integer
     *
     * @ORM\Column(name="estandar", type="integer", nullable=false)
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
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Empresa", mappedBy="idactividad")
     */
    private $idempresa;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idempresa = new \Doctrine\Common\Collections\ArrayCollection();
    }

}

