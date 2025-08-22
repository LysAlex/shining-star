<?php
// src/Controller/BaseController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BaseController extends AbstractController
{
    #[Route(path: '/', name: 'home')]
    public function number(): Response
    {
        $number = random_int(0, 100);

        return $this->render('base.html.twig', [
            'number' => $number??null
        ]);
    }

     #[Route(path: '/new', name: 'new')]
    public function newPage(): Response
    {
        $number = random_int(0, 100);

        return $this->render('base.html.twig', [
            'number' => $number??null
        ]);
    }
}