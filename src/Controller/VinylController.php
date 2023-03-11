<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;

class VinylController extends AbstractController
{
    #[Route('/')]
    public function homepage() : Response{

        $tracks = [
            'NOM : EL FILA',
            'PRENOM : Oussama',
            'AGE : 22',
        ];
        return $this->render('vinyl/homepage.html.twig', [
            'title' => 'Hello world!',
        ]);
    }
    #[Route('/browse/{slug}')]
    public function browse($slug = null) : Response{

        $title = u($title = str_replace('_',' ',$slug ))->title(true);
        return new Response('<input name="Welcome" value="Welcome!">'.$title);
    }

}