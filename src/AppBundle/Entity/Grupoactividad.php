<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Grupoactividad
 *
 * @ORM\Table(name="grupoactividad")
 * @ORM\Entity
 */
class Grupoactividad
{
    /**
     * @var string
     *
     * @ORM\Column(name="nombreGrupo", type="string", length=100, nullable=false)
     */
    private $nombregrupo;

    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=1)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

