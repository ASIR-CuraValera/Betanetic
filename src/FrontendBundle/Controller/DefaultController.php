<?php

namespace FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction() //Request $request
    {
        //$libros = $this->getDoctrine()->getManager()->getRepository('BdBundle:General')->getlibros();
        $gamas = $this->getDoctrine()->getManager()->getRepository('DatabaseBundle:Cliente')->aa();

        return $this->render('FrontendBundle:Default:index.html.twig', array(
            'gamas'=>$gamas//,
            //'libros'=>$libros
        ));
    }

    /*public function listarAction($gama)
    {
        $categorias = $this->getDoctrine()->getManager()->getRepository('DatabaseBundle:Gamasproducto')->GetGama();

        //$productos = $this->getDoctrine()->getManager()->getRepository('DatabaseBundle:Gamasproducto')->GetProductos($gama);





        return $this->render('FrontendBundle:Default:index.html.twig',array(
            'categorias'=>$categorias//,
            //'libros'=>$libros

        ));
    }*/
}
