<?php

namespace App\Controller;
use App\Entity\Product;
use App\Entity\Category;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LouerController extends AbstractController
{
    /**
     * @Route("/louer", name="louer")
     */
    public function index()
    {
        $repository = $this->getDoctrine()->getRepository(Product::class);

        $products = $repository->findBy(
            ['category' => '2']
        );

        return $this->render('/louer/index.html.twig',['products' => $products] );

    }
}
