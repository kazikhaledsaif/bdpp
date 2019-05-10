<?php

namespace App\Http\Controllers\Frontend;

use App\GeneralMember;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GeneralMemberController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $new = new GeneralMember();
        $new->name = $request->name;
        $new->father_name = $request->father_name;
        $new->mother_name = $request->mother_name;
        $new->dob = $request->dob;
        $new->nid = $request->nid;
        $new->gender = $request->gender;
        $new->email = $request->email;
        $new->present_address = $request->present_address;
        $new->permanent_address = $request->permanent_address;
        $new->phone = $request->phone;
        $new->inst_name = $request->inst_name;
        $new->passing_year = $request->passing_year;
        $new->inst_type = $request->inst_type;
        $new->ssc_school = $request->ssc_school;
        $new->ssc_board = $request->ssc_board;
        $new->ssc_passing_year = $request->ssc_year;
        $new->district = $request->district;
        $new->reference = $request->reference;
        $new->image = $request->image;

        if ($new->save()) {
            return redirect('index');
        } else {
            return back();
        }
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
