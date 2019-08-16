<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Departamentos
 *
 * @ORM\Table(name="departamentos")
 * @ORM\Entity
 */
class Departamentos
{
    /**
     * @var string
     *
     * @ORM\Column(name="nombreDepartamento", type="string", length=50, nullable=false)
     */
    private $nombredepartamento;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set nombredepartamento
     *
     * @param string $nombredepartamento
     *
     * @return Departamentos
     */
    public function setNombredepartamento($nombredepartamento)
    {
        $this->nombredepartamento = $nombredepartamento;

        return $this;
    }

    /**
     * Get nombredepartamento
     *
     * @return string
     */
    public function getNombredepartamento()
    {
        return $this->nombredepartamento;
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
