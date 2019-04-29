@extends('frontend.theme.master')

@section('title', '')

@section('content')


    <div class="container about-story mt-4 mb-4">

        <div class="row">
            <div class="col-3">
                <img src="{{ asset('frontend/img/bangabandhu.jpg') }}" alt="Raised circle image"
                     class="img-fluid rounded shadow-lg"  >
            </div>
            <div class="col-9">
                <h5 class="display-4 text-green"> {{ __('home.about_us') }} </h5>
                <p>
                    {{ __('home.about_detail') }}
                </p>
            </div>
        </div>

    </div>


    <div class="container  p-4">
        <div class="row chairman">
            <div class="col-md-5  ">
                <div class="row">
                    <div class="col">
                        <h3 class="">{{ __('home.profile') }}</h3>
                    </div>
                </div>
                <div class="row pb-3">
                    <div class="col-md-5 align-content-center">
                        <img src="{{ asset('frontend/img/bangabandhu.jpg') }} " alt="Raised circle image"
                             class="img-fluid rounded shadow-lg" style="width: 200px;">
                    </div>

                    <div class="col-md-7 text-black ">
                        <h3>{{ __('home.pname') }}</h3>
                        <h4> {{ __('home.ptitle') }} </h4>
                        <h5> {{ __('home.pthird') }}</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="typography-line">

                    <blockquote class="qoutes">
                        <p class="blockquote blockquote-secondary">
                            "{{ __('home.qoute') }}"
                            <br>
                            <br>
                            <small>
                                - {{ __('home.pname') }}
                            </small>
                        </p>
                    </blockquote>
                </div>
            </div>

        </div>
    </div>

    <div class="container front-notice">
        <div class="row notice-board  ">

            <div class="col-md-9 p-3">

                <h3 class="text-black">{{ __('home.notice') }}:</h3>

                <ul>
                    <li><a href="#">Notice 1</a></li>
                    <li><a href="#">মুক্তিযুদ্ধের চেতনা, বাঙালি জাতীয়তাবাদ</a></li>
                    <li><a href="#">সেসিপ-এর আওতায় ধারাবাহিক মূল্যায়ন বিষয়ক মাস্টার ট্রেইনার প্রশিক্ষণে অংশগ্রহণে প্রসঙ্গ...</a></li>
                    <li><a href="#">মাঠ পর্যায়ের সকল অফিসসমূহে সিটিজেন চার্টার প্রণয়ন ও এর অগ্রগতি প্রতিবেদন প্রেরণ সংক্র</a></li>
                    <li><a href="#">মুক্তিযুদ্ধের চেতনা, বাঙালি জাতীয়তাবাদ</a></li>
                </ul>

            </div>

            <div class="col-md-3 chairman ">
                <div class="row">
                    <div class="col">
                        <h4 class="">{{ __('home.links') }}</h4>
                    </div>
                </div>

                <div class="row pb-3">
                    <ul>
                        <li><a href="#">{{ __('home.link1') }}</a> </li>
                        <li><a href="#">{{ __('home.link2') }}</a> </li>
                        <li><a href="#">{{ __('home.link3') }}</a> </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>


    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

@endsection


