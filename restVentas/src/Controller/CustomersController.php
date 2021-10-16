<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CustomersController extends AbstractController
{
    /*public function index()
    {
        return $this->render('customers/customers.html.twig');
    }*/

    public function getCustomers(){
        $em = $this->getDoctrine()->getManager();

        $listCustomers = $em->getRepository("App:Customers");
        return $this->render('customers/customers.html.twig',[
            'lista' -> $listCustomers
        ]);
    }
}
