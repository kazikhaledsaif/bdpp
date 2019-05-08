<?php

namespace App\Http\Controllers\Backend;

use App\CentralCommitte;
use App\Designation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CentralCommitteeController extends Controller
{

    public function index()
    {
        $designation = Designation::all();

        return view('backend.pages.cCommittee')->with([
            'designation' => $designation,
        ]);
    }


    public function create()
    {
        //
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


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
