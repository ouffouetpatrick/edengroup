<?php
namespace App\Repositories\Demande;

use App\Models\Demande\Demande;
use App\Repositories\ResourceRepository;

class DemandeRepository extends ResourceRepository
{
    public function __construct(Demande $demande)
    {
        $this->model=$demande;
    }
}