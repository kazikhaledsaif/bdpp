<?php

namespace App\Http\Controllers\Frontend;

use App\CentralCommitte;
use App\DepartmentCommittee;
use App\DistrictCommittee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class CommitteeController extends Controller
{

    public function centralCommittee() {
       $committee = CentralCommitte::orderBy('designation_id', 'asc')->get();
       // $committee = CentralCommitte::all();

        return view('frontend.pages.centralCommittee')->with([
            'keys' => $committee,
        ]);
    }

    public function districtCommittee() {

        return view('frontend.pages.districtCommittee');
    }

    public function districtShow($dist)
    {
        $committee = DistrictCommittee::where('district', $dist)->orderBy('designation_id', 'asc')->get();

        return view('frontend.pages.singleDistrict')->with([
            'keys' => $committee,
        ]);
    }

    public function departmentShow($dpt){
        $committee = DepartmentCommittee::where('department', $dpt)->orderBy('designation_id', 'asc')->get();
        return view('frontend.pages.departmentCommittee')->with([
            'name' => $dpt,
            'keys' => $committee,
        ]);

    }
}
