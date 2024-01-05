<?php

namespace App\Http\Controllers;
use App\Models\Matiere;
use App\Models\Professeur;
use Illuminate\Http\Request;

class MatiereController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listesMatiers = Matiere::all();
        
        return view("matieres/liste", ["liste"=> $listesMatiers]);
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $professeurs = Professeur::all(); // Récupérer la liste des professeurs

        return view('matieres.create', ['professeurs' => $professeurs]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Matiere::create($request-> all());

        return redirect()->route('matieres.index')->with('success', 'Matiere mis à jour avec succès');
 
    }

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
        // Récupérer la liste des professeurs
        $professeurs = Professeur::all();
    
        // Récupérer la matière
        $matiere = Matiere::find($id);
    
        // Passer les variables à la vue
        return view('matieres.edit', ['professeurs' => $professeurs, 'matiere' => $matiere]);
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Trouver la matière à mettre à jour
        $matiere = Matiere::findOrFail($id);
    
        // Mettre à jour les données de la matière
        $matiere->update([
            'nomMatiere' => $request->nomMatiere,
            'coef' => $request->coef,
            'credit' => $request->credit,
            'professeur_id' => $request->professeur_id,
        ]);
    
        // Rediriger avec un message de succès
        return redirect()->route('matieres.index')->with('success', 'Matiere mise à jour avec succès');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $matiere = Matiere::findOrFail($id);

        // Supprimer la Matiere
        $matiere->delete();
    
        // Rediriger avec un message de succès
        return redirect()->route('matieres.index')->with('success', 'Matiere supprimé avec succès');
    }
    
    }

