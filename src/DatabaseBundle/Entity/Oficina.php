<?php

namespace DatabaseBundle\Entity;

/**
 * Oficina
 */
class Oficina
{
    /**
     * @var string
     */
    private $codigooficina;

    /**
     * @var string
     */
    private $ciudad;

    /**
     * @var string
     */
    private $pais;

    /**
     * @var string
     */
    private $region;

    /**
     * @var string
     */
    private $codigopostal;

    /**
     * @var string
     */
    private $telefono;

    /**
     * @var string
     */
    private $lineadireccion1;

    /**
     * @var string
     */
    private $lineadireccion2;


    /**
     * Get codigooficina
     *
     * @return string
     */
    public function getCodigooficina()
    {
        return $this->codigooficina;
    }

    /**
     * Set ciudad
     *
     * @param string $ciudad
     *
     * @return Oficina
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
     * Set pais
     *
     * @param string $pais
     *
     * @return Oficina
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
     * Set region
     *
     * @param string $region
     *
     * @return Oficina
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
     * Set codigopostal
     *
     * @param string $codigopostal
     *
     * @return Oficina
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
     * Set telefono
     *
     * @param string $telefono
     *
     * @return Oficina
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
     * Set lineadireccion1
     *
     * @param string $lineadireccion1
     *
     * @return Oficina
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
     * @return Oficina
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
}

