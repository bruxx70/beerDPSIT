<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Cerveza
 *
 * @ORM\Table(name="cerveza")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CervezaRepository")
 */
class Cerveza
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
     * @ORM\Column(name="nombre", type="string", length=255, unique=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text", nullable=true)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="precio", type="decimal", precision=10, scale=2)
     * @Assert\NotBlank(message="Campo Obligatorio!")
     */
    private $precio;

    /**
     * @var bool
     *
     * @ORM\Column(name="destacada", type="boolean")
     */
    private $destacada = false;

    /**
     * @var int
     *
     * @ORM\Column(name="alcohol", type="integer")
     * @Assert\NotBlank(message="Campo Obligatorio!")
     */
    private $alcohol;

    /**
     * @var string
     *
     * @ORM\Column(name="foto", type="string", length=255, unique=true)
     * @Assert\NotBlank(message="Campo Obligatorio!")
     */
    private $foto;

    /**
     * @var int
     *
     * @ORM\Column(name="presentacion", type="integer", nullable=true)
     */
    private $presentacion;

    /**
     * @var bool
     *
     * @ORM\Column(name="promo", type="boolean")
     */
    private $promo = false;

    /**
     * @ORM\ManyToOne(targetEntity="Estilo")
     * @ORM\JoinColumn(name="estilo_id", referencedColumnName="id")
     */
    private $estilo;

    /**
     * @ORM\ManyToOne(targetEntity="Color")
     * @ORM\JoinColumn(name="color_id", referencedColumnName="id")
     */
    private $color;

    /**
     * @ORM\ManyToOne(targetEntity="Origen")
     * @ORM\JoinColumn(name="origen_id", referencedColumnName="id")
     */
    private $origen;


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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Cerveza
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Cerveza
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set precio
     *
     * @param string $precio
     *
     * @return Cerveza
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return string
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set destacada
     *
     * @param boolean $destacada
     *
     * @return Cerveza
     */
    public function setDestacada($destacada)
    {
        $this->destacada = $destacada;

        return $this;
    }

    /**
     * Get destacada
     *
     * @return bool
     */
    public function getDestacada()
    {
        return $this->destacada;
    }

    /**
     * Set alcohol
     *
     * @param integer $alcohol
     *
     * @return Cerveza
     */
    public function setAlcohol($alcohol)
    {
        $this->alcohol = $alcohol;

        return $this;
    }

    /**
     * Get alcohol
     *
     * @return int
     */
    public function getAlcohol()
    {
        return $this->alcohol;
    }

    /**
     * Set foto
     *
     * @param string $foto
     *
     * @return Cerveza
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;

        return $this;
    }

    /**
     * Get foto
     *
     * @return string
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * Set presentacion
     *
     * @param integer $presentacion
     *
     * @return Cerveza
     */
    public function setPresentacion($presentacion)
    {
        $this->presentacion = $presentacion;

        return $this;
    }

    /**
     * Get presentacion
     *
     * @return int
     */
    public function getPresentacion()
    {
        return $this->presentacion;
    }

    /**
     * Set promo
     *
     * @param boolean $promo
     *
     * @return Cerveza
     */
    public function setPromo($promo)
    {
        $this->promo = $promo;

        return $this;
    }

    /**
     * Get promo
     *
     * @return bool
     */
    public function getPromo()
    {
        return $this->promo;
    }

    /**
     * Set estilo
     *
     * @param \AppBundle\Entity\Estilo $estilo
     *
     * @return Cerveza
     */
    public function setEstilo(\AppBundle\Entity\Estilo $estilo = null)
    {
        $this->estilo = $estilo;

        return $this;
    }

    /**
     * Get estilo
     *
     * @return \AppBundle\Entity\Estilo
     */
    public function getEstilo()
    {
        return $this->estilo;
    }

    /**
     * Set color
     *
     * @param \AppBundle\Entity\Color $color
     *
     * @return Cerveza
     */
    public function setColor(\AppBundle\Entity\Color $color = null)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return \AppBundle\Entity\Color
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set origen
     *
     * @param \AppBundle\Entity\Origen $origen
     *
     * @return Cerveza
     */
    public function setOrigen(\AppBundle\Entity\Origen $origen = null)
    {
        $this->origen = $origen;

        return $this;
    }

    /**
     * Get origen
     *
     * @return \AppBundle\Entity\Origen
     */
    public function getOrigen()
    {
        return $this->origen;
    }
}
