@extends('layouts.app')

@section('title', 'Folder')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-12">
                    @include('partials/leftsidebar/hulp')
                    <div class="partners">
                        @include('partials/leftsidebar/partners')
                    </div>
                </div>
                <div class="d-flex flex-column align-items-center col-lg-7 col-sm-12">
                    <p class="w-75">Hieronder vindt u de meest recente folder. Klik op de afbeelding om de hele pagina te bekijken.</p>
                    <a href="{{ route('brochure.pagina-1') }}">
                        <img class="brochure-image" src="{{ asset('images/folder_foto_1.png') }}">
                    </a>

                    <a href="{{ route('brochure.pagina-2') }}">
                        <img class="brochure-image mt-4" src="{{ asset('images/folder_foto_2.png') }}">
                    </a>
                </div>
                <div class="col-lg-3 col-md-12">
                    @include('partials/rightsidebar/services')
                    @include('partials/rightsidebar/isl')
                </div>

                <div class="col-lg-2 col-md-12 partners-mobile">
                    @include('partials/leftsidebar/partners')
                </div>
            </div>
        </div>
    </section>
@include('partials/footer')	
@endsection