@extends('frontend.theme.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-5">
                <div class="card card-log bg-transparent">
                    <div class="card-header" style="color: #000;">{{ __('Verify Your Email Address') }}</div>

                    <div class="card-body">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('A fresh verification link has been sent to your email address.') }}
                            </div>
                        @endif

                        {{ __('Before proceeding, please check your email for a verification link.') }}
                        {{ _('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ _('click here to request another') }}</a>.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection