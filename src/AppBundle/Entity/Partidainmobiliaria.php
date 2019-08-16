<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Partidainmobiliaria
 *
 * @ORM\Table(name="partidainmobiliaria")
 * @ORM\Entity
 */
class Partidainmobiliaria
{
    /**
     * @var string
     *
     * @ORM\Column(name="nroPartida", type="string", length=50, nullable=false)
     */
    private $nropartida;

    /**
     * @var string
     *
     * @ORM\Column(name="latitud", type="string", length=15, nullable=false)
     */
    private $latitud;

    /**
     * @var string
     *
     * @ORM\Column(name="longitud", type="string", length=15, nullable=false)
     */
    private $longitud;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set nropartida
     *
     * @param string $nropartida
     *
     * @return Partidainmobiliaria
     */
    public function setNropartida($nropartida)
    {
        $this->nropartida = $nropartida;

        return $this;
    }

    /**
     * Get nropartida
     *
     * @return string
     */
    public function getNropartida()
    {
        return $this->nropartida;
    }

    /**
     * Set latitud
     *
     * @param string $latitud
     *
     * @return Partidainmobiliaria
     */
    public function setLatitud($latitud)
    {
        $this->latitud = $latitud;

        return $this;
    }

    /**
     * Get latitud
     *
     * @return string
     */
    public function getLatitud()
    {
        return $this->latitud;
    }

    /**
     * Set longitud
     *
     * @param string $longitud
     *
     * @return Partidainmobiliaria
     */
    public function setLongitud($longitud)
    {
        $this->longitud = $longitud;

        return $this;
    }

    /**
     * Get longitud
     *
     * @return string
     */
    public function getLongitud()
    {
        return $this->longitud;
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
