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
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;



    /**
     * Set nombregrupo
     *
     * @param string $nombregrupo
     *
     * @return Grupoactividad
     */
    public function setNombregrupo($nombregrupo)
    {
        $this->nombregrupo = $nombregrupo;

        return $this;
    }

    /**
     * Get nombregrupo
     *
     * @return string
     */
    public function getNombregrupo()
    {
        return $this->nombregrupo;
    }

    /**
     * Get id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
}
