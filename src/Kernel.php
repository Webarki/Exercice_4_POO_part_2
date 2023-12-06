<?php

namespace App\src;

use App\src\Controller\TwigController;

/**
 * Class Noyau Routeur 
 */
class Kernel extends TwigController
{
    public function start()
    {
        //var_dump($_SERVER);
        $uri = $_SERVER["PATH_INFO"];
        //var_dump($uri);
        if ($uri === '/home') {
            echo $this->twig->render('home/index.html.twig', [
                'data' => 'Bienvenue sur le controller ! ' . $uri
            ]);
        } else if ($uri === '/contact') {
            echo $this->twig->render('contact/index.html.twig', [
                'data' => 'Bienvenue sur le controller ! ' . $uri
            ]);
        } else {
            $controller = new TwigController();
            $controller->index();
        }
    }
}
