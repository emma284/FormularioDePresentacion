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



    /**
     * Set tipo
     *
     * @param string $tipo
     *
     * @return Domicilio
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
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
     * @param string $numero
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
     * @return string
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
     * @return integer
     */
    public function getPiso()
    {
        return $this->piso;
    }

    /**
     * Set depto
     *
     * @param string $depto
     *
     * @return Domicilio
     */
    public function setDepto($depto)
    {
        $this->depto = $depto;

        return $this;
    }

    /**
     * Get depto
     *
     * @return string
     */
    public function getDepto()
    {
        return $this->depto;
    }

    /**
     * Set telefono
     *
     * @param integer $telefono
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
     * @return integer
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

    /**
     * Set zonificacion
     *
     * @param string $zonificacion
     *
     * @return Domicilio
     */
    public function setZonificacion($zonificacion)
    {
        $this->zonificacion = $zonificacion;

        return $this;
    }

    /**
     * Get zonificacion
     *
     * @return string
     */
    public function getZonificacion()
    {
        return $this->zonificacion;
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

    /**
     * Set idempresa
     *
     * @param \AppBundle\Entity\Empresa $idempresa
     *
     * @return Domicilio
     */
    public function setIdempresa(\AppBundle\Entity\Empresa $idempresa = null)
    {
        $this->idempresa = $idempresa;

        return $this;
    }

    /**
     * Get idempresa
     *
     * @return \AppBundle\Entity\Empresa
     */
    public function getIdempresa()
    {
        return $this->idempresa;
    }

    /**
     * Set idplanta
     *
     * @param \AppBundle\Entity\Planta $idplanta
     *
     * @return Domicilio
     */
    public function setIdplanta(\AppBundle\Entity\Planta $idplanta = null)
    {
        $this->idplanta = $idplanta;

        return $this;
    }

    /**
     * Get idplanta
     *
     * @return \AppBundle\Entity\Planta
     */
    public function getIdplanta()
    {
        return $this->idplanta;
    }

    /**
     * Set idpartida
     *
     * @param \AppBundle\Entity\Partidainmobiliaria $idpartida
     *
     * @return Domicilio
     */
    public function setIdpartida(\AppBundle\Entity\Partidainmobiliaria $idpartida = null)
    {
        $this->idpartida = $idpartida;

        return $this;
    }

    /**
     * Get idpartida
     *
     * @return \AppBundle\Entity\Partidainmobiliaria
     */
    public function getIdpartida()
    {
        return $this->idpartida;
    }

    /**
     * Set idlocalidad
     *
     * @param \AppBundle\Entity\Localidades $idlocalidad
     *
     * @return Domicilio
     */
    public function setIdlocalidad(\AppBundle\Entity\Localidades $idlocalidad = null)
    {
        $this->idlocalidad = $idlocalidad;

        return $this;
    }

    /**
     * Get idlocalidad
     *
     * @return \AppBundle\Entity\Localidades
     */
    public function getIdlocalidad()
    {
        return $this->idlocalidad;
    }
}
