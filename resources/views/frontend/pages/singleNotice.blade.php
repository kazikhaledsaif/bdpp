@extends('frontend.theme.master')

@foreach($notice as $notice)
@endforeach

@section('title', $notice->title )

@section('content')

    <div class="container about-story mt-4 mb-4">
        <div class="row">

            <div class="col-lg-10">

                <!-- Title -->
                <h1 class="mt-3 mb-0 text-black">{{ $notice->title }}</h1>

                <hr>
                <!-- Date/Time -->
                <p>Posted on {{ $notice->updated_at }}</p>
                <hr>


                <!-- Post Content -->
                <p class="lead">
                    {!! $notice->description  !!}
                </p>

                <hr>
                <p class="lead">
                    Attachment File: <a href="{{ asset("uploads/".$notice->file)  }}"> Download </a>
                </p>

            </div>

        </div>

    </div>

@endsection