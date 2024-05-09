<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\notation;
use App\Models\Critere;
use App\Models\Universite;



class NotesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $criteres = Critere::all();

        return view('website.notes.index', compact('criteres'));    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     $note = new Notes();
    //     $note->rateable_id = $request->university_id;
    //     $note->criteres = json_encode([
    //         'quality_of_education' => $request->quality_of_education,
    //         'infrastructure' => $request->infrastructure,
    //         'research' => $request->research,
    //         'job_placement' => $request->job_placement,
    //     ]);
    //     $note->user_id = auth()->id();
    //     $note->rating = ($request->quality_of_education + $request->infrastructure + $request->research + $request->job_placement) / 4;
    //     //dd($note);
    //     $note->save();
    // }

    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
