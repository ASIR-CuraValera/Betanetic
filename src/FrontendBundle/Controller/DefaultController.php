<?php

namespace FrontendBundle\Controller;

//use DatabaseBundle\Entity\Paginador;
use DatabaseBundle\Entity\Gamasproducto;
use Doctrine\DBAL\Types\DecimalType;
use Doctrine\DBAL\Types\Type;
use DatabaseBundle\Entity\Producto;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class DefaultController extends Controller
{
    public $form;
    public $cliente;
    public $productos;
    public $gamas;

    public function Load($prods = true)
    {
        $this->cliente = $this->getDoctrine()->getManager()->getRepository('DatabaseBundle:Cliente');
        $this->productos = $this->cliente;

        if($prods)
            $this->productos = $this->productos->getProducto('all');

        $this->gamas = $this->cliente->getGama();
        /*$gam = array();

        for ($i = 0; $i < sizeof($this->gamas); ++$i) {
            $gam[$i] = $this->gamas[$i]['gama'];
        }*/

        //Crear el formulario
        $this->form = $this->createFormBuilder()
            ->setAction($this->generateUrl('insertar'))
            ->add('nombreProducto', TextType::class)
            ->add('gamaProducto', ChoiceType::class, array(
                'choices' => array_fill(0, sizeof($this->gamas), ''),
                'choices_as_values' => true,
                'choice_label' => function ($allChoices, $currentChoiceKey) {
                    return $this->gamas[$currentChoiceKey]['gama'];
                }))
            ->add('dimensionesProducto', TextType::class, array('attr' => array('value' => 'abc123')))
            ->add('proveedorProducto', TextType::class, array('attr' => array('value' => 'abc123')))
            ->add('descripcionProducto', TextType::class, array('attr' => array('value' => 'abc123')))
            ->add('cantidadProducto', IntegerType::class, array('attr' => array('value' => '0')))//, Type::getType('smallint'))
            ->add('precioVentaProducto', IntegerType::class, array('attr' => array('value' => '0')))//, DecimalType::class)
            ->add('precioProveedorProducto', IntegerType::class, array('attr' => array('value' => '0')))
            ->add('imagenProducto', TextType::class, array('attr' => array('value' => 'abc123')))
            ->add('enviar', SubmitType::class)
            ->getForm()->createView();

        /*
         *  function ($allChoices, $currentChoiceKey) {
                    return 'form.choice.'.$currentChoiceKey;
                }
         * */
    }

    public function indexAction(Request $request)
    {
        $this->Load($request);

        return $this->render('FrontendBundle:Default:index.html.twig', array(
            'gamas' => $this->gamas,
            'pag' => $this->productos->paginar($request),
            'formulario' => $this->form
        ));
    }

    public function listarAction(Request $request, $gama)
    {
        $this->Load(false);
        $this->productos = $this->productos->getProducto($gama);

        return $this->render('FrontendBundle:Default:index.html.twig',array(
            'gamas' => $this->gamas,
            'pag' => $this->productos->paginar($request),
            'formulario' => $this->form
        ));
    }

    public function insertarAction(Request $request)
    {
        $this->Load();

        $em = $this->getDoctrine()->getManager();

        $producto = new Producto();

        //print_r($request->request->all());
        //die;

        $req = $request->request->all();

        $nombre = $req['form']['nombreProducto'];
        $gama = $req['form']['gamaProducto'];
        $dimensiones = $req['form']['dimensionesProducto'];
        $proveedor = $req['form']['proveedorProducto'];
        $descripcion = $req['form']['descripcionProducto'];
        $cantidad = $req['form']['cantidadProducto'];
        $precioVenta = $req['form']['precioVentaProducto'];
        $precioProveedor = $req['form']['precioProveedorProducto'];
        $imagen = $req['form']['imagenProducto'];

        //$gamaProducto = new Gamasproducto();
        //$gamaProducto->setGama($gama);

        $gamafK = $em->createQuery('SELECT g from DatabaseBundle:Gamasproducto g order by g.gama')
            ->setFirstResult((int)$gama)
            ->setMaxResults(1)
            ->getResult();

        $productosLen = sizeof($em->createQuery('SELECT p from DatabaseBundle:Producto p')
            ->getResult());

        /*$producto->setCodigoProducto(strtoupper(substr($gamafK[0]->getGama(), 0, 2))."-".$productosLen);
        $producto->setNombre($nombre);
        $producto->setGama($gamafK[0]);
        $producto->setDimensiones($dimensiones);
        $producto->setProveedor($proveedor);
        $producto->setDescripcion($descripcion);
        $producto->setCantidadenstock($cantidad);
        $producto->setPrecioventa($precioVenta);
        $producto->setPrecioproveedor($precioProveedor);
        $producto->setImagen($imagen);*/

        //$em->persist($producto);
        $insert = $em->createQuery('INSERT INTO producto (CodigoProducto, Nombre, Dimensiones, Proveedor, Descripcion, CantidadEnStock, PrecioVenta, PrecioProveedor, imagen, Gama) 
                                    VALUES (:CodigoProducto, :Nombre, :Dimensiones, :Proveedor, :Descripcion, :CantidadEnStock, :PrecioVenta, :PrecioProveedor, :imagen, :Gama)')
        ->setParameter('CodigoProducto', strtoupper(substr($gamafK[0]->getGama(), 0, 2))."-".$productosLen)
        ->setParameter('Nombre', $nombre)
        ->setParameter('Dimensiones', $dimensiones)
        ->setParameter('Proveedor', $proveedor)
        ->setParameter('Descripcion', $descripcion)
        ->setParameter('CantidadEnStock', $cantidad)
        ->setParameter('PrecioVenta', $precioVenta)
        ->setParameter('PrecioProveedor', $precioProveedor)
        ->setParameter('imagen', $imagen)
        ->setParameter('Gama', $gama);

        $flush = $em->flush();

        return $this->render('FrontendBundle:Default:index.html.twig', array(
            'gamas' => $this->gamas,
            'pag' => $this->productos->paginar($request),
            'flush' => $flush,
            'formulario' => $this->form
        ));
    }

}
