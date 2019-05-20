<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DepartmentCommittee extends Model
{
    //
    public function designation() {
        return $this -> belongsTo(Designation::class);
    }
}
