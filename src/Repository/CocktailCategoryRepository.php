<?php

class CocktailCategoryRepository {
    public function findAll() {

        $categories = [
            1 => [
                "id" => 1,
                "nom" => "cocktail",
                "description" => "cocktail classiques avec alcool"
            ],
            2 => [
                "id" => 2,
                "nom" => "mocktail",
                "description" => "cocktail sans alcool"
            ],
            3 => [
                "id" => 3,
                "nom" => "shooter",
                "description" => "moins de 25 cl"
            ],
            4 => [
                "id" => 4,
                "nom" => "cocktail soft",
                "description" => "cocktail sans alcool fort"
            ],
        ];
        return $categories;
    }
        public function findOneById($id) {
            $categories = $this->findAll();
            $category = $categories[$id];

            return $category;
        }
    
}