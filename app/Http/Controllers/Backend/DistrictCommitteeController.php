<?php

namespace App\Http\Controllers\Backend;

use App\Designation;
use App\DistrictCommittee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class DistrictCommitteeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $designation = Designation::all();
        $committe = DistrictCommittee::all();

        return view('backend.pages.district.list')->with([
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
        return view('backend.pages.district.add')->with([
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
        //

        $districtPhoto = null;
        $districtPhoto_upload = $request->file('districtPhoto');

        if (isset($districtPhoto_upload)) {
            if ($districtPhoto_upload->isValid()) {
                $file_name =
                    uniqid('district_committee_', true) . str_random(5) . '.' . $districtPhoto_upload->getClientOriginalExtension();
                $districtPhoto = $districtPhoto_upload->storeAs('district-committee', $file_name);
            }

        }


        $user = new DistrictCommittee();
        $user->name = $request->districtName;
        $user->district = $request->district;
        $user->designation = $request->districtDesignation;
        $user->details = $request->districtDetails;
        $user->email = $request->districtEmail;
        $user->mobile = $request->districtMobile;
        $user->image = $districtPhoto;

        $user->save();

        return redirect()->route('backend.district-committee.list');
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
        $district = DistrictCommittee::where('id',$id)->firstOrFail();
        return view('backend.pages.district.edit')->with([
            'district' => $district
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

        $user = DistrictCommittee::find($request->id);
        $user->name = $request->districtName;
        $user->district = $request->district;
        $user->designation = $request->districtDesignation;
        $user->details = $request->districtDetails;
        $user->email = $request->districtEmail;
        $user->mobile = $request->districtMobile;
        if($request->districtPhoto){

            $file_upload = $request->file('districtPhoto');

            if (isset($file_upload)) {
                if ($file_upload->isValid()) {
                    $file_name =
                        uniqid('district_committee_', true) . str_random(5) . '.' . $file_upload->getClientOriginalExtension();
                    $districtPhoto = $file_upload->storeAs('district-committee', $file_name);
                }

            }
            Storage::delete( $user->photo );

            $user->image = $districtPhoto;
        }

        $user->save();
        return redirect()->route('backend.district-committee.list');

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


        DistrictCommittee::find($id)->delete();
        return redirect()->route('backend.district-committee.list');
    }
}
