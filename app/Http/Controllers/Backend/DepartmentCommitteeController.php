<?php

namespace App\Http\Controllers\Backend;

use App\DepartmentCommittee;
use App\Designation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class DepartmentCommitteeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $committe = DepartmentCommittee::all();

        return view('backend.pages.department.list')->with([
            'committees' => $committe
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
        $designation = Designation::all();
        return view('backend.pages.department.add')->with([
            'designations' =>    $designation
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $centralPhoto = null;
        $centralPhoto_upload = $request->file('centralPhoto');

        if (isset($centralPhoto_upload)) {
            if ($centralPhoto_upload->isValid()) {
                $file_name =
                    uniqid('department_committee_', true) . str_random(5) . '.' . $centralPhoto_upload->getClientOriginalExtension();
                $centralPhoto = $centralPhoto_upload->storeAs('department-committee', $file_name);
            }

        }


        $user = new DepartmentCommittee();
        $user->name = $request->centralName;
        $user->designation = $request->centralDesignation;
        $user->department = $request->department;
        $user->details = $request->centralDetails;
        $user->email = $request->centralEmail;
        $user->mobile = $request->centralMobile;
        $user->image = $centralPhoto;

        $user->save();

        return redirect()->route('backend.department-committee.list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $central = DepartmentCommittee::where('id',$id)->firstOrFail();
        return view('backend.pages.department.edit')->with([
            'central' => $central
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $user = DepartmentCommittee::find($request->id);
        $user->name = $request->centralName;
        $user->department = $request->department;
        $user->designation = $request->centralDesignation;
        $user->details = $request->centralDetails;
        $user->email = $request->centralEmail;
        $user->mobile = $request->centralMobile;

        if($request->centralPhoto){

            $file_upload = $request->file('centralPhoto');

            if (isset($file_upload)) {
                if ($file_upload->isValid()) {
                    $file_name =
                        uniqid('department_committee_', true) . str_random(5) . '.' . $file_upload->getClientOriginalExtension();
                    $file = $file_upload->storeAs('department-committee', $file_name);
                }

            }
            Storage::delete( $user->photo );

            $user->image = $file;
        }

        $user->save();
        return redirect()->route('backend.department-committee.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        DepartmentCommittee::find($id)->delete();
        return redirect()->route('backend.department-committee.list');
    }
}
