<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;


//Pour Afficher la liste des notes
class NoteController extends Controller
{
    public function index(){
        $listesNote = Note::all();
        return view("note/liste", ["liste"=> $listesNote]);
    }
}
