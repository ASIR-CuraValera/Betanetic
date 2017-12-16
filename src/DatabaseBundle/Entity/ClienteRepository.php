<?php

namespace DatabaseBundle\Entity;

use Doctrine\ORM\EntityManager;


class ClienteRepository extends \Doctrine\ORM\EntityRepository
{

    public function aa() {
        return "hola";
    }

    public function getGama()
    {
        $em = $this->getEntityManager();
        $dql= $em->createQuery('SELECT g from DatabaseBundle:Gamasproducto g');

        $cat = $dql->getResult();

        return $cat;
    }


    public function getProducto($gama)
    {
        $em = $this->getEntityManager();

        if($gama == 'todas')
            $dql= $em->createQuery('SELECT p,c from DatabaseBundle:Producto p join p.CodigoProducto c order by p.CodigoProducto');
        //else
        //    $dql= $em->createQuery('SELECT p,c from BdBundle:Libros l join l.categoriaid c where l.categoriaid = :categoria')->setParameter('categoria',$categoria);


        $libros = $dql->getResult();


        return $libros;

    }

}