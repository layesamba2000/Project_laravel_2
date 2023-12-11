<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matiere;


//Pour Afficher la liste des matiers
class MatiereController extends Controller
{
    public function index(){
        $listesMatiers = Matiere::all();
        return view("matiere/liste", ["liste"=> $listesMatiers]);
    }

    // Dans le modèle Matiere.php

public function professeurs()
{
    return $this->belongsTo(Professeur::class, 'professeur_id');
}

}

