<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artista extends Model
{
    protected $fillable = [
        'nombre',
        'pais',
        'biografia',
        'imatge_url',
        'activo'
    ];
    protected $casts = [
        'activo' => 'boolean',
    ];
}
