<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Universite;
use App\Models\Commentaire;


class universitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $universites = Universite::all();
        return view('admin.liste', ['universites' => $universites]);


    }
    public function index2()
    {
        $universites = Universite::all();
        return view('website.universite.index', ['universites' => $universites]);



    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('website.universite.create');
    }

    /**
     * Store a newly created resource in storage.
//      */
//     public function store(Request $request)
// {
//     $request->validate([
//         'name' => 'required',
//         'adresse' => 'required',
//         'description' => 'required',
//         'contact' => 'required',
//         'infrastructure' => 'required',
//         'programs' => 'required',
//         'photo' => 'required', // Ajout des règles pour la photo
//     ]);

//     $newUniversite = new Universite();
//     $newUniversite->name = $request->name;
//     $newUniversite->adresse = $request->adresse;
//     $newUniversite->description = $request->description;
//     $newUniversite->contact = $request->contact;
//     $newUniversite->infrastructure = $request->infrastructure;
//     $newUniversite->programs = $request->programs;
//     $fileName = time() . $request->file('photo')->getClientOriginalName();
//         $path = $request->file('photo')->storeAs('univerimages', $fileName, 'public');
//         $requestData["photo"] = '/storage/' . $path;
//     $newUniversite->save();

//     return redirect()->route('admin.liste');
// }
public function store(Request $request)
    {
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240',
        ]);

        $requestData = $request->all();
        $fileName = time() . $request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAs('universite-images', $fileName, 'public');
        $requestData["photo"] = '/storage/' . $path;

        Universite::create($requestData);

        session()->flash('success', 'University added successfully!');
        return redirect()->route('admin.liste');

    }





    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $university = Universite::findOrFail($id);
        $commentaires = Commentaire::all(); // Correction de la variable
        return view('website.universite.detail', compact('university','commentaires'));
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Universite $universite){
        return view('website.universite.edit', ['universite' => $universite]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request){
        $validatedData = $request->validate([
            'name' => 'required',
            'adresse' => 'required',
            'description' => 'required',
            'contact' => 'required',
            'infrastructure' => 'nullable',
            'programs' => 'nullable',
            'photo' => 'nullable|image|max:2048',
        ]);

        $universites = Universite::findOrFail($request->id);
        $universites->name = $validatedData['name'];
        $universites->adresse = $validatedData['adresse'];
        $universites->description = $validatedData['description'];
        $universites->contact = $validatedData['contact'];
        $universites->infrastructure = $validatedData['infrastructure'];
        $universites->programs = $validatedData['programs'];
        if ($request->hasFile('photo')) {
            if ($universites->photo_path) {
                Storage::disk('public')->delete($universites->photo);
            }
            $imagePath = $request->file('photo')->storePublicly('universite-images', 'public');
            $universites->photo = $imagePath;
        }
        $universites->save();

        return redirect()->route('admin.liste');

    }

    /**
     * Remove the specified resource from storage.
     */

     public function destroy(Universite $universite){
        $universite->delete();
        return redirect(route('admin.liste'))->with('success', 'Université deleted Succesffully');
    }



}
