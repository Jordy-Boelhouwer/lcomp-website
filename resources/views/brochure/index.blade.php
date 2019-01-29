@extends('layouts.app')

@section('description', 'Bekijk onze folder voor alle aanbiedingen!')

@section('keywords', 'folder')

@section('title', 'Folder')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <p class="text-center">@lang('brochure.brochure-tip')</p>
                </div>
                <div class="col-lg-12 col-sm-12">
                    <div class="t">
                        <div class="tc rel">
                            <div class="book" id="book">
                                <div class="page"><img src="{{ asset('images/pagina-1.jpg') }}" alt="" /></div>
                                <div class="page"><img src="{{ asset('images/pagina-2.jpg') }}" alt="" /></div>
                                <div class="page"><img src="{{ asset('images/pagina-3.jpg') }}" alt="" /></div>
                                <div class="page"><img src="{{ asset('images/pagina-4.jpg') }}" alt="" /></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <p class="text-center">@lang('brochure.brochure-message')</p>
                </div>
            </div>
        </div>
    </section>
@include('partials/footer')
@endsection
