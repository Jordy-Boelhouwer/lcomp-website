@extends('layouts.app')

@section('title', 'Wifi scan')

@section('content')
    @include('partials.headers.wifi-scan')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>@lang('wifi.wifi-scan-title')</h1>
                </div>

                <div class="col-lg-6 col-md-12">
                    <p>@lang('wifi.wifi-scan-intro')</p>
                    <p>@lang('wifi.wifi-scan-paragraph')</p>
                    <p>@lang('wifi.fill-in-the-form')</p>
                    <p>@lang('wifi.see-you-soon')</p>
                    <p>@lang('wifi.you-can-also-call') (020) 482 4440</p>
                </div>

                <div class="col-lg-6 col-md-12">
                    @include('partials/forms/wifi-scan')
                </div>
            </div>
        </div>
    </section>
@endsection