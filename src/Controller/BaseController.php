<?php
// src/Controller/BaseController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Test;
use App\Form\TestType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;


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
    public function newPage(EntityManagerInterface $em, Request $request): Response
    {
        $number = random_int(0, 100);

        $form = $this->createForm(TestType::class, null);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
             $test = (new Test())
                            ->setName($form->get('name')->getData())
                            ->setEmail($form->get('email')->getData())
                            ->setBirthday($form->get('birthday')->getData())
                            ->setCountry($form->get('country')->getData())
                            ->setCity($form->get('city')->getData())
                            ->setPostalCode($form->get('postalCode')->getData())
                            ->setMoney($form->get('money')->getData());
            $em->persist($test);
            $em->flush();
        }

        return $this->render('new.html.twig', [
            'number' => $number??null,
            'form' => $form->createView()??null,
        ]);
    }
}