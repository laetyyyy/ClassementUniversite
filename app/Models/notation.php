<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Cjmellor\Rating\Concerns\CanBeRated;

class notation extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    use CanBeRated; // AJOUTER CELA


    protected $fillable = [
        'rating',
        'universite_id',
        'users_id',
        'critere',



    ];
    protected $table='notation';

    use HasFactory;
}
