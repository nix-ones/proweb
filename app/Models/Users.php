<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Users extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenom',
        'pseudo',
        'email',
        'date',
        'adresse',
        'img',
        'password',
        'sexe',

        'id_article',
        'id_commentaire',
        'id_commande',
        'id_adresse',
        'id_role',
        'id_message',
    ];

    public function role(){
        return $this->belongsTo(Role::class);
    }
}
