<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Professeur;


//Pour Afficher la liste des matiers
class ProfesseurController extends Controller
{
    public function index(){
        $listesProfesseur = Professeur::all();
        
        return view("professeur/liste", ["liste"=> $listesProfesseur]);
    }

    

    
}

