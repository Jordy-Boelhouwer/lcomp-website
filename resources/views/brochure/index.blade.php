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
                                <div class="page"><img src="{{ asset('images/mei-1.png') }}" alt="folder mei pagina 1" /></div>
                                <div class="page"><img src="{{ asset('images/mei-2.png') }}" alt="folder mei pagina 2" /></div>
                                <div class="page"><img src="{{ asset('images/mei-3.png') }}" alt="folder mei pagin 3" /></div>
                                <div class="page"><img src="{{ asset('images/mei-4.png') }}" alt="folder mei pagina 4" /></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 mt-5">
                    <p class="text-center">@lang('brochure.brochure-message')</p>
                </div>
            </div>
        </div>
    </section>
    @include('partials/footer')
@endsection
