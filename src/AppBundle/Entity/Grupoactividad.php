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
    private $nombreGrupo;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;



    /**
     * Set nombreGrupo
     *
     * @param string $nombreGrupo
     *
     * @return Grupoactividad
     */
    public function setNombreGrupo($nombreGrupo)
    {
        $this->nombreGrupo = $nombreGrupo;

        return $this;
    }

    /**
     * Get nombreGrupo
     *
     * @return string
     */
    public function getNombreGrupo()
    {
        return $this->nombreGrupo;
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
