<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apprenant;


//Pour Afficher la liste des apprenants
class ApprenantController extends Controller
{
    public function index(){
        $listesApprenants = Apprenant::all();
        return view("apprenants/liste", ["liste"=> $listesApprenants]);
    }

    //Pour creer le lien pour la redirection sur le fichier ajout

    public function create()
    {
        return view('apprenants.create');
    }

    //Pour enrichistre dans la base
    public function store(Request $request)
    {
       // dd($request->input('nom'));

       /*Apprenant::create(
        [
            'nom' => $request->input('nom'),
            'prenom' => $request->input('prenom'),
            'telephone' => $request->input('telephone'),
            'matricule' => $request->input('matricule')
        ]
       );*/
      
       //$appreant->'nom' => $request->input('nom'),
       //$appreant->'prenom' => $request->input('prenom'),
       //$appreant->'telephone' => $request->input('telephone'),
       //$appreant->'matricule' => $request->input('matricule'),


       //Pour empecher de rien saisi
$request->validate([
    "nom" => "required",
    "prenom" => "required",
    "telephone" => "required",
    "matricule" => "required"
], [
    "nom.required" => "Le champ Nom est requis.",
    "prenom.required" => "Le champ Prénom est requis.",
    "telephone.required" => "Le champ Téléphone est requis.",
    "matricule.required" => "Le champ Matricule est requis."
]);

    
       Apprenant::create($request-> all());

       return redirect()->route('liste-apprenants')->with('success', 'Apprenant mis à jour avec succès');

    
    }
    

    //Pour creer le lien pour la redirection sur la base de modification

    public function edit($id)
    {
        $apprenant = Apprenant::find($id);
    
        return view('apprenants.edit', compact('apprenant'));
    }
    //Pour la modification

    public function update(Request $request, $id)
    {
        // Valider les données du formulaire
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'telephone' => 'required',
            'matricule' => 'required',
            // Ajoutez d'autres règles de validation selon vos besoins
        ]);
    
        // Trouver l'apprenant à mettre à jour
        $apprenant = Apprenant::findOrFail($id);
    
        // Mettre à jour les données de l'apprenant
        $apprenant->update([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'telephone' => $request->telephone,
            'matricule' => $request->matricule,
        
        ]);
    
        // Rediriger avec un message de succès

        return redirect()->route('liste-apprenants', $id)->with('success', 'Apprenant mis à jour avec succès');
    }
    

    public function destroy($id)
{
    // Trouver l'apprenant à supprimer
    $apprenant = Apprenant::findOrFail($id);

    // Supprimer l'apprenant
    $apprenant->delete();

    // Rediriger avec un message de succès
    return redirect()->route('liste-apprenants')->with('success', 'Apprenant supprimé avec succès');
}

}

