<?php

namespace DatabaseBundle\Entity;

/**
 * Pedido
 */
class Pedido
{
    /**
     * @var integer
     */
    private $codigopedido;

    /**
     * @var \DateTime
     */
    private $fechapedido;

    /**
     * @var \DateTime
     */
    private $fechaesperada;

    /**
     * @var \DateTime
     */
    private $fechaentrega;

    /**
     * @var string
     */
    private $estado;

    /**
     * @var string
     */
    private $comentarios;

    /**
     * @var \DatabaseBundle\Entity\Cliente
     */
    private $codigocliente;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $codigoproducto;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->codigoproducto = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get codigopedido
     *
     * @return integer
     */
    public function getCodigopedido()
    {
        return $this->codigopedido;
    }

    /**
     * Set fechapedido
     *
     * @param \DateTime $fechapedido
     *
     * @return Pedido
     */
    public function setFechapedido($fechapedido)
    {
        $this->fechapedido = $fechapedido;

        return $this;
    }

    /**
     * Get fechapedido
     *
     * @return \DateTime
     */
    public function getFechapedido()
    {
        return $this->fechapedido;
    }

    /**
     * Set fechaesperada
     *
     * @param \DateTime $fechaesperada
     *
     * @return Pedido
     */
    public function setFechaesperada($fechaesperada)
    {
        $this->fechaesperada = $fechaesperada;

        return $this;
    }

    /**
     * Get fechaesperada
     *
     * @return \DateTime
     */
    public function getFechaesperada()
    {
        return $this->fechaesperada;
    }

    /**
     * Set fechaentrega
     *
     * @param \DateTime $fechaentrega
     *
     * @return Pedido
     */
    public function setFechaentrega($fechaentrega)
    {
        $this->fechaentrega = $fechaentrega;

        return $this;
    }

    /**
     * Get fechaentrega
     *
     * @return \DateTime
     */
    public function getFechaentrega()
    {
        return $this->fechaentrega;
    }

    /**
     * Set estado
     *
     * @param string $estado
     *
     * @return Pedido
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set comentarios
     *
     * @param string $comentarios
     *
     * @return Pedido
     */
    public function setComentarios($comentarios)
    {
        $this->comentarios = $comentarios;

        return $this;
    }

    /**
     * Get comentarios
     *
     * @return string
     */
    public function getComentarios()
    {
        return $this->comentarios;
    }

    /**
     * Set codigocliente
     *
     * @param \DatabaseBundle\Entity\Cliente $codigocliente
     *
     * @return Pedido
     */
    public function setCodigocliente(\DatabaseBundle\Entity\Cliente $codigocliente = null)
    {
        $this->codigocliente = $codigocliente;

        return $this;
    }

    /**
     * Get codigocliente
     *
     * @return \DatabaseBundle\Entity\Cliente
     */
    public function getCodigocliente()
    {
        return $this->codigocliente;
    }

    /**
     * Add codigoproducto
     *
     * @param \DatabaseBundle\Entity\Producto $codigoproducto
     *
     * @return Pedido
     */
    public function addCodigoproducto(\DatabaseBundle\Entity\Producto $codigoproducto)
    {
        $this->codigoproducto[] = $codigoproducto;

        return $this;
    }

    /**
     * Remove codigoproducto
     *
     * @param \DatabaseBundle\Entity\Producto $codigoproducto
     */
    public function removeCodigoproducto(\DatabaseBundle\Entity\Producto $codigoproducto)
    {
        $this->codigoproducto->removeElement($codigoproducto);
    }

    /**
     * Get codigoproducto
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCodigoproducto()
    {
        return $this->codigoproducto;
    }
}

