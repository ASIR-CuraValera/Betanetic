<?php

namespace DatabaseBundle\Entity;

/**
 * Pago
 */
class Pago
{
    /**
     * @var string
     */
    private $idtransaccion;

    /**
     * @var string
     */
    private $formapago;

    /**
     * @var \DateTime
     */
    private $fechapago;

    /**
     * @var string
     */
    private $cantidad;

    /**
     * @var \DatabaseBundle\Entity\Cliente
     */
    private $codigocliente;


    /**
     * Set idtransaccion
     *
     * @param string $idtransaccion
     *
     * @return Pago
     */
    public function setIdtransaccion($idtransaccion)
    {
        $this->idtransaccion = $idtransaccion;

        return $this;
    }

    /**
     * Get idtransaccion
     *
     * @return string
     */
    public function getIdtransaccion()
    {
        return $this->idtransaccion;
    }

    /**
     * Set formapago
     *
     * @param string $formapago
     *
     * @return Pago
     */
    public function setFormapago($formapago)
    {
        $this->formapago = $formapago;

        return $this;
    }

    /**
     * Get formapago
     *
     * @return string
     */
    public function getFormapago()
    {
        return $this->formapago;
    }

    /**
     * Set fechapago
     *
     * @param \DateTime $fechapago
     *
     * @return Pago
     */
    public function setFechapago($fechapago)
    {
        $this->fechapago = $fechapago;

        return $this;
    }

    /**
     * Get fechapago
     *
     * @return \DateTime
     */
    public function getFechapago()
    {
        return $this->fechapago;
    }

    /**
     * Set cantidad
     *
     * @param string $cantidad
     *
     * @return Pago
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return string
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set codigocliente
     *
     * @param \DatabaseBundle\Entity\Cliente $codigocliente
     *
     * @return Pago
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
}

