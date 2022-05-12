<?php namespace App\Entities;

use CodeIgniter\Entity;

class Recipe extends Entity
{
    public $ingredients;

    public function __construct (array $data = null)
    {
        parent::__construct($data);

        // Set the ingredient list to an empty array
        $this->ingredients = [];
    }

    public function setTitle (string $title)
    {
        $this->attributes['title'] = $title;

        // Automatically define the "slug" from the recipe title.
        $this->attributes['slug'] = mb_url_title($title, '-', TRUE);
    }
}