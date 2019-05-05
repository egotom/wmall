@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">@lang('pages.VerifyEmail')</div>
                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">@lang('pages.freshVerifyLink')</div>
                    @endif
					@lang('pages.checkVlink')
					@lang('pages.notReceive')，<a href="{{ route('verification.resend') }}">@lang('pages.reSend')</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
