<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Nacmartin\PhpExecJs\PhpExecJs;

class ListingController extends AbstractController
{
    #[Route('/listing', name: 'app_listing')]
    public function index(SerializerInterface $serializer): Response
    {
        return $this->render('listing/index.html.twig', [
            'props' => $serializer->serialize(
                ['name' => 'Adrian'], 'json')
        ]);
    }
}
