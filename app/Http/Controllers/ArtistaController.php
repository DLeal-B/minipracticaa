<?php

namespace App\Http\Controllers;

use App\Models\Artista;
use Illuminate\Http\Request;

class ArtistaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artistas = Artista::orderBy('nombre', 'asc')->get();;
        return view('artistas.index', compact('artistas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('artistas.form', [
            'artista' => new Artista(),
            'action' => route('artistas.store'),
            'method' => 'POST'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'pais' => 'required|string|max:255',
            'biografia' => 'nullable|string',
            'imatge_url' => 'nullable|url',
            'actiu' => 'sometimes|boolean',
        ]);
        $data = $request->all();
        Artista::create($data);

        return redirect()->route('artistas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $artista = Artista::findOrFail($id);
        return view('artistas.show', compact('artista'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $artista = Artista::findOrFail($id);

        return view('artistas.form', [
            'artista' => $artista,
            'action' => route('artistas.update', $artista->id),
            'method' => 'PUT'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'pais' => 'required|string|max:255',
            'biografia' => 'nullable|string',
            'imatge_url' => 'nullable|url',
            'actiu' => 'sometimes|boolean',
        ]);

        $artista = Artista::where('id', $id)->first();
        $artista->nombre = $request->nombre;
        $artista->pais = $request->pais;
        $artista->biografia = $request->biografia;
        $artista->imatge_url = $request->imatge_url;
        $artista->actiu = $request->actiu;

        $artista->save();
        return redirect()->route('artistas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
