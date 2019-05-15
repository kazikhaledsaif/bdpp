@extends('backend.layouts.app')
@section('title' , 'Departmental Committee Add')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            New Departmental Committee
            <small>Create a new Departmental Committee</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
            <li class="active">New Departmental Committee</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <div class="product">
            <!-- Horizontal Form -->
            <div class="box box-info">
                <!-- form start -->
                <form class="form-horizontal" action="{{ route('backend.department-committee.create') }}" method="post"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="box-body">

                        <div class="form-group">
                            <label for="inputTitle" class="col-sm-2 control-label">Name</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputTitle" name="centralName" placeholder="Name" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputTitle" class="col-sm-2 control-label">Designation</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputTitle" name="centralDesignation" placeholder="Designation" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputTitle" class="col-sm-2 control-label">Department</label>

                            <div class="col-sm-10">
                                <label>
                                    <select class="form-control" name="department" required>
                                        <option value="" disabled selected>নির্বাচন করুন</option>

                                        <option value="সরকারি">সরকারি</option>
                                        <option value="বেসরকারী">বেসরকারী</option>
                                        <option value="অন্যান্য">অন্যান্য</option>

                                    </select>
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputTitle" class="col-sm-2 control-label">Details</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputTitle" name="centralDetails" placeholder="Details" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputTitle" class="col-sm-2 control-label">Email</label>

                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputTitle" name="centralEmail" placeholder="Email" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputTitle" class="col-sm-2 control-label">Mobile</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputTitle" name="centralMobile" placeholder="Mobile" required>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="thumbImg" class="col-sm-2 control-label">Upload Photo</label>

                            <div class="col-sm-6">
                                <input type="file" class="form-control" id="thumbImg" placeholder="Upload file"
                                       name="centralPhoto">
                            </div>
                        </div>

                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <a href="#" class="btn btn-default">Cancel</a>
                        <button type="submit" class="btn btn-info pull-right">Create</button>
                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
            <!-- /.box -->
        </div>

    </section>
    <!-- /.content -->

@endsection

@section('script')

@endsection