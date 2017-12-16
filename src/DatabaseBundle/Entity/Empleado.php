<?php

namespace DatabaseBundle\Entity;

/**
 * Empleado
 */
class Empleado
{
    /**
     * @var integer
     */
    private $codigoempleado;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $apellido1;

    /**
     * @var string
     */
    private $apellido2;

    /**
     * @var string
     */
    private $extension;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $puesto;

    /**
     * @var \DatabaseBundle\Entity\Empleado
     */
    private $codigojefe;

    /**
     * @var \DatabaseBundle\Entity\Oficina
     */
    private $codigooficina;


    /**
     * Get codigoempleado
     *
     * @return integer
     */
    public function getCodigoempleado()
    {
        return $this->codigoempleado;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Empleado
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
     * Set apellido1
     *
     * @param string $apellido1
     *
     * @return Empleado
     */
    public function setApellido1($apellido1)
    {
        $this->apellido1 = $apellido1;

        return $this;
    }

    /**
     * Get apellido1
     *
     * @return string
     */
    public function getApellido1()
    {
        return $this->apellido1;
    }

    /**
     * Set apellido2
     *
     * @param string $apellido2
     *
     * @return Empleado
     */
    public function setApellido2($apellido2)
    {
        $this->apellido2 = $apellido2;

        return $this;
    }

    /**
     * Get apellido2
     *
     * @return string
     */
    public function getApellido2()
    {
        return $this->apellido2;
    }

    /**
     * Set extension
     *
     * @param string $extension
     *
     * @return Empleado
     */
    public function setExtension($extension)
    {
        $this->extension = $extension;

        return $this;
    }

    /**
     * Get extension
     *
     * @return string
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Empleado
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set puesto
     *
     * @param string $puesto
     *
     * @return Empleado
     */
    public function setPuesto($puesto)
    {
        $this->puesto = $puesto;

        return $this;
    }

    /**
     * Get puesto
     *
     * @return string
     */
    public function getPuesto()
    {
        return $this->puesto;
    }

    /**
     * Set codigojefe
     *
     * @param \DatabaseBundle\Entity\Empleado $codigojefe
     *
     * @return Empleado
     */
    public function setCodigojefe(\DatabaseBundle\Entity\Empleado $codigojefe = null)
    {
        $this->codigojefe = $codigojefe;

        return $this;
    }

    /**
     * Get codigojefe
     *
     * @return \DatabaseBundle\Entity\Empleado
     */
    public function getCodigojefe()
    {
        return $this->codigojefe;
    }

    /**
     * Set codigooficina
     *
     * @param \DatabaseBundle\Entity\Oficina $codigooficina
     *
     * @return Empleado
     */
    public function setCodigooficina(\DatabaseBundle\Entity\Oficina $codigooficina = null)
    {
        $this->codigooficina = $codigooficina;

        return $this;
    }

    /**
     * Get codigooficina
     *
     * @return \DatabaseBundle\Entity\Oficina
     */
    public function getCodigooficina()
    {
        return $this->codigooficina;
    }
}

