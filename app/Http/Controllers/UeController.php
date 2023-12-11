<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ue;


//Pour Afficher la liste des matiers
class UeController extends Controller
{
    public function index(){
        $listesUe = Ue::all();
        return view("ue/liste", ["liste"=> $listesUe]);
    }
}

