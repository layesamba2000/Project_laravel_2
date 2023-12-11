<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
    use HasFactory;

    //Pour afficher les noms et prenoms du table proffeseur qui est une cle etrange sur la table matiers
    public function professeur()
    {
        return $this->belongsTo(Professeur::class, 'professeur_id');
    }
}
