<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RendezVous extends Model
{
    use HasFactory;
    protected  $fillable = [
        "civilite",
        "nom",
        "prenom",
        "email",
        "telephone",
        "niveau",
        "formation",
        "campus",
        "autorisation",
        "etat"
    ];
}
