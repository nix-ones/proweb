<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produits extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'titre',
        'prix',
        'qtiteproduit',
        'desc',
        'img',
        'id_categorie',
    ];
}
