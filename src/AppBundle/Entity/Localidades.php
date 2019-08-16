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


}

