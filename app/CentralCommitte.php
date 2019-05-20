<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CentralCommitte extends Model
{
    public function designation() {
        return $this -> belongsTo(Designation::class);
    }
    public function ccPost(){
        return $this->hasOne(Designation::class,'id','designation_id');
    }
}
