<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apprenant extends Model
{
    use HasFactory;
    //Pour enrichistre dans la base
    //Pour enumere des colonner
    protected $fillable = ["nom", "prenom", "telephone", "matricule"];
    
}
