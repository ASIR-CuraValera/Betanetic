<?php

namespace FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        $pag = $this->get('knp_paginator');
        $productos = $this->getDoctrine()->getManager()->getRepository('DatabaseBundle:Cliente')->getProducto('all', $request, $pag);
        $gamas = $this->getDoctrine()->getManager()->getRepository('DatabaseBundle:Cliente')->getGama();

        return $this->render('FrontendBundle:Default:index.html.twig', array(
            'gamas' => $gamas,
            'productos' => $productos[0],
            'pagination' => $productos["pag"]
        ));
    }

    public function listarAction($gama, Request $request)
    {
        $pag = $this->get('knp_paginator');
        $gamas = $this->getDoctrine()->getManager()->getRepository('DatabaseBundle:Cliente')->getGama();
        $productos = $this->getDoctrine()->getManager()->getRepository('DatabaseBundle:Cliente')->getProducto($gama, $request, $pag);

        return $this->render('FrontendBundle:Default:index.html.twig',array(
            'gamas' => $gamas,
            'productos' => $productos[0],
            'pagination' => $productos["pag"]
        ));
    }
}
