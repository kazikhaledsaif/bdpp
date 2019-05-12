@extends('backend.layouts.app')

@section('title','General Member Form list')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            General Member Form
            {{--            <small>  <a href="#" class="btn btn-success" data-toggle="modal" data-target="#designationForm">Add New Designation</a>--}}
            {{--            </small>--}}
        </h1>
        <ol class="breadcrumb">
            <li><a href=""><i class="fa fa-dashboard"></i> Admin</a></li>
            <li class="active">General Member </li>
        </ol>
    </section>

    <section class="content container">

        <div class="row mt-5">
            <table class="table table-striped table-hover dataTable">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>NID</th>
                    <th>Payment status</th>
                    <th>Reference</th>
                    <th>Transection ID</th>
                    <th>Action</th>
                </tr>

                @foreach($committee as $member)
                    <tr>
                        <td>{{ $member['id'] }}</td>
                        <td>{{ $member['name'] }}</td>
                        <td>{{ $member['nid'] }}</td>
                        <td>
                            @if($member['payment_status'] == 'pending')
                                <span class="badge badge-primary">{{ $member['payment_status'] }}</span>
                            @elseif($member['payment_status'] == 'successful')
                                <span class="badge badge-success">{{ $member['payment_status'] }}</span>
                            @elseif($member['payment_status'] == 'canceled')
                                <span class="badge badge-danger">{{ $member['payment_status'] }}</span>
                            @endif

                        </td>
                        <td>{{ $member['reference'] }}</td>
                        <td>{{ $member['payment_txdid'] }}</td>
                        <td> # / #</td>
                    </tr>
                @endforeach



            </table>

        </div>

    </section>

@endsection