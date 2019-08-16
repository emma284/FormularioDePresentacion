<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Nodos
 *
 * @ORM\Table(name="nodos")
 * @ORM\Entity
 */
class Nodos
{
    /**
     * @var string
     *
     * @ORM\Column(name="nombreNodo", type="string", length=50, nullable=false)
     */
    private $nombrenodo;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

