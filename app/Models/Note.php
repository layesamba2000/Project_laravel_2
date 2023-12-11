<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

      //Pour afficher les noms et prenoms du table proffeseur qui est une cle etrange sur la table matiers
      public function apprenants()
      {
          return $this->belongsTo(Apprenant::class, 'apprenant_id');

      }

        //Pour afficher les UE du table ues qui est une cle etrange sur la table note
      public function ues()
      {
        return $this->belongsTo(Ue::class, 'ue_id');
      }
}
