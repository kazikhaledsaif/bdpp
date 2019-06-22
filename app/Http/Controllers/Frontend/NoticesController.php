<?php

namespace App\Http\Controllers\Frontend;

use App\Notice;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NoticesController extends Controller
{

    public function index() {

        $notices = Notice::orderBy('created_at', 'desc')->paginate(30);

        return view('frontend.pages.noticeList')->with([
            'notices' => $notices
        ]);
    }

    public function show($id)
    {
        $notice = Notice::find($id)->get();

        return view('frontend.pages.singleNotice')->with([
            'notice' => $notice
        ]);
    }




}
