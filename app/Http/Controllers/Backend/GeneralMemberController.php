<?php

namespace App\Http\Controllers\backend;

use App\GeneralMember;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class GeneralMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $member = GeneralMember::all();

        return view('backend.pages.member.list')->with([
            'members' => $member
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

        $member = GeneralMember::where('id',$id)->firstOrFail();


        return view('backend.pages.member.edit')->with([
            'member' => $member
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
        $new = GeneralMember::find($request->id);








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
        $new->payment_txid = $request->bkashTxId;

        //image

        if($request->image){

            $photo_upload = $request->file('image');

            if (isset($photo_upload)) {
                if ($photo_upload->isValid()) {
                    $uniqid = "member_image".auth()->user()->id."-";
                    $file_name =
                        uniqid($uniqid, true) . str_random(5) . '.' . $photo_upload->getClientOriginalExtension();
                    $photo = $photo_upload->storeAs('files', $file_name);
                    $new->image =$photo;
                }

            }
            Storage::delete( $new->image);
        }


        //signature
        if($request->signature_form) {
            $signature_upload = $request->file('signature_form');

            if (isset($signature_upload)) {
                if ($signature_upload->isValid()) {
                    $uniqid = "member_signature" . auth()->user()->id . "-";
                    $file_name =
                        uniqid($uniqid, true) . str_random(5) . '.' . $signature_upload->getClientOriginalExtension();
                    $signature = $signature_upload->storeAs('files', $file_name);
                    $new->signature =$signature;
                }
            }
            Storage::delete( $new->signature_form);
        }


        //birth
        if($request->nid_certificate) {
            $birth_upload = $request->file('nid_certificate');

            if (isset($birth_upload)) {
                if ($birth_upload->isValid()) {
                    $uniqid = "member_birthcft-" . auth()->user()->id . "-";
                    $file_name =
                        uniqid($uniqid, true) . str_random(5) . '.' . $birth_upload->getClientOriginalExtension();
                    $birth = $birth_upload->storeAs('files', $file_name);
                    $new->diplomacert =$birth;
                }
            }
            Storage::delete( $new->birthcert);
        }
        //diploma
        if($request->ssc_certificate) {
            $diploma_upload = $request->file('ssc_certificate');

            if (isset($diploma_upload)) {
                if ($diploma_upload->isValid()) {
                    $uniqid = "member_diplomacft-" . auth()->user()->id . "-";
                    $file_name =
                        uniqid($uniqid, true) . str_random(5) . '.' . $diploma_upload->getClientOriginalExtension();
                    $diploma = $diploma_upload->storeAs('files', $file_name);
                    $new->birthcert =$diploma;
                }
            }
            Storage::delete( $new->diplomacert);
        }


        $new->save();

        return redirect()->route('backend.general-member.list');
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
        GeneralMember::find($id)->delete();
        return redirect()->route('backend.general-member.list');
    }
}
