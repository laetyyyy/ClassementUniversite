<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Commentaire;


class CommentairesController extends Controller
{
    public function index()
    {
        $commentaires = Commentaire::all();
        return view('commentaire',['commentaires'=>$commentaires]);
    }

    public function create()
    {
        return view('commentaires.create');
    }

    public function store(Request $request)
    {
        // Validation des données du formulaire
        $request->validate([
            'contenu' => 'required',
        ]);

        // Création d'une nouvelle instance de commentaire
        $commentaires = new Commentaire();

        // Attribution de l'ID de l'utilisateur actuellement authentifié
        $commentaires->users_id = auth()->id();

        // Attribution de l'ID de l'université à laquelle le commentaire est associé
        $commentaires->universite_id = $request->universite_id;

        // Attribution du contenu du commentaire
        $commentaires->contenu = $request->contenu;

        // Sauvegarde du commentaire dans la base de données
        $commentaires->save();

        // Redirection vers la page précédente avec un message de succès
        return redirect()->back()->with('success', 'Commentaire créé avec succès.');
    }

}
