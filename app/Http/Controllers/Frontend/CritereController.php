<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Critere;

class CritereController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $criteres = Critere::all();
        return view('admin.critere.index', compact('criteres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.critere.create');
    }

    /**
     * Store a newly created resource in storage.
     */



     public function store(Request $request)
     {
         $request->validate([
            'libelle' => 'required',
            'description' => 'required',
            'statut' => 'required',
         ]);

         $critere = new Critere;
         $critere->libelle = $request->libelle;
         $critere->description = $request->description;
         $critere->statut = $request->statut;

         $critere->save();

         return redirect()->route('criteres.index')
             ->with('success', 'Scoring criteria added successfully.');
     }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $critere = Critere::findOrFail($id);
        return view('admin.critere.show', compact('critere'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $critere = Critere::findOrFail($id);
        return view('admin.critere.edit', compact('critere'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,)
    {
        $validatedData = $request->validate([
            'libelle' => 'required',
            'description' => 'required',
            'statut' => 'required',
        ]);

        $critere = Critere::findOrFail($id);
        $critere->update($validatedData);

        return redirect()->route('criteres.index')
            ->with('success', 'Critere mis à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $critere = Critere::findOrFail($id);
        $critere->delete();

        return redirect()->route('criteres.index')->with('success', 'Critere supprimé avec succès.');
    }
}
