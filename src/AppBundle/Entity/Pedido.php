<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* Pedido
*
* @ORM\Table(name="pedido")
* @ORM\Entity(repositoryClass="AppBundle\Repository\PedidoRepository")
*/
class Pedido
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
  * @ORM\OneToMany(targetEntity="AppBundle\Entity\PedidoCerveza", mappedBy="pedido")
  */
  private $pedidosCervezas;

  /**
  * @var \DateTime
  *
  * @ORM\Column(name="fecha", type="date")
  */
  private $fecha;

  /**
  * @ORM\ManyToOne(targetEntity="Cliente")
  * @ORM\JoinColumn(name="cliente_id", referencedColumnName="id")
  */
  private $cliente;

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
  * Set fecha
  *
  * @param \DateTime $fecha
  *
  * @return Pedido
  */
  public function setFecha($fecha)
  {
    $this->fecha = $fecha;

    return $this;
  }

  /**
  * Get fecha
  *
  * @return \DateTime
  */
  public function getFecha()
  {
    return $this->fecha;
  }

  /**
  * Set cliente
  *
  * @param \AppBundle\Entity\Cliente $cliente
  *
  * @return Pedido
  */
  public function setCliente(\AppBundle\Entity\Cliente $cliente = null)
  {
    $this->cliente = $cliente;

    return $this;
  }

  /**
  * Get cliente
  *
  * @return \AppBundle\Entity\Cliente
  */
  public function getCliente()
  {
    return $this->cliente;
  }
}
