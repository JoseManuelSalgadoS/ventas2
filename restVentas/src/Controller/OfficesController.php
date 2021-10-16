<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OfficesController extends AbstractController
{
    /*public function index()
    {
        return $this->render('offices/offices.html.twig');
    }*/

    public function getOffices(){
        $em = $this->getDoctrine()->getManager();

        $listOffices = $em->getRepository("App:Offices");
        return $this->render('offices/offices.html.twig',[
            'lista' -> $listOffices
        ]);
    }
}
