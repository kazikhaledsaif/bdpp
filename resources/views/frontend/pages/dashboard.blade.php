@extends('frontend.theme.master')

@section('title','Dashboard')

@section('content')

    <div class="container mt-5">

        <div class="row">
            <div class="jumbotron-fluid text-black">
                <h4 class="text-green">Hello Someone,</h4>
                <p class="text-black">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Ab alias ipsum molestiae totam. Alias, animi at deserunt distinctio dolorem ea eaque ipsum iure magnam quas totam ut, voluptatibus.
                </p>
            </div>
        </div>

        <div class="row mt-5">

            <div class="col-4">
                <div class="card bg-success " >
                    <div class="card-header bg-info text-center">
                        <h4>বঙ্গবন্ধু ডিপ্লোমা প্রকৌশলী পরিষদ </h4>
                    </div>
                    <div class="card-body p-2 mt-2 row">
                        <div class="col-5">
                            <img class="p-1 border " src="{{ asset('frontend/img/user.jpg') }}" width="140" height="160" alt="Card image">
                        </div>
                        <div class="col-7">

                            <h4 class="card-title">মোঃ খবির হোসেন</h4>
                            <h6 class="card-title">প্রতিষ্ঠাতা সভাপতি </h6>
                            <p class="card-text">প্রতিষ্ঠাতা সভাপতি </p>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">Download</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card bg-success">
                    bkash
                </div>
            </div>
            <div class="col-4">
                <div class="card bg-success">
                    Procedure
                </div>
            </div>


        </div>





    </div>

@endsection

@push('script')
    <script>
        $('body').scrollspy({ target: '#list-example' })
    </script>
@endpush