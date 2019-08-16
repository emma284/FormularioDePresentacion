<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Domicilio
 *
 * @ORM\Table(name="domicilio", indexes={@ORM\Index(name="idEmpresa", columns={"idEmpresa"}), @ORM\Index(name="idPlanta", columns={"idPlanta"}), @ORM\Index(name="idPartida", columns={"idPartida"}), @ORM\Index(name="idLocalidad", columns={"idLocalidad"})})
 * @ORM\Entity
 */
class Domicilio
{
    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=20, nullable=false)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="calle", type="string", length=50, nullable=false)
     */
    private $calle;

    /**
     * @var string
     *
     * @ORM\Column(name="numero", type="string", length=6, nullable=false)
     */
    private $numero;

    /**
     * @var integer
     *
     * @ORM\Column(name="piso", type="integer", nullable=false)
     */
    private $piso;

    /**
     * @var string
     *
     * @ORM\Column(name="depto", type="string", length=6, nullable=false)
     */
    private $depto;

    /**
     * @var integer
     *
     * @ORM\Column(name="telefono", type="integer", nullable=false)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="zonificacion", type="string", length=50, nullable=false)
     */
    private $zonificacion;

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
     * @var \AppBundle\Entity\Planta
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Planta")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idPlanta", referencedColumnName="id")
     * })
     */
    private $idplanta;

    /**
     * @var \AppBundle\Entity\Partidainmobiliaria
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Partidainmobiliaria")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idPartida", referencedColumnName="id")
     * })
     */
    private $idpartida;

    /**
     * @var \AppBundle\Entity\Localidades
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Localidades")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idLocalidad", referencedColumnName="id")
     * })
     */
    private $idlocalidad;


}

