<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductLinesController extends AbstractController
{
    /*public function index()
    {
        return $this->render('productlines/productlines.html.twig');
    }*/

    public function getProductLines(){
        $em = $this->getDoctrine()->getManager();

        $listProductlines = $em->getRepository("App:Productlines");
        return $this->render('productlines/productlines.html.twig',[
            'lista' -> $listProductlines
        ]);
    }
}
