<?php

namespace DatabaseBundle\Entity;

use Doctrine\ORM\EntityManager;

class ClienteRepository extends \Doctrine\ORM\EntityRepository
{

    public function getGama()
    {
        $em = $this->getEntityManager();
        $dql= $em->createQuery('SELECT g from DatabaseBundle:Gamasproducto g order by g.gama'); //Como no tenemos una clave primaria vamos aa tener que hacer un poco la chapuza asegurandonos de que haya un orden para que cuando vayamos a obtener el registro coincida

        $gama = $dql->getResult();

        return $gama;
    }


    public function getProducto($gama_var)
    {
        $em = $this->getEntityManager();

        if($gama_var == 'todas')
            $dql = $em->createQuery('SELECT p from DatabaseBundle:Producto p');
        else
        {
            $gama = $em->createQuery('SELECT g.gama from DatabaseBundle:Gamasproducto g order by g.gama')->setFirstResult((int)$gama_var)->setMaxResults(1)->getArrayResult()[0]["gama"];
            $dql = $em->createQuery('SELECT p from DatabaseBundle:Producto p where p.gama = :gama order by p.codigoproducto')->setParameter('gama', $gama);
        }

        //$productos = $dql->getResult();

        return $dql; //array(0 => $productos, "dql" => $dql);

    }
}