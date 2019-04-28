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
                <h5 class="display-4 text-green"> আমাদের সম্পর্কে </h5>
                <p> মুক্তিযুদ্ধের চেতনা, বাঙালি জাতীয়তাবাদ ও অসাম্প্রদায়িকতায় বিশ্বাসী ডিপ্লোমা প্রকৌশলীগণ নিজেদের অধিকার রক্ষায় ও জনগণের কল্যাণে এবং সমাজের প্রতি নিজেদের দায়বদ্ধতার কথা বিবেচনা করিয়া দেশের সকল পেশাজীবী ডিপ্লোমা প্রকৌশলী ও ডিপ্লোমা ইঞ্জিনিয়ারিং কোর্সে অধ্যয়নরত ছাত্র-ছাত্রী সমন্বয়ে স্বাধীন বাংলাদেশের স্থপতি জাতির জনক বঙ্গবন্ধু শেখ মুজিবুর রহমানের নামের সঙ্গে সঙ্গতি রাখিয়া “বঙ্গবন্ধু ডিপ্লোমা প্রকৌশলী পরিষদ” নামে সংগঠনের নামকরণের সিদ্ধান্ত গ্রহণ করা হয়। ইহা একটি অরাজনৈতিক সামাজিক ও গবেষণাধর্মী সংগঠন হিসেবে পরিচালিত হইবে। </p>
            </div>
        </div>

    </div>


    <div class="container  p-4">
        <div class="row chairman">
            <div class="col-md-4  ">
                <div class="row">
                    <div class="col">
                        <h3 class="">প্রতিষ্ঠাতা</h3>
                    </div>
                </div>
                <div class="row pb-3">
                    <div class="col-md-5 align-content-center">
                        <img src="{{ asset('frontend/img/ryan.jpg') }} " alt="Raised circle image"
                             class="img-fluid rounded shadow-lg" style="width: 200px;">
                    </div>

                    <div class="col-md-7 text-black ">
                        <h3>মুজিবুর রহমান</h3>
                        <h4>প্রকৌশলী </h4>
                        <h5>সামাজিক সংগঠন</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="typography-line">

                    <blockquote class="qoutes">
                        <p class="blockquote blockquote-secondary">
                            "সংসদ সদস্য, সিটি কর্পোরেশনের মেয়র, ডেপুটি মেয়র ও কাউন্সিলরগণ, গেজেটেড কর্মকর্তা, পাবলিক বিশ্ববিদ্যালয়ের শিক্ষক, উপজেলা পরিষদের চেয়ারম্যান ও ভাইস চেয়ারম্যান, পৌরসভার মেয়র ও পৌর কাউন্সিলরগণ"
                            <br>
                            <br>
                            <small>
                                - মুজিবুর রহমান
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

                <h3 class="text-black">নোটিশ বোর্ড:</h3>

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
                        <h4 class="">Important Links</h4>
                    </div>
                </div>

                <div class="row pb-3">
                    <ul>
                        <li><a href="#">জেলা কমিটি ফরম</a> </li>
                        <li><a href="#">কেন্দ্রীয় কমিটি ফরম</a> </li>
                        <li><a href="#">ডিপার্টমেন্টাল কমিটি</a> </li>

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


