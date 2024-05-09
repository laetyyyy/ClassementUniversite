<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Critere extends Model
{
    use HasFactory;

    protected $fillable = [
        'libelle',
        'description',
        'statut',

    ];
    protected $table='Critere';
}
