<?php

namespace App\Http\Controllers\Frontend;

use App\CentralCommitte;
use App\Designation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CentralCommitteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = base_convert(time(), 10, 36);
        $designation = Designation::all();

        return view('frontend.pages.generalform')->with([
            'designation' => $designation,
            'reference' => $id,
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
