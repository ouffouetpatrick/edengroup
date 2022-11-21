<?php

namespace App\Models\NewsLetters;

use Illuminate\Database\Eloquent\Model;

class NewsLetter extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'email'
    ];
}
