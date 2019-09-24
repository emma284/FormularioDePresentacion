<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * FormularioA
 *
 * @ORM\Table(name="formularioA")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FormularioARepository")
 */
class FormularioA
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity="Empresa", cascade={"persist"})
     * @ORM\JoinColumn(name="empresa_id",referencedColumnName="id")
     * @Assert\Type(type="AppBundle\Entity\Empresa")
     * @Assert\Valid
     */
    private $empresa;


    /**
     * @var string
     *
     * @ORM\Column(name="resumenEjecutivo", type="string", length=3000)
     * @Assert\NotBlank(message="No puede dejar el resumen ejecutivo en blanco")
     * @Assert\Length(min = 1, max = 3000, minMessage = "El resumen ejecutivo no puede dejarse en blanco.", maxMessage = "El resumen ejecutivo no puede exceder los 3000 caracteres.")
     */
    private $resumenEjecutivo;


    /**
     * @ORM\Column(type="datetime", nullable=true)
     * 
     */
    private $fechaBaja;

/**
 * getters and setters
 */
    public function getId()
    {
        return $this->id;
    }

    public function getResumenEjecutivo()
    {
        return $this->resumenEjecutivo;
    }
    
    public function setResumenEjecutivo($resumenEjecutivo)
    {
        $this->resumenEjecutivo = $resumenEjecutivo;
    }

    public function getEmpresa() {
        return $this->empresa;
    }

    public function setEmpresa($empresa) {
        $this->empresa = $empresa;
    }
    
    function getFechaBaja() {
        return $this->fechaBaja;
    }

    function setFechaBaja($fechaBaja) {
        $this->fechaBaja = $fechaBaja;
    }
}
