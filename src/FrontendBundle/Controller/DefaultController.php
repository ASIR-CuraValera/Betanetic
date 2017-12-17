<?php

namespace FrontendBundle\Controller;

use DatabaseBundle\Entity\Producto;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class DefaultController extends Controller
{
    public $form;
    public $productos;
    public $gamas;

    public function Load()
    {
        $this->productos = $this->getDoctrine()->getManager()->getRepository('DatabaseBundle:Cliente');
        $this->productos->getProducto('all');
        $this->gamas = $this->getDoctrine()->getManager()->getRepository('DatabaseBundle:Cliente')->getGama();
        $this->form = $this->createFormBuilder()
            ->add('phone', TextType::class, array('attr' => array('autofocus' => '')))
            ->add('period', IntegerType::class, array('attr' => array('value' => '12')))
            ->getForm()->createView();
    }

    public function indexAction(Request $request)
    {
        $this->Load();

        return $this->render('FrontendBundle:Default:index.html.twig', array(
            'gamas' => $this->gamas,
            'pagination' => null, //$this->Paginate($this->productos, $request),
            'formulario' => $this->form
        ));
    }

    public function listarAction(Request $request, $gama)
    {
        $this->Load();
        $this->productos->getProducto($gama);

        return $this->render('FrontendBundle:Default:index.html.twig',array(
            'gamas' => $this->gamas,
            'pagination' => null, //$this->Paginate($this->productos, $request),
            'formulario' => $this->form
        ));
    }

    public function insertarAction(Request $request)
    {
        $this->Load();

        $em = $this->getDoctrine()->getManager();

        $producto = new Producto();

        $nombre = $request->get('nombreProducto');
        $gama = $request->get('gamaProducto');
        $dimensiones = $request->get('dimensionesProducto');
        $proveedor = $request->get('proveedorProducto');
        $descripcion = $request->get('descripcionProducto');
        $cantidad = $request->get('cantidadProducto');
        $precioVenta = $request->get('precioVentaProducto');
        $precioProveedor = $request->get('precioProveedorProducto');
        $imagen = $request->get('imagenProducto');

        $producto->setNombre($nombre);
        $producto->setGama($gama);
        $producto->setDimensiones($dimensiones);
        $producto->setProveedor($proveedor);
        $producto->setDescripcion($descripcion);
        $producto->setCantidadenstock($cantidad);
        $producto->setPrecioventa($precioVenta);
        $producto->setPrecioproveedor($precioProveedor);
        $producto->setImagen($imagen);

        $em->persist($producto);
        $flush = $em->flush();

        return $this->render('FrontendBundle:Default:index.html.twig', array(
            'gamas' => $this->gamas,
            'pagination' => null, // $this->Paginate($this->productos, $request),
            'flush' => $flush
        ));
    }

    public function Paginate($query, $request)
    {
        $pag = $this->get('knp_paginator')->paginate(
            $query,
            $request->query->getInt('page', 1),
            10
        );

        return $pag;
    }

}
