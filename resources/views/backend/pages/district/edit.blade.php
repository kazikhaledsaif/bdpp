@extends('backend.layouts.app')
@section('title' , 'District Committee Edit')

@section('content')

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Update district Committee info
                <small>{{ $district->name }} </small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{ route('backend.dashboard') }}"><i class="fa fa-dashboard"></i> Admin</a></li>
                <li><a href=" {{ route('backend.notice.list') }}"><i class="fa fa-shopping-cart"></i> District Committee</a></li>
                <li class="active">Edit District Committee</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">

            <div class="product">
                <!-- Horizontal Form -->
                <div class="box box-info">
                    <!-- form start -->
                    <form class="form-horizontal" action="{{ route('backend.district-committee.update') }}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" class="form-control"  name="id" value="{{ $district->id }}" >
                        <div class="box-body">

                            <div class="form-group">
                                <label for="inputTitle" class="col-sm-2 control-label">Name</label>

                                <div class="col-sm-10">
                                    <input type="text" value=" {{ $district->name }} " class="form-control" id="inputTitle" name="districtName" placeholder="Name" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputTitle" class="col-sm-2 control-label">District</label>

                                <div class="col-sm-10">
                                    <label>
                                        <select class="form-control" name="district"  id="dis" required>
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
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputTitle" class="col-sm-2 control-label">Designation</label>

                                <div class="col-sm-10">
                                    <input type="text"  value=" {{ $district->designation }} " class="form-control" id="inputTitle" name="districtDesignation" placeholder="Designation" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputTitle" class="col-sm-2 control-label">Details</label>

                                <div class="col-sm-10">
                                    <input type="text"  value=" {{ $district->details }} " class="form-control" id="inputTitle" name="districtDetails" placeholder="Details" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputTitle" class="col-sm-2 control-label">Email</label>

                                <div class="col-sm-10">
                                    <input type="email"  value=" {{ $district->email }} " class="form-control" id="inputTitle" name="districtEmail" placeholder="Email" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputTitle" class="col-sm-2 control-label">Mobile</label>

                                <div class="col-sm-10">
                                    <input type="text"  value=" {{ $district->mobile }} " class="form-control" id="inputTitle" name="districtMobile" placeholder="Mobile" required>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="inputTitle" class="col-sm-2 control-label">Photo</label>

                                <div class="col-sm-10">
                                    <img src="{{ asset("uploads/".$district->image)  }}" alt="" width="200px" height="200px">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="thumbImg" class="col-sm-2 control-label">Upload New Photo</label>

                                <div class="col-sm-6">
                                    <input type="file" class="form-control" id="thumbImg" placeholder="Upload file"
                                           name="districtPhoto">
                                </div>
                            </div>

                        </div>

                        <div class="box-footer">
                            <a href="#" class="btn btn-default">Cancel</a>
                            <button type="submit" class="btn btn-info pull-right">Update</button>

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
            const genderOldValue = '{{ $district->district }}';

            if(genderOldValue !== '') {
                $('#dis').val(genderOldValue);
            }
        });


    </script>
@endsection
