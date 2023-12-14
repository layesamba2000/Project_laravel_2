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

    //Pour creer le lien pour la redirection sur la base ajout

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
        "nom"=> "required",
        "prenom"=> "required",
        "telephone"=> "required",
        "matricule"=> "required"
       ]);
    
       Apprenant::create($request-> all());
    
    }



}

