<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    use HasFactory;

    protected $fillable = [
        "titre",
        "titre_en",
        "description",
        "description_en",
        "image_avant",
        "image_down",
        "lien",
        "etat"
    ];
}
