<?php
namespace App\Repositories\Categories;

use App\Models\Demande\Categories;
use App\Repositories\ResourceRepository;

class CategoriesRepository extends ResourceRepository
{
    public function __construct(Categories $categories)
    {
        $this->model=$categories;
    }
}