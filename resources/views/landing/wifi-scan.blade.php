@extends('layouts.app')

@section('description', 'gratis wifi scan')

@section('keywords', 'wifi')

@section('title', 'Wifi scan')

@section('content')
    @include('partials/headers/wifi-landing')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-12">
                    @include('partials/leftsidebar/hulp')
                </div>

                <div class="col-lg-7 col-sm-12">
                    <h1>@lang('wifi.apply-now')</h1>

                    <form method="POST" action="{{ route('wifiScan.store') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name">@lang('form.name')</label>
                            <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp" placeholder="@lang('form.name')" required>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail">@lang('form.email')</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="@lang('form.email')" required>
                        </div>
                        <div class="form-group">
                            <label for="inputTel">@lang('form.tel')</label>
                            <input type="text" class="form-control" id="phone_number" name="phone_number">
                        </div>
                        <div class="form-group">
                            <label for="inputDatepicker"></label>
                            <input type="text" class="form-control" id="datepicker" name="date" hidden required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        <div class="form-group">
                            @include('partials/errors')
                        </div>
                        <div class="g-recaptcha" data-sitekey="{{env('GOOGLE_RECAPTCHA_KEY')}}"></div>
                    </form>
                </div>

                <div class="col-lg-3 col-md-12">
                    @include('partials/rightsidebar/services')
                    @include('partials/rightsidebar/isl')
                    @include('partials/rightsidebar/live-chat')
                </div>
            </div>
        </div>
    </section>
@include('partials/footer')
@endsection