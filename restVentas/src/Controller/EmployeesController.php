<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EmployeesController extends AbstractController
{
    /*public function index()
    {
        return $this->render('employees/employees.html.twig');
    }*/

    public function getEmployees(){
        $em = $this->getDoctrine()->getManager();

        $listEmployees = $em->getRepository("App:Employees");
        return $this->render('employees/employees.html.twig',[
            'lista' -> $listEmployees
        ]);
    }
}
