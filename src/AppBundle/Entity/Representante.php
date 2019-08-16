<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Representante
 *
 * @ORM\Table(name="representante", indexes={@ORM\Index(name="idEmpresa", columns={"idEmpresa"})})
 * @ORM\Entity
 */
class Representante
{
    /**
     * @var integer
     *
     * @ORM\Column(name="documento", type="integer", nullable=false)
     */
    private $documento;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido", type="string", length=50, nullable=false)
     */
    private $apellido;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=50, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="cargo", type="string", length=50, nullable=false)
     */
    private $cargo;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=20, nullable=false)
     */
    private $tipo;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Empresa
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Empresa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idEmpresa", referencedColumnName="id")
     * })
     */
    private $idempresa;



    /**
     * Set documento
     *
     * @param integer $documento
     *
     * @return Representante
     */
    public function setDocumento($documento)
    {
        $this->documento = $documento;

        return $this;
    }

    /**
     * Get documento
     *
     * @return integer
     */
    public function getDocumento()
    {
        return $this->documento;
    }

    /**
     * Set apellido
     *
     * @param string $apellido
     *
     * @return Representante
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get apellido
     *
     * @return string
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Representante
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set cargo
     *
     * @param string $cargo
     *
     * @return Representante
     */
    public function setCargo($cargo)
    {
        $this->cargo = $cargo;

        return $this;
    }

    /**
     * Get cargo
     *
     * @return string
     */
    public function getCargo()
    {
        return $this->cargo;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     *
     * @return Representante
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
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
     * Set idempresa
     *
     * @param \AppBundle\Entity\Empresa $idempresa
     *
     * @return Representante
     */
    public function setIdempresa(\AppBundle\Entity\Empresa $idempresa = null)
    {
        $this->idempresa = $idempresa;

        return $this;
    }

    /**
     * Get idempresa
     *
     * @return \AppBundle\Entity\Empresa
     */
    public function getIdempresa()
    {
        return $this->idempresa;
    }
}
