<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commandes extends Model
{
    use HasFactory;
    protected $fillable = [
        'total',
        'qtite',
        'prixUnitaire',

        'id_produit',
    ];
}
