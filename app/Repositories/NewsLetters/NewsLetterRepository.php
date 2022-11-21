<?php
namespace App\Repositories\NewsLetters;

use App\Models\NewsLetters\NewsLetter;
use App\Repositories\ResourceRepository;
use DB;

class NewsLetterRepository extends ResourceRepository
{
    public function __construct(NewsLetter $newsletters)
    {
        $this->model=$newsletters;
    }
    public function insert($donnees){
    	return DB::Table('newsletters')
    			->Insert($donnees);
    }
}