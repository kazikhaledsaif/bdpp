@extends('frontend.theme.master')

@section('title','Central Form')

@section('content')

    <div class="container">



    <h2 class="text-black">কেন্দ্রীয় কমিটি ফরম</h2>

    <form action="#" method="post" style="font-size: 120%;">
        @csrf
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label>নাম</label>
                    <input type="text" class="form-control" placeholder="Mike">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label>Your Name</label>
                    <input type="text" class="form-control" value="Mike">
                </div>
            </div>
        </div>



    </form>


    </div>


@endsection