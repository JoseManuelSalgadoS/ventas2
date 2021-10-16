<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OrdersController extends AbstractController
{
    /*public function index()
    {
        return $this->render('orders/orders.html.twig');
    }*/

    public function getOrders(){
        $em = $this->getDoctrine()->getManager();

        $listOrders = $em->getRepository("App:Orders");
        return $this->render('orders/orders.html.twig',[
            'lista' -> $listOrders
        ]);
    }
}
