<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Planta
 *
 * @ORM\Table(name="planta", indexes={@ORM\Index(name="idEmpresa", columns={"idEmpresa"})})
 * @ORM\Entity
 */
class Planta
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="fueraProv", type="boolean", nullable=false)
     */
    private $fueraprov;

    /**
     * @var float
     *
     * @ORM\Column(name="superficieDeposito", type="float", precision=10, scale=0, nullable=false)
     */
    private $superficiedeposito;

    /**
     * @var float
     *
     * @ORM\Column(name="superficieTotalM2", type="float", precision=10, scale=0, nullable=false)
     */
    private $superficietotalm2;

    /**
     * @var float
     *
     * @ORM\Column(name="superficieCubiertaM2", type="float", precision=10, scale=0, nullable=false)
     */
    private $superficiecubiertam2;

    /**
     * @var float
     *
     * @ORM\Column(name="potenciaInstaladaHP", type="float", precision=10, scale=0, nullable=false)
     */
    private $potenciainstaladahp;

    /**
     * @var integer
     *
     * @ORM\Column(name="dotacionDePersonal", type="integer", nullable=false)
     */
    private $dotaciondepersonal;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaInicioActividades", type="date", nullable=false)
     */
    private $fechainicioactividades;

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


}

