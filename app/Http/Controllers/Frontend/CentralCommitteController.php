<?php

namespace App\Http\Controllers\Frontend;

use App\CentralCommitte;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CentralCommitteController extends Controller
{

    public function index()
    {


    }


    public function centralCommittee() {
        $committee = CentralCommitte::all();
        return view('frontend.pages.centralCommittee')->with([
            'committee' => $committee,
        ]);
    }




    public function store(Request $request) {

        $user = new CentralCommitte();
        $user->name = $request->name;
        $user->sub_title = $request->sub_title;
        $user->title = $request->title;
        $user->email = $request->email;
        $user->mobile = $request->mobile;
        $user->uniqueid = $request->uniqueid;
        $user->save();

        return back();
    }


    public function show(CentralCommitte $centralCommitte)
    {
        //
    }


    public function edit(CentralCommitte $centralCommitte)
    {
        //
    }


    public function update(Request $request, CentralCommitte $centralCommitte)
    {
        //
    }


    public function destroy(CentralCommitte $centralCommitte)
    {
        //
    }
}
