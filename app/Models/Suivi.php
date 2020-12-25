<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Suivi extends Model
{
    //
    public function rubrique(){
        return $this->belongsTo('App\Models\Rubrique','rubrique_id');
    }
}
