<?php

namespace DatabaseBundle\Entity;

/**
 * Producto
 */
class Producto
{
    /**
     * @var string
     */
    private $codigoproducto;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $dimensiones;

    /**
     * @var string
     */
    private $proveedor;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var integer
     */
    private $cantidadenstock;

    /**
     * @var string
     */
    private $precioventa;

    /**
     * @var string
     */
    private $precioproveedor;

    /**
     * @var string
     */
    private $imagen;

    /**
     * @var \DatabaseBundle\Entity\Gamasproducto
     */
    private $gama;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $codigopedido;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->codigopedido = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set codigoproducto
     * Al ser esto una clave primaria deberia tener auto_increment activado, pero como no, tenemos que hacerlo nosotros manualmente.
     * Al crear la entidad no se genera este metodo (ya que comodigo esto es una clave primaria) asi que tenemos que crear nosotros
     * el metodo para setear el valor.
     * @return string
     */
    public function setCodigoproducto($cod)
    {
        $this->codigoproducto = $cod;

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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Producto
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
     * Set dimensiones
     *
     * @param string $dimensiones
     *
     * @return Producto
     */
    public function setDimensiones($dimensiones)
    {
        $this->dimensiones = $dimensiones;

        return $this;
    }

    /**
     * Get dimensiones
     *
     * @return string
     */
    public function getDimensiones()
    {
        return $this->dimensiones;
    }

    /**
     * Set proveedor
     *
     * @param string $proveedor
     *
     * @return Producto
     */
    public function setProveedor($proveedor)
    {
        $this->proveedor = $proveedor;

        return $this;
    }

    /**
     * Get proveedor
     *
     * @return string
     */
    public function getProveedor()
    {
        return $this->proveedor;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Producto
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
     * Set cantidadenstock
     *
     * @param integer $cantidadenstock
     *
     * @return Producto
     */
    public function setCantidadenstock($cantidadenstock)
    {
        $this->cantidadenstock = $cantidadenstock;

        return $this;
    }

    /**
     * Get cantidadenstock
     *
     * @return integer
     */
    public function getCantidadenstock()
    {
        return $this->cantidadenstock;
    }

    /**
     * Set precioventa
     *
     * @param string $precioventa
     *
     * @return Producto
     */
    public function setPrecioventa($precioventa)
    {
        $this->precioventa = $precioventa;

        return $this;
    }

    /**
     * Get precioventa
     *
     * @return string
     */
    public function getPrecioventa()
    {
        return $this->precioventa;
    }

    /**
     * Set precioproveedor
     *
     * @param string $precioproveedor
     *
     * @return Producto
     */
    public function setPrecioproveedor($precioproveedor)
    {
        $this->precioproveedor = $precioproveedor;

        return $this;
    }

    /**
     * Get precioproveedor
     *
     * @return string
     */
    public function getPrecioproveedor()
    {
        return $this->precioproveedor;
    }

    /**
     * Set imagen
     *
     * @param string $imagen
     *
     * @return Producto
     */
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;

        return $this;
    }

    /**
     * Get imagen
     *
     * @return string
     */
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * Set gama
     *
     * @param \DatabaseBundle\Entity\Gamasproducto $gama
     *
     * @return Producto
     */
    public function setGama(\DatabaseBundle\Entity\Gamasproducto $gama = null)
    {
        $this->gama = $gama;

        return $this;
    }

    /**
     * Get gama
     *
     * @return \DatabaseBundle\Entity\Gamasproducto
     */
    public function getGama()
    {
        return $this->gama;
    }

    /**
     * Add codigopedido
     *
     * @param \DatabaseBundle\Entity\Pedido $codigopedido
     *
     * @return Producto
     */
    public function addCodigopedido(\DatabaseBundle\Entity\Pedido $codigopedido)
    {
        $this->codigopedido[] = $codigopedido;

        return $this;
    }

    /**
     * Remove codigopedido
     *
     * @param \DatabaseBundle\Entity\Pedido $codigopedido
     */
    public function removeCodigopedido(\DatabaseBundle\Entity\Pedido $codigopedido)
    {
        $this->codigopedido->removeElement($codigopedido);
    }

    /**
     * Get codigopedido
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCodigopedido()
    {
        return $this->codigopedido;
    }
}

