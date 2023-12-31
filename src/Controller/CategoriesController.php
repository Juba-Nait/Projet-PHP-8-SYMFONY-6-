<?php

namespace App\Controller;

use App\Entity\Categories;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


#[Route('/categories', name: 'categories_')]
class CategoriesController extends AbstractController
{

    #[Route('/{id}', name: 'list')]
    public function list(Categories $category): Response

    {

        $products = $category->getProducts();
        // dd($products);

        //on va chercher la liste des produits de la categorie
        $products = $category->getProducts();
        return $this->render('categories/list.html.twig', compact('category', 'products'));
        // syntaxe alternative de compact:
        //return $this->render('categories/list.html.twig', [
        // 'category' => $category,
        //  'products' => $products
        //  ]);  
    }
}
