<?php

namespace App\Controller;

use App\Entity\Product;
use App\Form\AddProductType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    #[Route('/product', name: 'app_product')]
    public function index(): Response
    {
        $product = new Product();

        $form = $this->createForm(AddProductType::class, $product);

        return $this->render('product/index.html.twig', [
            'form' => $form
        ]);
    }
}
