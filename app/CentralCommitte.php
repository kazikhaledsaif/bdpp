<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CentralCommitte extends Model
{
    public function ccPost(){
        return $this->hasOne(Designation::class,'id','designation');
    }
}
