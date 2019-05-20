@extends('backend.layouts.app')
@section('title' , 'Central Committee Add')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            New Central Committee
            <small>Create a new Central Committee</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
            <li class="active">Central Committee</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <div class="product">
            <!-- Horizontal Form -->
            <div class="box box-info">
                <!-- form start -->
                <form class="form-horizontal" action="{{ route('backend.central-committee.create') }}" method="post"
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
{{--                                <input type="text" name="centralDesignation" placeholder="Designation" required>--}}
                                <select name="centralDesignation" class="form-control" id="inputTitle" required >
                                    @foreach($designations as $d)
                                        <option value="{{ $d['id'] }}">{{ $d['title'] }}</option>
                                    @endforeach
                                </select>
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