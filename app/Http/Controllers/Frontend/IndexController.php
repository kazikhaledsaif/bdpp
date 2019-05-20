<?php

namespace App\Http\Controllers\Frontend;

use App\Notice;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notice = Notice::orderBy('created_at', 'desc')->take(6)->get();
        return view('frontend.pages.home')->with([
            'keys' => $notice
        ]);
    }

    public function dashboard(){

        return view('frontend.pages.dashboard');

    }

}
