<?php

namespace App\Controller;

use CocktailCategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use  Symfony\Component\Routing\Attribute\Route;

class CategoriesController extends AbstractController {
    #[Route('/categories', name: "list-categories")]
	public function displayListCategories(CocktailCategoryRepository $cocktailCategoryRepository) {

        $cocktailCategoryRepository = new CocktailCategoryRepository();
        $categories = $cocktailCategoryRepository->findAll();
        
		return $this->render('list-categories.html.twig', ['categories' => $categories]);
	}

    #[Route('/categories/{id}', name: 'details-category')]
    public function showDetailsCategory($id, CocktailCategoryRepository $cocktailCategoryRepository)
    {
        
        $category = $cocktailCategoryRepository->findOneById($id);

        return $this->render('single-category.html.twig', [
            'category' => $category
        ]);
    }

}