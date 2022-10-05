<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class StudentController extends AbstractController
{

/**
 * @Route('/student', name='student')
 */
public function index()
{
    return $this->render(  'student/index.html.twig', ['controller_name' => 'StudentController',]);


}
}