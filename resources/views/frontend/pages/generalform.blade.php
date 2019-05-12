@extends('frontend.theme.master')

@section('title','Central Form')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/locale/bn.js">
@endsection

@section('content')

    <div class="container p-4">



    <h2 class="text-black">কেন্দ্রীয় কমিটি ফরম</h2>

    <form action="{{ route('frontend.generalMember.store') }}" method="post" style="font-size: 120%;">
        @csrf
        <div class="row">
            <div class="col-8">
                <div class="form-group">
                    <label>নাম</label>
                    <input type="text" class="form-control" placeholder="" name="name">
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-6">
                <div class="form-group">
                    <label>পিতার নাম</label>
                    <input type="text" class="form-control" name="father_name">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label>মাতার নাম</label>
                    <input type="text" class="form-control" name="mother_name">
                </div>
            </div>

            <div class="col-6">
                <div class="form-group">
                    <label>জন্ম তারিখ</label>
                    <input type="date" class="form-control" name="dob" class="datepicker">
                </div>
            </div>

            <div class="col-6">
                <div class="form-group">
                    <label>জাতীয় পরিচয়পত্র নম্বর</label>
                    <input type="text" class="form-control" name="nid" >
                </div>
            </div>


            <div class="col-6">
                <div class="form-group">
                    <label>লিঙ্গ</label>
                    <select name="gender" class="form-control">
                        <option value="পুরুষ">পুরুষ</option>
                        <option value="মহিলা">মহিলা</option>
                        <option value="অন্যান্য">অন্যান্য</option>
                    </select>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label>ই-মেইল</label>
                    <input type="email" class="form-control" name="email" >
                </div>
            </div>



            <div class="col-6">
                <div class="form-group">
                    <label>বর্তমান ঠিকানা</label>
                    <textarea class="form-control"  name="present_address"></textarea>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label>স্থায়ী ঠিকানা</label>
                    <textarea class="form-control" name="permanent_address" ></textarea>
                </div>
            </div>

            <div class="col-6">
                <div class="form-group">
                    <label>ফোন নাম্বার</label>
                    <input type="text" class="form-control" name="phone" >
                </div>
            </div>
            <div class="col-6">
            </div>
            <div class="clearfix"></div>

            <div class="col-6">
                <div class="form-group">
                    <label>পলিটেকনিক এর নাম</label>
                    <input type="text" class="form-control" name="inst_name" >
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label>পাশের সাল</label>
                    <input type="date" class="form-control" name="passing_year" class="datepicker">
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label>পলিটেকনিক এর ধরন</label> <br>
                    <input type="radio" class="form-check-radio"  name="inst_type" value="সরকারি"> সরকারি
                    <input type="radio" class="form-check-radio"  name="inst_type" value="বেসরকারি"> বেসরকারি
                </div>
            </div>


            <div class="col-12">
                <label class="active">এসএসসি</label>
                <table class="table">
                    <tr>
                        <th> স্কুলের এর নাম</th>
                        <th> বোর্ড এর নাম</th>
                        <th> পাশের সাল </th>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" class="form-control" name="ssc_school"  >
                        </td>
                        <td>
                            <input type="text" class="form-control" name="ssc_board" >
                        </td>
                        <td>
                            <input type="date" class="form-control" name="ssc_year" >
                        </td>
                    </tr>
                </table>
            </div>

            <div class="col-6">

            </div>

            <div class="clearfix"></div>
            <hr>
            <div class="col-6">
                <div class="form-group">
                    <label>জেলা এর নাম</label>

                    <select class="form-control" name="district" required>
                        <option value="" disabled selected>নির্বাচন করুন</option>
                        <optgroup label="ঢাকা">
                        <option value="ঢাকা">ঢাকা</option><option value="ফরিদপুর">ফরিদপুর</option>
                        <option value="গাজীপুর">গাজীপুর</option><option value="গোপালগঞ্জ">গোপালগঞ্জ</option><option value="জামালপুর">জামালপুর</option>
                        <option value="কিশোরগঞ্জ">কিশোরগঞ্জ</option><option value="মাদারীপুর">মাদারীপুর</option><option value="মানিকগঞ্জ">মানিকগঞ্জ</option>
                        <option value="মুন্সীগঞ্জ">মুন্সীগঞ্জ</option><option value="ময়মনসিংহ">ময়মনসিংহ</option><option value="নারায়ণগঞ্জ">নারায়ণগঞ্জ</option>
                        <option value="নরসিংদী">নরসিংদী</option><option value="নেত্রকোনা">নেত্রকোনা</option><option value="রাজবাড়ী">রাজবাড়ী</option>
                        <option value="শরিয়তপুর">শরিয়তপুর</option><option value="শেরপুর">শেরপুর</option><option value="টাঙ্গাইল">টাঙ্গাইল</option>
                        </optgroup>
                        <optgroup label="বরিশাল">
                        <option value="বরগুনা">বরগুনা</option><option value="বরিশাল">বরিশাল</option>
                        <option value="ভোলা">ভোলা</option><option value="ঝালকাঠী">ঝালকাঠী</option><option value="পটুয়াখালী">পটুয়াখালী</option>
                            <option value="পিরোজপুর">পিরোজপুর</option> </optgroup>
                        <optgroup label="চট্টগ্রাম">
                        <option value="বান্দরবান">বান্দরবান</option><option value="ব্রাহ্মণবাড়িয়া">ব্রাহ্মণবাড়িয়া</option><option value="চাঁদপুর">চাঁদপুর</option>
                        <option value="চট্টগ্রাম">চট্টগ্রাম</option><option value="কুমিল্লা">কুমিল্লা</option><option value="কক্সবাজার">কক্সবাজার</option>
                        <option value="ফেনী">ফেনী</option><option value="খাগড়াছড়ি">খাগড়াছড়ি</option><option value="লক্ষ্মীপুর">লক্ষ্মীপুর</option>
                        <option value="নোয়াখালী">নোয়াখালী</option><option value="রাঙ্গামাটি">রাঙ্গামাটি</option>
                        </optgroup>                        <optgroup label="খুলনা">
                        <option value="বাগেরহাট">বাগেরহাট</option><option value="চুয়াডাঙ্গা">চুয়াডাঙ্গা</option><option value="যশোর">যশোর</option>
                        <option value="ঝিনাইদহ">ঝিনাইদহ</option><option value="খুলনা">খুলনা</option><option value="কুষ্টিয়া">কুষ্টিয়া</option>
                        <option value="মাগুরা">মাগুরা</option><option value="মেহেরপুর">মেহেরপুর</option><option value="নড়াইল">নড়াইল</option>
                            <option value="সাতক্ষীরা">সাতক্ষীরা</option> </optgroup>
                        <optgroup label="রাজশাহী">
                        <option value="বগুড়া">বগুড়া</option><option value="জয়পুরহাট">জয়পুরহাট</option><option value="নওগাঁ">নওগাঁ</option>
                        <option value="নাটোর">নাটোর</option><option value="চাঁপাইনবাবগঞ্জ">চাঁপাইনবাবগঞ্জ</option><option value="পাবনা">পাবনা</option>
                        <option value="রাজশাহী">রাজশাহী</option><option value="সিরাজগঞ্জ">সিরাজগঞ্জ</option>
                        </optgroup>                        <optgroup label="সিলেট">
                        <option value="হবিগঞ্জ">হবিগঞ্জ</option><option value="মৌলভীবাজার">মৌলভীবাজার</option><option value="সুনামগঞ্জ">সুনামগঞ্জ</option>
                            <option value="সিলেট">সিলেট</option> </optgroup>
                        <optgroup label="রংপুর">
                        <option value="দিনাজপুর">দিনাজপুর</option><option value="গাইবান্ধা">গাইবান্ধা</option><option value="কুড়িগ্রাম">কুড়িগ্রাম</option>
                        <option value="লালমনিরহাট">লালমনিরহাট</option><option value="নীলফামারী">নীলফামারী</option><option value="পঞ্চগড়">পঞ্চগড়</option>
                            <option value="রংপুর">রংপুর</option><option value="ঠাকুরগাঁও">ঠাকুরগাঁও</option> </optgroup>

                    </select>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label>Use Bkash Reference  </label>
                    <input type="text" value="{{ $reference }}" name="nosto" class="form-control text-white" disabled >
                    <input type="hidden" value="{{ $reference }}" name="reference" >
                </div>
                </div>
            <div class="clearfix"></div>

            <div class="col-6">
                <div class="form-control-file">
                    <label for="">Image</label>
                    <input type="file" name="image" id="imgInp" class="img-rounded form-control form-file" placeholder="photo" required>
                </div>
            </div>
            <div class="col-6">
                <div class="form-control-file">
                    <img id="blah" src="#" alt="No Image selected" width=120 height=120 /> <br>
                </div>
            </div>
            <div class="col-6">
                <div class="form-control-file">
                    <label for="">Signature Form</label>
                    <input type="file" name="signature_form" class="form-control form-file" placeholder="Signature Form" required>
                </div>
            </div>
            <div class="col-6">
                <div class="form-control-file">
                    <label for="">NID / Birth Certificate</label>
                    <input type="file" name="nid_certificate" class="form-control form-file" placeholder="NID / Birth Certificate" required>
                </div>
            </div>

            <div class="col-6">
                <div class="form-control-file">
                    <label for="">Diploma Certificate</label>
                    <input type="file" name="ssc_certificate" class="form-control form-file" placeholder="Diploma Certificate" required>
                </div>
            </div>

            <div class="col-12 text-center pt-2">
                    <button  class="btn btn-success"  >Submit</button>
            </div>

            </div>





    </form>


    </div>


@endsection

@push('script')
        <script>
        function readURL(input) {

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#blah').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#imgInp").change(function() {
            readURL(this);
        });
    </script>
@endpush
