<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="actividadempresa")
 */
class ActividadEmpresa
{
    protected $grupoActividad;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="prioridad", type="integer", nullable=false)
     * @Assert\NotBlank(message="Debe seleccionar una opción")
     * 
     */
    private $prioridad;

    /**
     * @ORM\ManyToOne(targetEntity="Empresa", inversedBy="actividadEmpresa")
     * @ORM\JoinColumn(nullable=false)
     */
    private $idempresa;
    
    /**
     * @ORM\ManyToOne(targetEntity="Actividad", inversedBy="actividadEmpresa")
     * @ORM\JoinColumn(nullable=false)
     */
    private $idactividad;


    function getId() {
        return $this->id;
    }

     function getPrioridad() {
        return $this->prioridad;
    }

     function getIdempresa() {
        return $this->idempresa;
    }

     function getIdactividad() {
        return $this->idactividad;
    }

     function setPrioridad($prioridad) {
        $this->prioridad = $prioridad;
    }

     function setIdempresa($idempresa) {
        $this->idempresa = $idempresa;
    }

     function setIdactividad($idactividad) {
        $this->idactividad = $idactividad;
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


   