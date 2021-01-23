<?php

namespace App\Controller;

use App\Service\BoutiqueService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController
{
    public function index($userName)
    {
        return $this->render('base.html.twig', ['userName' => $userName]);
    }

    public function rayon($idCategorie)
    {
        $page = $idCategorie + ".html.twig";
        return $this->render($page);

    }

    public function contact()
    {
        return $this->render('contact.html.twig');
    }

    public function boutique(BoutiqueService $boutique)
    {
        $categories = $boutique->findAllCategories();
        return $this->render('boutique.html.twig', ['categories' => $categories]);
    }

    public function fruits()
    {
        return $this->render('fruits.html.twig');
    }

    public function junk()
    {
        return $this->render('junk.html.twig');
    }

    public function legumes()
    {
        return $this->render('legumes.html.twig');
    }

    public function virus()
    {
        return $this->render('virus.html.twig');
    }

    public function panier()
    {
        return $this->render('panier.html.twig');
    }
}