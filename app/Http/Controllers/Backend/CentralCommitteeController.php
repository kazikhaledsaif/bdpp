<?php

namespace App\Http\Controllers\Backend;

use App\CentralCommitte;
use App\Designation;
use App\GeneralMember;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class CentralCommitteeController extends Controller
{

    public function index()
    {
       // $designation = Designation::all();
        $committe = CentralCommitte::all();

        return view('backend.pages.central.list')->with([
            'committees' => $committe
        ]);
    }


    public function create()
    {
        $designation = Designation::all();
        return view('backend.pages.central.add')->with([
            'designations' =>    $designation
        ]);
    }


    public function store(Request $request) {

         $centralPhoto = null;
        $centralPhoto_upload = $request->file('centralPhoto');

        if (isset($centralPhoto_upload)) {
            if ($centralPhoto_upload->isValid()) {
                $file_name =
                    uniqid('central_committee_', true) . str_random(5) . '.' . $centralPhoto_upload->getClientOriginalExtension();
                $centralPhoto = $centralPhoto_upload->storeAs('central-committee', $file_name);
            }

        }


        $user = new CentralCommitte();
        $user->name = $request->centralName;
        $user->designation = $request->centralDesignation;
        $user->details = $request->centralDetails;
        $user->email = $request->centralEmail;
        $user->mobile = $request->centralMobile;
        $user->image = $centralPhoto;

        $user->save();

        return redirect()->route('backend.central-committee.list');
    }


    public function show($id)
    {
        //
        $central = CentralCommitte::where('id',$id)->firstOrFail();
        return view('backend.pages.central.edit')->with([
            'central' => $central
        ]);
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request)
    {


        $user = CentralCommitte::find($request->id);
        $user->name = $request->centralName;
        $user->designation = $request->centralDesignation;
        $user->details = $request->centralDetails;
        $user->email = $request->centralEmail;
        $user->mobile = $request->centralMobile;

        if($request->centralPhoto){

            $file_upload = $request->file('centralPhoto');

            if (isset($file_upload)) {
                if ($file_upload->isValid()) {
                    $file_name =
                        uniqid('central_committee_', true) . str_random(5) . '.' . $file_upload->getClientOriginalExtension();
                    $file = $file_upload->storeAs('central-committee', $file_name);
                }

            }
            Storage::delete( $user->photo );

            $user->image = $file;
        }

        $user->save();
        return redirect()->route('backend.central-committee.list');

    }


    public function destroy($id)
    {

        CentralCommitte::find($id)->delete();
        return redirect()->route('backend.central-committee.list');
    }
}
