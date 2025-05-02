<?php

namespace App\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;
// gestion des bases de données
#[ORM\Entity()]
class Cocktail {

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    // propri stocke  variable; modif; migration vers la base de données.
    public ?int $id;
    #[ORM\Column(length: 255)]
    public ?string $name;
    #[ORM\Column(length: 255)]
    public ?string $description;
    #[ORM\Column(length: 255)]
    public ?string $ingredient;
    #[ORM\Column(length: 255)]
    public ?string $image;
    public DateTime $createdAt;
    public bool $isPublished;

    public function  __construct($name, $description, $ingredient, $image) {
        $this->name = $name;
        $this->description = $description;
        $this->ingredient = $ingredient;
        $this->image = $image;

        $this->createdAt = new \DateTime();
        $this->isPublished = true;

        $this->id = 5;
    }
}