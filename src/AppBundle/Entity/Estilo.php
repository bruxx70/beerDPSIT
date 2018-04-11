<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Estilo
 *
 * @ORM\Table(name="estilo")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EstiloRepository")
 */
class Estilo
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
     * @ORM\Column(name="descripcion", type="string", length=100, unique=true)
     */
    private $descripcion;

    /**
     * @ORM\OneToMany(targetEntity="Cerveza", mappedBy="estilo", fetch="EXTRA_LAZY")
     */
    private $cervezas;


    public function __toString()
    {
      return $this->descripcion;
    }

    
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
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Estilo
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
     * Constructor
     */
    public function __construct()
    {
        $this->cervezas = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add cerveza
     *
     * @param \AppBundle\Entity\Cerveza $cerveza
     *
     * @return Estilo
     */
    public function addCerveza(\AppBundle\Entity\Cerveza $cerveza)
    {
        $this->cervezas[] = $cerveza;

        return $this;
    }

    /**
     * Remove cerveza
     *
     * @param \AppBundle\Entity\Cerveza $cerveza
     */
    public function removeCerveza(\AppBundle\Entity\Cerveza $cerveza)
    {
        $this->cervezas->removeElement($cerveza);
    }

    /**
     * Get cervezas
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCervezas()
    {
        return $this->cervezas;
    }
}
