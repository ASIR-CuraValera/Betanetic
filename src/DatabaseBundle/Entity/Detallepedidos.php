<?php

namespace DatabaseBundle\Entity;

/**
 * Detallepedidos
 */
class Detallepedidos
{
    /**
     * @var string
     */
    private $codigoproducto;

    /**
     * @var \DatabaseBundle\Entity\Pedido
     */
    private $codigopedido;


    /**
     * Set codigoproducto
     *
     * @param string $codigoproducto
     *
     * @return Detallepedidos
     */
    public function setCodigoproducto($codigoproducto)
    {
        $this->codigoproducto = $codigoproducto;

        return $this;
    }

    /**
     * Get codigoproducto
     *
     * @return string
     */
    public function getCodigoproducto()
    {
        return $this->codigoproducto;
    }

    /**
     * Set codigopedido
     *
     * @param \DatabaseBundle\Entity\Pedido $codigopedido
     *
     * @return Detallepedidos
     */
    public function setCodigopedido(\DatabaseBundle\Entity\Pedido $codigopedido = null)
    {
        $this->codigopedido = $codigopedido;

        return $this;
    }

    /**
     * Get codigopedido
     *
     * @return \DatabaseBundle\Entity\Pedido
     */
    public function getCodigopedido()
    {
        return $this->codigopedido;
    }
}

