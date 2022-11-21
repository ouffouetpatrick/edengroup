<?php

namespace App\Models\Messages;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'name', 'email', 'content'
    ];
}
