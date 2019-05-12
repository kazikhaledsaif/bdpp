<?php

namespace App\Http\Controllers\Backend;

use App\Notice;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $notice_list = Notice::all();

        return view('backend.pages.notice.list')->with([
                'notices' => $notice_list
        ]);

    }

    public function check_slug(Request $request)
    {
        // New version: to generate unique slugs
        $slug = SlugService::createSlug(Notice::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('backend.pages.notice.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $noticeFile = "";
        $noticefile_upload = $request->file('noticeFile');

        if (isset($noticefile_upload)) {
            if ($noticefile_upload->isValid()) {
                $file_name =
                    uniqid('notice_', true) . str_random(5) . '.' . $noticefile_upload->getClientOriginalExtension();
                $noticeFile = $noticefile_upload->storeAs('notice', $file_name);
            }

        }


        $notice = new Notice();
        $notice->title = $request->noticeTitle;
        $notice->description = $request->noticeDescription;
        $notice->file = $noticeFile;
        $notice->save();
        return redirect()->route('backend.notice.list');
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

        $notice = Notice::where('id',$id)->firstOrFail();


        return view('backend.pages.notice.edit')->with([
            'notice' => $notice
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
        $notice = Notice::find($request->id);

        $notice->title = $request->noticeTitle;
        $notice->description = $request->noticeDescription;

        if($request->noticeFile){
            $noticefile_upload = $request->file('noticeFile');

            if (isset($noticefile_upload)) {
                if ($noticefile_upload->isValid()) {
                    $file_name =
                        uniqid('notice_', true) . str_random(5) . '.' . $noticefile_upload->getClientOriginalExtension();
                    $noticeFile = $noticefile_upload->storeAs('notice', $file_name);
                }

            }
            Storage::delete( $notice->file);

            $notice->file = $noticeFile;
        }

        $notice->save();
        return redirect()->route('backend.notice.list');

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
        Notice::find($id)->delete();
        return redirect()->route('backend.notice.list');
    }
}
