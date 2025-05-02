<?php

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

class CocktailCategory {


    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    public int $id;

	#[ORM\Column(length: 255)]
	public string $name;

	#[ORM\Column]
	public \DateTime $createdAt;

	#[ORM\Column(length: 255)]
	public string $description;
}