@extends('backend.layouts.app')

@section('title','Central Committee')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Central Committee
{{--            <small>  <a href="#" class="btn btn-success" data-toggle="modal" data-target="#designationForm">Add New Designation</a>--}}
{{--            </small>--}}
        </h1>
        <ol class="breadcrumb">
            <li><a href=""><i class="fa fa-dashboard"></i> Admin</a></li>
            <li class="active">Central Committee </li>
        </ol>
    </section>

    <section class="content container">

        <div class="row mt-5">
            <table class="table table-striped table-hover dataTable">
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Name</th>
                    <th>Payment Verified</th>
                    <th>Action</th>
                </tr>

                @foreach($committee as $member)
                <tr>
                    <td>{{ $member[''] }}</td>
                </tr>
                @endforeach



            </table>

        </div>

    </section>

@endsection