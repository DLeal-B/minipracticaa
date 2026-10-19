<?php

namespace Database\Seeders;

use App\Models\Artista;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArtistaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Artista::create([
            'nombre' => 'Rosalía',
            'pais' => 'Espanya',
            'biografia' => 'Cantant i compositora catalana.',
            'imatge_url' => null,
            'activo' => true,
        ]);
        Artista::create([
            'nombre' => 'Al Safir',
            'pais' => 'Espanya',
            'biografia' => 'Raper a madrid.',
            'imatge_url' => null,
            'activo' => true,
        ]);
        Artista::create([
            'nombre' => '2Pac',
            'pais' => 'Estats Units',
            'biografia' => 'Raper de New York.',
            'imatge_url' => null,
            'activo' => false,
        ]);
        Artista::create([
            'nombre' => 'Natos',
            'pais' => 'Espanya',
            'biografia' => 'Raper de madrid.',
            'imatge_url' => null,
            'activo' => true,
        ]);
        Artista::create([
            'nombre' => 'Waor',
            'pais' => 'Espanya',
            'biografia' => 'Raper de madrid.',
            'imatge_url' => null,
            'activo' => true,
        ]);
        Artista::create([
            'nombre' => 'Marc Albareda',
            'pais' => 'Espanya',
            'biografia' => 'Cantant i compositor catalana.',
            'imatge_url' => null,
            'activo' => false,
        ]);
        Artista::create([
            'nombre' => 'Recycled J',
            'pais' => 'Espanya',
            'biografia' => 'Raper de madrid.',
            'imatge_url' => null,
            'activo' => true,
        ]);
        Artista::create([
            'nombre' => 'Farla',
            'pais' => 'Espanya',
            'biografia' => 'Cantant malaguenya.',
            'imatge_url' => null,
            'activo' => true,
        ]);

    }
}
