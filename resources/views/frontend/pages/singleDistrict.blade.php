@extends('frontend.theme.master')

@section('title','District Committee')

@section('content')

    <div class="container-fluid">

        <h2 class="text-center text-green p-3">জেলা কমিটি </h2>

        <div class="row">
            <div class="col-12 mt-3">
                <div class="card p-3 bg-transparent">
                    <div class="card-horizontal">
                        <div class="img-square-wrapper">
                            <img class="" src="{{ asset('frontend/img/user.jpg') }}" width="240" height="180" alt="Card image cap">
                        </div>
                        <div class="card-body pt-0">
                            <h3 class="card-title mb-0">বীর মুক্তিযোদ্ধা মোঃ খবির হোসেন</h3>
                            <h5 class="card-title">প্রতিষ্ঠাতা সভাপতি, বঙ্গবন্ধু ডিপ্লোমা প্রকৌশলী পরিষদ, সাবে
                                সভাপতি সহ-সভাপতি, মতিঝিল থানা আওয়ামী লীগ ও সভাপতি, আইডিইবি ঢাকা জেলা</h5>
                            <h4 class="card-title">সভাপতি</h4>
                            <p class="card-text"></p>
                            <p class="card-text">মোবাইল: +880 1732 342404</p>
                            <p class="card-text">ই-মেইল: idebdhakadist.2002@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection