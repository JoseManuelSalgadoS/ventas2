<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductsController extends AbstractController
{
    /*public function index()
    {
        return $this->render('products/products.html.twig');
    }*/

    public function getProducts(){
        $em = $this->getDoctrine()->getManager();

        $listProducts = $em->getRepository("App:Products");
        return $this->render('products/products.html.twig',[
            'lista' -> $listProducts
        ]);
    }
}
