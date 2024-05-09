<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    use HasFactory;
    protected $fillable = [
        'contenu',
        'users_id',
        'universite_id',




    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function university()
    {
        return $this->belongsTo(Universite::class);
    }
}
