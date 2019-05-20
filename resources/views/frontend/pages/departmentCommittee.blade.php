@extends('frontend.theme.master')

@section('title','Division Committee List')

@section('content')

    <div class="container mt-5">

        <h2 class="text-black text-center mb-3">{{$name}} কমিটি</h2>


        <div class="container-fluid">

            @foreach($keys as $key)
                <div class="row">
                    <div class="col-12 mt-3">
                        <div class="card p-3 bg-transparent">
                            <div class="card-horizontal">
                                <div class="img-square-wrapper">
                                    <img class="" src="{{ asset('uploads/'.$key->image) }}" width="240" height="180" alt="Card image cap">
                                </div>
                                <div class="card-body pt-0">
                                    <h3 class="card-title mb-0">{{$key->name}}</h3>
                                    <h5 class="card-title">{{$key->details}}</h5>
                                    <h4 class="card-title">{{$key->designation->title}}</h4>

                                    <p class="card-text">মোবাইল: {{$key->mobile}}</p>
                                    <p class="card-text">ই-মেইল: {{$key->email}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach



        </div>


    </div>


@endsection