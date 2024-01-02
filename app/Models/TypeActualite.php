<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeActualite extends Model
{
    use HasFactory;

    protected $fillable = [
        "libelle-type"
    ];
}
