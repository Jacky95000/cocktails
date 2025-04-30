<?php
// Déclaration de l'espace de nom (namespace) pour organiser ton code.
namespace App\Controller;

// On importe le repository des cocktails qui sert à interroger les données.
use App\Repository\CocktailRepository;

// Classe de base pour les contrôleurs Symfony. Elle fournit des méthodes utiles comme render(), redirectToRoute(), etc.
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

// Annotation pour définir les routes (utilisée avec PHP 8+)
use Symfony\Component\Routing\Attribute\Route;

class CocktailController extends AbstractController {

// Déclare une route "/cocktails" accessible via la méthode HTTP GET
	// Elle déclenche l'exécution de la méthode displayListCocktails()
	#[Route('/cocktails', name: "list-cocktails")]
	public function displayListCocktails(CocktailRepository $cocktailRepository) {
		
		// On récupère tous les cocktails disponibles via le repository (BDD ou mock)
		$cocktails = $cocktailRepository->findAll();

		// On rend la vue Twig en lui passant les cocktails à afficher
		return $this->render('list-cocktails.html.twig', ["cocktails" => $cocktails]);

	}

 /**
     * Cette méthode affiche les détails d’un seul cocktail identifié par son ID dans l’URL.
     * L'ID est automatiquement injecté en paramètre, et le repository est autowiré.
     */
	#[Route('/single-cocktail/{id}', name: "single-cocktail")]
	public function displaySingleCocktails($id, CocktailRepository $cocktailRepository) {
		
		 
		$cocktail = $cocktailRepository->findOneById($id);

		  // On passe l'objet cocktail au template Twig pour affichage
		return $this->render('single-cocktail.html.twig', [
			'cocktail' => $cocktail
		]);

	}

}