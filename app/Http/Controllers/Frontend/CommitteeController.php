<?php

namespace App\Http\Controllers\Frontend;

use App\CentralCommitte;
use App\DistrictCommittee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommitteeController extends Controller
{

    public function districtCommittee() {
        $committee = DistrictCommittee::all();
        return view('frontend.pages.districtCommittee')->with([
            'committee' => $committee,
        ]);
    }

    public function districtShow($dist)
    {
//        $members = DistrictCommittee::where('division', $dist)->get();
        return view('frontend.pages.singleDistrict')->with([
//            'members' => $members,
        ]);
    }

    public function division(){
        return view('frontend.pages.singleDistrict');
    }
}
