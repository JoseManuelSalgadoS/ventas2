<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PaymentsController extends AbstractController
{
    /*public function index()
    {
        return $this->render('payments/payments.html.twig');
    }*/

    public function getPayments(){
        $em = $this->getDoctrine()->getManager();

        $listPayments = $em->getRepository("App:Payments");
        return $this->render('payments/payments.html.twig',[
            'lista' -> $listPayments
        ]);
    }
}
