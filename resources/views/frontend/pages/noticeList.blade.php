@extends('frontend.theme.master')

@section('title','Notice Board')

@section('content')

    <div class="container about-story mt-4 mb-4">
        <div class="row">

            <div class="col-lg-8">

                <h1 class="text-black">Notice</h1>

                <!-- Title -->
                <ol>
                        @foreach($notices as $notice)
                    <h3 class="mt-1 mb-0 text-black"><a href="#">{{ $notice->title }}</a></h3>
                    <h6 class="text-black">Posted on {{ date("d-m-Y", strtotime( $notice->updated_at))}}</h6>
                    <hr>
                        @endforeach
                </ol>




                <hr>

            </div>

        </div>

    </div>

@endsection