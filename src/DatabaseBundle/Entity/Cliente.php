<?php

namespace DatabaseBundle\Entity;

/**
 * Cliente
 */
class Cliente
{
    /**
     * @var integer
     */
    private $codigocliente;

    /**
     * @var string
     */
    private $nombrecliente;

    /**
     * @var string
     */
    private $nombrecontacto;

    /**
     * @var string
     */
    private $apellidocontacto;

    /**
     * @var string
     */
    private $telefono;

    /**
     * @var string
     */
    private $fax;

    /**
     * @var string
     */
    private $lineadireccion1;

    /**
     * @var string
     */
    private $lineadireccion2;

    /**
     * @var string
     */
    private $ciudad;

    /**
     * @var string
     */
    private $region;

    /**
     * @var string
     */
    private $pais;

    /**
     * @var string
     */
    private $codigopostal;

    /**
     * @var string
     */
    private $limitecredito;

    /**
     * @var \DatabaseBundle\Entity\Empleado
     */
    private $codigoempleadorepventas;


    /**
     * Get codigocliente
     *
     * @return integer
     */
    public function getCodigocliente()
    {
        return $this->codigocliente;
    }

    /**
     * Set nombrecliente
     *
     * @param string $nombrecliente
     *
     * @return Cliente
     */
    public function setNombrecliente($nombrecliente)
    {
        $this->nombrecliente = $nombrecliente;

        return $this;
    }

    /**
     * Get nombrecliente
     *
     * @return string
     */
    public function getNombrecliente()
    {
        return $this->nombrecliente;
    }

    /**
     * Set nombrecontacto
     *
     * @param string $nombrecontacto
     *
     * @return Cliente
     */
    public function setNombrecontacto($nombrecontacto)
    {
        $this->nombrecontacto = $nombrecontacto;

        return $this;
    }

    /**
     * Get nombrecontacto
     *
     * @return string
     */
    public function getNombrecontacto()
    {
        return $this->nombrecontacto;
    }

    /**
     * Set apellidocontacto
     *
     * @param string $apellidocontacto
     *
     * @return Cliente
     */
    public function setApellidocontacto($apellidocontacto)
    {
        $this->apellidocontacto = $apellidocontacto;

        return $this;
    }

    /**
     * Get apellidocontacto
     *
     * @return string
     */
    public function getApellidocontacto()
    {
        return $this->apellidocontacto;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     *
     * @return Cliente
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set fax
     *
     * @param string $fax
     *
     * @return Cliente
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set lineadireccion1
     *
     * @param string $lineadireccion1
     *
     * @return Cliente
     */
    public function setLineadireccion1($lineadireccion1)
    {
        $this->lineadireccion1 = $lineadireccion1;

        return $this;
    }

    /**
     * Get lineadireccion1
     *
     * @return string
     */
    public function getLineadireccion1()
    {
        return $this->lineadireccion1;
    }

    /**
     * Set lineadireccion2
     *
     * @param string $lineadireccion2
     *
     * @return Cliente
     */
    public function setLineadireccion2($lineadireccion2)
    {
        $this->lineadireccion2 = $lineadireccion2;

        return $this;
    }

    /**
     * Get lineadireccion2
     *
     * @return string
     */
    public function getLineadireccion2()
    {
        return $this->lineadireccion2;
    }

    /**
     * Set ciudad
     *
     * @param string $ciudad
     *
     * @return Cliente
     */
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    /**
     * Get ciudad
     *
     * @return string
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * Set region
     *
     * @param string $region
     *
     * @return Cliente
     */
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set pais
     *
     * @param string $pais
     *
     * @return Cliente
     */
    public function setPais($pais)
    {
        $this->pais = $pais;

        return $this;
    }

    /**
     * Get pais
     *
     * @return string
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * Set codigopostal
     *
     * @param string $codigopostal
     *
     * @return Cliente
     */
    public function setCodigopostal($codigopostal)
    {
        $this->codigopostal = $codigopostal;

        return $this;
    }

    /**
     * Get codigopostal
     *
     * @return string
     */
    public function getCodigopostal()
    {
        return $this->codigopostal;
    }

    /**
     * Set limitecredito
     *
     * @param string $limitecredito
     *
     * @return Cliente
     */
    public function setLimitecredito($limitecredito)
    {
        $this->limitecredito = $limitecredito;

        return $this;
    }

    /**
     * Get limitecredito
     *
     * @return string
     */
    public function getLimitecredito()
    {
        return $this->limitecredito;
    }

    /**
     * Set codigoempleadorepventas
     *
     * @param \DatabaseBundle\Entity\Empleado $codigoempleadorepventas
     *
     * @return Cliente
     */
    public function setCodigoempleadorepventas(\DatabaseBundle\Entity\Empleado $codigoempleadorepventas = null)
    {
        $this->codigoempleadorepventas = $codigoempleadorepventas;

        return $this;
    }

    /**
     * Get codigoempleadorepventas
     *
     * @return \DatabaseBundle\Entity\Empleado
     */
    public function getCodigoempleadorepventas()
    {
        return $this->codigoempleadorepventas;
    }
}

