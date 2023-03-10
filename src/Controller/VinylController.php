<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;

class VinylController
{
    #[Route('/')]
    public function homepage() : Response{
        return new Response('<input value="Hello World"> <br> <a href="browse">click</a>>');
    }
    #[Route('/browse/{slug}')]
    public function browse($slug = null) : Response{

        $title = u($title = str_replace('_',' ',$slug ))->title(true);
        return new Response('<input name="Welcome" value="Welcome!">'.$title);
    }

}