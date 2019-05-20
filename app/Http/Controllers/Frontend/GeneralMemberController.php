<?php

namespace App\Http\Controllers\Frontend;

use App\CentralCommitte;
use App\GeneralMember;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GeneralMemberController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');



    }
    public function pdf($id) {
        $member = GeneralMember::find($id);

//        dd($member);

        $pdf = PDF::loadView('frontend.pages.idCard', [
            'member' => $member,
        ]);

        return $pdf->stream('invoice.pdf');
    }

    public function index()
    {
        $committee = GeneralMember::where('userId', auth()->user()->id)->get();

        if($committee->isNotEmpty()) {

            return redirect()->route('frontend.dashboard');
        }

        $id = base_convert(time(), 10, 36);



        return view('frontend.pages.generalform')->with([
            'reference' => $id,
        ]);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //image
        $photo = null;
        $photo_upload = $request->file('image');

        if (isset($photo_upload)) {
            if ($photo_upload->isValid()) {
                $uniqid = "member_image".auth()->user()->id."-";
                    $file_name =
                        uniqid($uniqid, true) . str_random(5) . '.' . $photo_upload->getClientOriginalExtension();
                $photo = $photo_upload->storeAs('files', $file_name);
            }
        }


        //signature
        $signature = null;
        $signature_upload = $request->file('signature_form');

        if (isset($signature_upload)) {
            if ($signature_upload->isValid()) {
                $uniqid = "member_signature".auth()->user()->id."-";
                $file_name =
                    uniqid($uniqid, true) . str_random(5) . '.' . $signature_upload->getClientOriginalExtension();
                $signature = $signature_upload->storeAs('files', $file_name);
            }
        }


        //birth
        $birth = null;
        $birth_upload = $request->file('nid_certificate');

        if (isset($birth_upload)) {
            if ($birth_upload->isValid()) {
                $uniqid = "member_birthcft-".auth()->user()->id."-";
                $file_name =
                    uniqid($uniqid, true) . str_random(5) . '.' . $birth_upload->getClientOriginalExtension();
                $birth = $birth_upload->storeAs('files', $file_name);
            }
        }
        //diploma
        $diploma  = null;
        $diploma_upload = $request->file('ssc_certificate');

        if (isset($diploma_upload)) {
            if ($diploma_upload->isValid()) {
                $uniqid = "member_diplomacft-".auth()->user()->id."-";
                $file_name =
                    uniqid($uniqid, true) . str_random(5) . '.' . $diploma_upload->getClientOriginalExtension();
                $diploma = $diploma_upload->storeAs('files', $file_name);
            }
        }






            $new = new GeneralMember();
        $new->name = $request->name;
        $new->userId = $request->userId;
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
        $new->image =$photo;
        $new->signature =$signature;
        $new->diplomacert =$birth;
        $new->birthcert =$diploma;

        if ($new->save()) {
            return redirect()->route('frontend.dashboard');
        } else {
            return back();
        }
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
