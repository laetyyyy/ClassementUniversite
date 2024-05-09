<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Universite extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'adresse',
        'description',
        'contact',
        'infrastructure',
        'programs',
        'photo',


    ];
    protected $table='universite';
}
