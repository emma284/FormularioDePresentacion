<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Perito
 *
 * @ORM\Table(name="perito")
 * @ORM\Entity
 */
class Perito
{
    /**
     * @var integer
     *
     * @ORM\Column(name="nroRegistro", type="integer", nullable=false)
     */
    private $nroregistro;

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
     * @ORM\Column(name="profesion", type="string", length=50, nullable=false)
     */
    private $profesion;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set nroregistro
     *
     * @param integer $nroregistro
     *
     * @return Perito
     */
    public function setNroregistro($nroregistro)
    {
        $this->nroregistro = $nroregistro;

        return $this;
    }

    /**
     * Get nroregistro
     *
     * @return integer
     */
    public function getNroregistro()
    {
        return $this->nroregistro;
    }

    /**
     * Set apellido
     *
     * @param string $apellido
     *
     * @return Perito
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
     * @return Perito
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
     * Set profesion
     *
     * @param string $profesion
     *
     * @return Perito
     */
    public function setProfesion($profesion)
    {
        $this->profesion = $profesion;

        return $this;
    }

    /**
     * Get profesion
     *
     * @return string
     */
    public function getProfesion()
    {
        return $this->profesion;
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
}
