<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PedidoCerveza
 *
 * @ORM\Table(name="pedido_cerveza")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PedidoCervezaRepository")
 */
class PedidoCerveza
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
     * @ORM\ManyToOne(targetEntity="Pedido")
     * @ORM\JoinColumn(name="pedido_id", referencedColumnName="id")
     */
     private $pedido;
     
     /**
      * @ORM\ManyToOne(targetEntity="Cerveza")
      * @ORM\JoinColumn(name="cerveza_id", referencedColumnName="id")
      */
      private $cerveza;
    /**

     * @var string
     *
     * @ORM\Column(name="precio", type="decimal", precision=10, scale=0)
     */
    private $precio;

    /**
     * @var int
     *
     * @ORM\Column(name="cantidad", type="integer")
     */
    private $cantidad;


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
     * Set precio
     *
     * @param string $precio
     *
     * @return PedidoCerveza
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
     * Set cantidad
     *
     * @param integer $cantidad
     *
     * @return PedidoCerveza
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return int
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }
}
