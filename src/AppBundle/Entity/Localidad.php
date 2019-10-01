<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Localidad
 *
 * @ORM\Table(name="localidad", indexes={@ORM\Index(name="idDepartamento", columns={"idDepartamento"}), @ORM\Index(name="idNodo", columns={"idNodo"})})
 * @ORM\Entity
 */
class Localidad
{
    /**
     * @var string
     *
     * @ORM\Column(name="nombre_localidad", type="string", length=50, nullable=false)
     */
    private $nombreLocalidad;

    /**
     * @var string
     *
     * @ORM\Column(name="categoria", type="string", length=50, nullable=false)
     */
    private $categoria;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo_postal", type="string", length=8, nullable=false)
     */
    private $codigoPostal;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Departamento
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Departamento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idDepartamento", referencedColumnName="id")
     * })
     */
    private $idDepartamento;

    /**
     * @var \AppBundle\Entity\Nodos
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Nodos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idNodo", referencedColumnName="id")
     * })
     */
    private $idNodo;



    /**
     * Set nombreLocalidad
     *
     * @param string $nombreLocalidad
     *
     * @return Localidad
     */
    public function setNombreLocalidad($nombreLocalidad)
    {
        $this->nombreLocalidad = $nombreLocalidad;

        return $this;
    }

    /**
     * Get nombreLocalidad
     *
     * @return string
     */
    public function getNombreLocalidad()
    {
        return $this->nombreLocalidad;
    }

    /**
     * Set categoria
     *
     * @param string $categoria
     *
     * @return Localidad
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get categoria
     *
     * @return string
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set codigoPostal
     *
     * @param string $codigoPostal
     *
     * @return Localidad
     */
    public function setCodigoPostal($codigoPostal)
    {
        $this->codigoPostal = $codigoPostal;

        return $this;
    }

    /**
     * Get codigoPostal
     *
     * @return string
     */
    public function getCodigoPostal()
    {
        return $this->codigoPostal;
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
     * Set idDepartamento
     *
     * @param \AppBundle\Entity\Departamento $idDepartamento
     *
     * @return Localidad
     */
    public function setIdDepartamento(\AppBundle\Entity\Departamento $idDepartamento = null)
    {
        $this->idDepartamento = $idDepartamento;

        return $this;
    }

    /**
     * Get idDepartamento
     *
     * @return \AppBundle\Entity\Departamento
     */
    public function getIdDepartamento()
    {
        return $this->idDepartamento;
    }

    /**
     * Set idNodo
     *
     * @param \AppBundle\Entity\Nodos $idNodo
     *
     * @return Localidad
     */
    public function setIdNodo(\AppBundle\Entity\Nodos $idNodo = null)
    {
        $this->idNodo = $idNodo;

        return $this;
    }

    /**
     * Get idNodo
     *
     * @return \AppBundle\Entity\Nodos
     */
    public function getIdNodo()
    {
        return $this->idNodo;
    }
}
