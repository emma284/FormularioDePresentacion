<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Domicilio
 *
 * @ORM\Table(name="domicilio", indexes={@ORM\Index(name="idEmpresa", columns={"idEmpresa"}), @ORM\Index(name="idPlanta", columns={"idPlanta"}), @ORM\Index(name="idPartida", columns={"idPartida"}), @ORM\Index(name="idLocalidad", columns={"idLocalidad"})})
 * @ORM\Entity
 */
class Domicilio
{
    /**
     * @var type
     * @Assert\NotBlank(message="Este campo no puede ser vacio") 
     */
    protected $departamento;
    
    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=20, nullable=false)
     * 
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="calle", type="string", length=50, nullable=false)
     * @Assert\NotBlank(message="Este campo no puede ser vacio")
     */
    private $calle;

    /**
     * @var string
     *
     * @ORM\Column(name="numero", type="string", length=6, nullable=false)
     * @Assert\NotBlank(message="Este campo no puede ser vacio")
     */
    private $numero;

    /**
     * @var integer
     *
     * @ORM\Column(name="piso", type="integer", nullable=true)
     * 
     */
    private $piso;

    /**
     * @var string
     *
     * @ORM\Column(name="depto", type="string", length=6, nullable=true)
     */
    private $depto;

    /**
     * @var integer
     *
     * @ORM\Column(name="telefono", type="integer", nullable=true)
     * @Assert\NotBlank(message="Este campo no puede ser vacio")
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50, nullable=false)
     * @Assert\NotBlank(message="Este campo no puede ser vacio")
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="zonificacion", type="string", length=50, nullable=true)
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
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Empresa", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idEmpresa", referencedColumnName="id")
     * })
     * 
     * 
     */
    private $empresa;

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
     * @var \AppBundle\Entity\Localidad
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Localidad")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idLocalidad", referencedColumnName="id")
     * })
     * @Assert\NotBlank(message="Este campo no puede ser vacio")
     */
    private $idLocalidad;



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
     * @param \AppBundle\Entity\Empresa $empresa
     *
     * @return Domicilio
     */
    public function setEmpresa(\AppBundle\Entity\Empresa $empresa)
    {
        $this->empresa = $empresa;

        return $this;
    }

    /**
     * Get idempresa
     *
     * @return \AppBundle\Entity\Empresa
     */
    public function getEmpresa()
    {
        return $this->empresa;
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
     * Set idLocalidad
     *
     * @param \AppBundle\Entity\Localidad $idLocalidad
     *
     * @return Domicilio
     */
    public function setIdLocalidad(\AppBundle\Entity\Localidad $idLocalidad = null)
    {
        $this->idLocalidad = $idLocalidad;

        return $this;
    }

    /**
     * Get idLocalidad
     *
     * @return \AppBundle\Entity\Localidad
     */
    public function getIdLocalidad()
    {
        return $this->idLocalidad;
    }
    
     public function setDepartamento($departamento)
    {
        $this->departamento = $departamento;

        return $this;
    }

    public function getDepartamento()
    {
        return $this->departamento;
    }
}
