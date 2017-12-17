<?php

namespace FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        $productos = $this->getDoctrine()->getManager()->getRepository('DatabaseBundle:Cliente')->getProducto('all');
        $gamas = $this->getDoctrine()->getManager()->getRepository('DatabaseBundle:Cliente')->getGama();

        return $this->render('FrontendBundle:Default:index.html.twig', array(
            'gamas' => $gamas,
            //'productos' => $productos[0],
            'pagination' => $productos //$this->Paginate($productos["dql"], $request)
        ));
    }

    public function listarAction(Request $request, $gama)
    {
        $gamas = $this->getDoctrine()->getManager()->getRepository('DatabaseBundle:Cliente')->getGama();
        $productos = $this->getDoctrine()->getManager()->getRepository('DatabaseBundle:Cliente')->getProducto($gama);

        return $this->render('FrontendBundle:Default:index.html.twig',array(
            'gamas' => $gamas,
            //'productos' => $productos[0],
            'pagination' => $this->Paginate($productos, $request)
        ));
    }

    public function Paginate($query, $request)
    {
        //echo $request->query->getInt('page', 1);
        //die();

        $pag = $this->get('knp_paginator')->paginate(
            $query,
            $request->query->getInt('page', 1),
            10
        );

        return $pag;
    }

}
