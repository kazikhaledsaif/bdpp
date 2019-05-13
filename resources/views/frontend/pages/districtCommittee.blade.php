@extends('frontend.theme.master')

@section('title','District Committee')

@section('content')

    <div class="container mt-5">

        <h2 class="text-black text-center mb-3">জেলা কমিটি</h2>


        <div class="container district-container">

            <ul class="list-group box-shadow">

                <a data-toggle="collapse" href="#collapseDhaka" role="button" aria-expanded="false" aria-controls="collapseDhaka"
                        class="list-group-item text-green text-center" >ঢাকা</a>
                <div class="collapse" id="collapseDhaka">
                    <a href="{{ route('frontend.districtCommittee.show',['id' => 'dhaka']) }}" class="list-group-item">ঢাকা</a>
                    <a href="#" class="list-group-item">ফরিদপুর</a>
                    <a href="#" class="list-group-item">গোপালগঞ্জ</a>
                    <a href="#" class="list-group-item">জামালপুর</a>
                    <a href="#" class="list-group-item">কিশোরগঞ্জ</a>
                    <a href="#" class="list-group-item">মাদারীপুর</a>
                    <a href="#" class="list-group-item">মানিকগঞ্জ</a>
                    <a href="#" class="list-group-item">মুন্সীগঞ্জ</a>
                    <a href="#" class="list-group-item">ময়মনসিংহ</a>
                    <a href="#" class="list-group-item">নারায়ণগঞ্জ</a>
                    <a href="#" class="list-group-item">নরসিংদী</a>
                    <a href="#" class="list-group-item">নেত্রকোনা</a>
                    <a href="#" class="list-group-item">রাজবাড়ী</a>
                    <a href="#" class="list-group-item">শরিয়তপুর</a>
                    <a href="#" class="list-group-item">শেরপুর</a>
                    <a href="#" class="list-group-item">টাঙ্গাইল</a>
                </div>

                <a data-toggle="collapse" href="#collapseBarishal" role="button" aria-expanded="false" aria-controls="collapseDhaka"
                        class="list-group-item text-green text-center" >বরিশাল</a>
                <div class="collapse" id="collapseBarishal">
                    <a href="#" class="list-group-item">বরিশাল</a>
                    <a href="#" class="list-group-item">বরগুনা</a>
                    <a href="#" class="list-group-item">ভোলা</a>
                    <a href="#" class="list-group-item">ঝালকাঠী</a>
                    <a href="#" class="list-group-item">পটুয়াখালী</a>
                    <a href="#" class="list-group-item">পিরোজপুর</a>
                </div>

                <a data-toggle="collapse" href="#collapseCtg" role="button" aria-expanded="false" aria-controls="collapseDhaka"
                        class="list-group-item text-green text-center" >চট্টগ্রাম</a>
                <div class="collapse" id="collapseCtg">
                    <a href="#" class="list-group-item">চট্টগ্রাম</a>
                    <a href="#" class="list-group-item">বান্দরবান</a>
                    <a href="#" class="list-group-item">ব্রাহ্মণবাড়িয়া</a>
                    <a href="#" class="list-group-item">চাঁদপুর</a>
                    <a href="#" class="list-group-item">কুমিল্লা</a>
                    <a href="#" class="list-group-item">কক্সবাজার</a>
                    <a href="#" class="list-group-item">ফেনী</a>
                    <a href="#" class="list-group-item">খাগড়াছড়ি</a>
                    <a href="#" class="list-group-item">লক্ষ্মীপুর</a>
                    <a href="#" class="list-group-item">নোয়াখালী</a>
                    <a href="#" class="list-group-item">রাঙ্গামাটি</a>
                </div>

                <a data-toggle="collapse" href="#collapseKhulna" role="button" aria-expanded="false" aria-controls="collapseDhaka"
                        class="list-group-item text-green text-center" >খুলনা</a>
                <div class="collapse" id="collapseKhulna">
                    <a href="#" class="list-group-item">খুলনা</a>
                    <a href="#" class="list-group-item">বাগেরহাট</a>
                    <a href="#" class="list-group-item">চুয়াডাঙ্গা</a>
                    <a href="#" class="list-group-item">যশোর</a>
                    <a href="#" class="list-group-item">ঝিনাইদহ</a>
                    <a href="#" class="list-group-item">খুলনা</a>
                    <a href="#" class="list-group-item">কুষ্টিয়া</a>
                    <a href="#" class="list-group-item">মাগুরা</a>
                    <a href="#" class="list-group-item">মেহেরপুর</a>
                    <a href="#" class="list-group-item">নড়াইল</a>
                    <a href="#" class="list-group-item">সাতক্ষীরা</a>
                </div>


                <a data-toggle="collapse" href="#collapseRajshahi" role="button" aria-expanded="false" aria-controls="collapseDhaka"
                        class="list-group-item text-green text-center" >রাজশাহী</a>
                <div class="collapse" id="collapseRajshahi">
                    <a href="#" class="list-group-item">বগুড়া</a>
                    <a href="#" class="list-group-item">জয়পুরহাট</a>
                    <a href="#" class="list-group-item">নওগাঁ</a>
                    <a href="#" class="list-group-item">নাটোর</a>
                    <a href="#" class="list-group-item">চাঁপাইনবাবগঞ্জ</a>
                    <a href="#" class="list-group-item">পাবনা</a>
                    <a href="#" class="list-group-item">রাজশাহী</a>
                    <a href="#" class="list-group-item">সিরাজগঞ্জ</a>
                </div>

                <a data-toggle="collapse" href="#collapseSylhet" role="button" aria-expanded="false" aria-controls="collapseDhaka"
                        class="list-group-item text-green text-center" >সিলেট</a>
                <div class="collapse" id="collapseSylhet">
                    <a href="#" class="list-group-item">হবিগঞ্জ</a>
                    <a href="#" class="list-group-item">মৌলভীবাজার</a>
                    <a href="#" class="list-group-item">সুনামগঞ্জ</a>
                    <a href="#" class="list-group-item">সিলেট</a>
                </div>

                <a data-toggle="collapse" href="#collapseRangpur" role="button" aria-expanded="false" aria-controls="collapseDhaka"
                        class="list-group-item text-green text-center" >রংপুর</a>
                <div class="collapse" id="collapseRangpur">
                    <a href="#" class="list-group-item">দিনাজপুর</a>
                    <a href="#" class="list-group-item">গাইবান্ধা</a>
                    <a href="#" class="list-group-item">কুড়িগ্রাম</a>
                    <a href="#" class="list-group-item">লালমনিরহাট</a>
                    <a href="#" class="list-group-item">নীলফামারী</a>
                    <a href="#" class="list-group-item">পঞ্চগড়</a>
                    <a href="#" class="list-group-item">রংপুর</a>
                    <a href="#" class="list-group-item">ঠাকুরগাঁও</a>
                </div>

            </ul>

        </div>

    </div>

@endsection