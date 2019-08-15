<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Domicilio
 *
 * @ORM\Table(name="domicilio")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DomicilioRepository")
 */
class Domicilio
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="calle", type="string", length=255)
     * @Assert\NotBlank(message="Debe ingresar una calle")
     */
    private $calle;

    /**
     * @var int
     *
     * @ORM\Column(name="numero", type="integer")
     * @Assert\NotBlank(message="Debe ingresar un número")
     */
    private $numero;

    /**
     * @var int
     *
     * @ORM\Column(name="piso", type="integer")
     */
    private $piso;

    /**
     * @var string
     *
     * @ORM\Column(name="dpto", type="string", length=255)
     */
    private $dpto;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=255)
     * @Assert\NotBlank(message="Debe ingresar un número de teléfono")
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     * @Assert\NotBlank(message="Debe ingresar un correo electrónico")
     * @Assert\Email(message="El email ingresado no es válido")
     */
    private $email;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set calle
     *
     * @param string $calle
     *
     * @return Domicilio
     */
    public function setCalle($calle)
    {
        $this->calle = $calle;

        return $this;
    }

    /**
     * Get calle
     *
     * @return string
     */
    public function getCalle()
    {
        return $this->calle;
    }

    /**
     * Set numero
     *
     * @param integer $numero
     *
     * @return Domicilio
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return int
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set piso
     *
     * @param integer $piso
     *
     * @return Domicilio
     */
    public function setPiso($piso)
    {
        $this->piso = $piso;

        return $this;
    }

    /**
     * Get piso
     *
     * @return int
     */
    public function getPiso()
    {
        return $this->piso;
    }

    /**
     * Set dpto
     *
     * @param string $dpto
     *
     * @return Domicilio
     */
    public function setDpto($dpto)
    {
        $this->dpto = $dpto;

        return $this;
    }

    /**
     * Get dpto
     *
     * @return string
     */
    public function getDpto()
    {
        return $this->dpto;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     *
     * @return Domicilio
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Domicilio
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }


   
}

