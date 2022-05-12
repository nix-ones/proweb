<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'titre',
        'img',
        'carticle',
        'id_commentaire',
    ];
}
