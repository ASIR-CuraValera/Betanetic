<?php

namespace DatabaseBundle\Entity;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class ClienteRepository extends \Doctrine\ORM\EntityRepository
{

    public function getGama()
    {
        $em = $this->getEntityManager();
        $dql= $em->createQuery('SELECT g.gama from DatabaseBundle:Gamasproducto g order by g.gama'); //Como no tenemos una clave primaria vamos aa tener que hacer un poco la chapuza asegurandonos de que haya un orden para que cuando vayamos a obtener el registro coincida

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
            $gama = $em->createQuery('SELECT g.gama from DatabaseBundle:Gamasproducto g order by g.gama')
                ->setFirstResult((int)$gama_var)
                ->setMaxResults(1)
                ->getArrayResult()[0]["gama"];

            $dql = $em->createQuery('SELECT p from DatabaseBundle:Producto p where p.gama = :gama order by p.codigoproducto')
                ->setParameter('gama', $gama);
        }

        return new Paginador($dql);
    }
}

class Paginador
{
    private $dql;
    public function __construct($dql)
    {
        $this->dql = $dql;
    }

    public function paginar($request)
    {
        $_ = $this->dql;
        $thisPage = (int)$request->query->getInt('page', 1);

        $els = $_->getArrayResult();
        $paginator = new Paginator($_);
        $totalPosts = sizeof($els);
        $maxPages = ceil($totalPosts / PAGINATOR_LIMIT);

        $paginator->getQuery()
                  ->setFirstResult(PAGINATOR_LIMIT * ($thisPage - 1))
                  ->setMaxResults(PAGINATOR_LIMIT);

        return array("elements" => $paginator->getIterator(), "maxPages" => $maxPages, "thisPage" => $thisPage);
    }
}

/*class AppExtension extends AbstractExtension
{
    public function getFilters()
    {
        return array(
            new TwigFilter('paginar', array($this, 'paginadorFilter')),
        );
    }

    public function paginadorFilter($number, $decimals = 0, $decPoint = '.', $thousandsSep = ',')
    {
        $price = number_format($number, $decimals, $decPoint, $thousandsSep);
        $price = '$'.$price;

        return $price;
    }
}*/