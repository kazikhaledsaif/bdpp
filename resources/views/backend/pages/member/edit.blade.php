@extends('backend.layouts.app')
@section('title' , 'General Member Edit')


@push("css")

    <style>
        .form-control-file {
            width: 85%;
        }
    </style>


@endpush
@section('content')

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                General Member info
                <small>{{ $member->name }} </small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{ route('backend.dashboard') }}"><i class="fa fa-dashboard"></i> Admin</a></li>
                <li><a href=" {{ route('backend.notice.list') }}"><i class="fa fa-shopping-cart"></i> General Member</a></li>
                <li class="active">Edit General Member</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">

            <div class="product">
                <!-- Horizontal Form -->
                <div class="box box-info">
                    <!-- form start -->

                    <form class="form-horizontal" action="{{ route('backend.general-member.update') }}" method="post" style="font-size: 120%;"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">
                            <input type="hidden" class="form-control"  name="id" value="{{ $member->id }}" >
                            <div class="form-group">
                                <label for="inputTitle" class="col-sm-2 control-label">Name</label>

                                <div class="col-sm-10">
                                    <input type="text" value="{{ $member->name }}" class="form-control" id="inputTitle" name="name" placeholder="Name" required>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="inputTitle" class="col-sm-2 control-label">Father Name</label>

                                <div class="col-sm-10">
                                    <input type="text" value="{{ $member->father_name }}" class="form-control" id="inputTitle" name="father_name" placeholder="Name" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputTitle" class="col-sm-2 control-label">Mother Name</label>

                                <div class="col-sm-10">
                                    <input type="text" value="{{ $member->mother_name }}" class="form-control" id="inputTitle" name="mother_name" placeholder="Name" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputTitle" class="col-sm-2 control-label">Date of Birth</label>

                                <div class="col-sm-10">

                                    <input type="date" class="datepicker"  value="{{ date('Y-m-d', strtotime( $member->dob)) }}" class="form-control" id="inputTitle" name="dob" placeholder="Name" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputTitle" class="col-sm-2 control-label">NID Number</label>

                                <div class="col-sm-10">
                                    <input type="text" value="{{ $member->nid }}" class="form-control" id="inputTitle" name="nid" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputTitle" class="col-sm-2 control-label">Gender</label>

                                <div class="col-sm-10">
                                    <select  id="gender" name="gender" class="form-control">
                                        <option value="পুরুষ">পুরুষ</option>
                                        <option value="মহিলা">মহিলা</option>
                                        <option value="অন্যান্য">অন্যান্য</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputTitle" class="col-sm-2 control-label">Email</label>

                                <div class="col-sm-10">
                                    <input type="text" value="{{ $member->email }}" class="form-control" id="inputTitle" name="email" readonly>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputTitle" class="col-sm-2 control-label">Present Address</label>

                                <div class="col-sm-10">
                                    <input type="text" value="{{ $member->present_address }}" class="form-control" id="inputTitle" name="present_address" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputTitle" class="col-sm-2 control-label">Permanent Address</label>

                                <div class="col-sm-10">
                                    <input type="text" value="{{ $member->permanent_address }}" class="form-control" id="inputTitle" name="permanent_address" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputTitle" class="col-sm-2 control-label">Phone number</label>

                                <div class="col-sm-10">
                                    <input type="text" value="{{ $member->phone }}" class="form-control" id="inputTitle" name="phone" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputTitle" class="col-sm-2 control-label">District</label>

                                <div class="col-sm-10">
                                    <select  id="district" class="form-control" name="district" required>
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



                            <div class="clearfix"></div>

                            <div class="col-12">
                                <hr>
                            </div>
                            <div class="col-12">
                                <label class="active">পলিটেকনিক </label>
                                <table class="table">
                                    <tr>
                                        <th> পলিটেকনিক এর নাম*</th>
                                        <th> পাশের সাল</th>
                                        <th> পলিটেকনিক এর ধরন </th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input value="{{ $member->inst_name }}"  type="text" class="form-control" name="inst_name" required >
                                        </td>
                                        <td>
                                            <input value="{{ $member->passing_year }}"  type="date" class="form-control" name="passing_year" class="datepicker" >
                                        </td>
                                        <td>
                                            <input  type="radio" class="form-check-radio"  name="inst_type" value="সরকারি" {{ $member->inst_type == 'সরকারি' ? 'checked' : '' }}> সরকারি
                                            <input   type="radio" class="form-check-radio"  name="inst_type" value="বেসরকারি" {{ $member->inst_type == 'বেসরকারি' ? 'checked' : '' }}> বেসরকারি
                                        </td>
                                    </tr>
                                </table>
                            </div>


                            <div class="clearfix"></div>

                            <div class="col-12">
                                <hr>
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
                                            <input  value="{{ $member->ssc_school }}"  type="text" class="form-control" name="ssc_school"  >
                                        </td>
                                        <td>
                                            <input  value="{{ $member->ssc_board }}"  type="text" class="form-control" name="ssc_board" >
                                        </td>
                                        <td>
                                            <input  value="{{ $member->ssc_passing_year }}"   type="date" class="form-control" name="ssc_year" >
                                        </td>
                                    </tr>
                                </table>
                            </div>

                            <div class="clearfix"></div>

                            <div class="col-12">
                                <hr>
                            </div>

                            <div class="form-group">
                                <label for="inputTitle" class="col-sm-2 control-label">Bkash Reference number</label>

                                <div class="col-sm-10">
                                    <input type="text" value="{{ $member->reference }}" class="form-control" id="inputTitle" name="reference" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputTitle" class="col-sm-2 control-label">Bkash Transaction Number</label>

                                <div class="col-sm-10">
                                    <input type="text" value="{{ $member->payment_txid }}" class="form-control" id="inputTitle" name="bkashTxId" required>
                                </div>
                            </div>


                            <div class="clearfix"></div>
 <div class="container">
     <div class="col-6">
         <div class="form-control-file">
             <label for="">Image</label>
             <input type="file" name="image" id="imgInp" class="img-rounded form-control form-file" placeholder="photo" >
         </div>
     </div>
     <div class="col-6">
         <div class="form-control-file">
             <img id="blah" src="{{ asset("uploads/".$member->image) }}"  width=120 height=120 /> <br>
         </div>
     </div>
     <div class="col-6">
         <div class="form-control-file">
             <label for="">Signature Form</label>
             <input type="file" name="signature_form" class="form-control form-file" placeholder="Signature Form" >
         </div>
     </div>
     <div class="col-6">
         <div class="form-control-file">
             <a target="_blank" href="{{ asset("uploads/".$member->signature) }}">Click to see</a><br>
         </div>
     </div>
     <div class="col-6">
         <div class="form-control-file">
             <label for="">NID / Birth Certificate</label>
             <input type="file" name="nid_certificate" class="form-control form-file" placeholder="NID / Birth Certificate" >
         </div>
     </div>
     <div class="col-6">
         <div class="form-control-file">
             <a target="_blank" href="{{ asset("uploads/".$member->birthcert) }}">Click to see</a><br>
         </div>
     </div>
     <div class="col-6">
         <div class="form-control-file">
             <label for="">Diploma Certificate</label>
             <input type="file" name="ssc_certificate" class="form-control form-file" placeholder="Diploma Certificate" >
         </div>
     </div>
     <div class="col-6">
         <div class="form-control-file">
             <a target="_blank" href="{{ asset("uploads/".$member->diplomacert) }}">Click to see</a><br>
         </div>
     </div>
     <div class="col-12 text-center mt-4 pt-5" style="margin-top: 20px">
         <button  class="btn btn-success" >Submit</button>
     </div>
 </div>
                        </div>
                    </form>
                </div>
                <!-- /.box -->
            </div>
        </section>
        <!-- /.content -->

    @endsection

@section('script')
    <script>

        $(document).ready(function() {
            const genderOldValue = '{{ $member->gender }}';

            if(genderOldValue !== '') {
                $('#gender').val(genderOldValue);
            }
        });


        $(document).ready(function() {
            const genderOldValue = '{{ $member->district }}';

            if(genderOldValue !== '') {
                $('#district').val(genderOldValue);
            }
        });


    </script>
@endsection
