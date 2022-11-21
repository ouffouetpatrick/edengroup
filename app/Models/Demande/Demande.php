<?php

namespace App\Models\Demande;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    protected $fillable = [
        'libelle', 'statut', 'user_id', 'description'
    ];

    public function User()
    {
    	return $this->HasMany('App\User');
    }
}
