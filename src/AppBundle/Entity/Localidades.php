<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Localidades
 *
 * @ORM\Table(name="localidades", indexes={@ORM\Index(name="idDepartamento", columns={"idDepartamento"}), @ORM\Index(name="idNodo", columns={"idNodo"})})
 * @ORM\Entity
 */
class Localidades
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
     * @var \AppBundle\Entity\Departamentos
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Departamentos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idDepartamento", referencedColumnName="id")
     * })
     */
    private $iddepartamento;

    /**
     * @var \AppBundle\Entity\Nodos
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Nodos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idNodo", referencedColumnName="id")
     * })
     */
    private $idnodo;



    /**
     * Set nombreLocalidad
     *
     * @param string $nombreLocalidad
     *
     * @return Localidades
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
     * @return Localidades
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
     * @return Localidades
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
     * Set iddepartamento
     *
     * @param \AppBundle\Entity\Departamentos $iddepartamento
     *
     * @return Localidades
     */
    public function setIddepartamento(\AppBundle\Entity\Departamentos $iddepartamento = null)
    {
        $this->iddepartamento = $iddepartamento;

        return $this;
    }

    /**
     * Get iddepartamento
     *
     * @return \AppBundle\Entity\Departamentos
     */
    public function getIddepartamento()
    {
        return $this->iddepartamento;
    }

    /**
     * Set idnodo
     *
     * @param \AppBundle\Entity\Nodos $idnodo
     *
     * @return Localidades
     */
    public function setIdnodo(\AppBundle\Entity\Nodos $idnodo = null)
    {
        $this->idnodo = $idnodo;

        return $this;
    }

    /**
     * Get idnodo
     *
     * @return \AppBundle\Entity\Nodos
     */
    public function getIdnodo()
    {
        return $this->idnodo;
    }
}
