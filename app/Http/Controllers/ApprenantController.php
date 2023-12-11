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
}
