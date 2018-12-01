@extends('layouts.app')

@section('description', 'L\'Comp bedient vele soorten bedrijven. Wij zijn sterk vertegenwoordigd in de financiële dienstverlening / Aannemingsbedrijven en Retail.')

@section('title', 'Referenties')

@section('content')
<section>
    <div class="container">
        <div class="row">
			<div class="col-lg-2 col-md-12">
				@include('partials/leftsidebar/hulp')
			</div>
            <div class="col-lg-7 col-sm-12">
                <div class="d-flex justify-content-center">
                    <img class="mb-5" src="{{ asset('/images/headers/references_header.jpg') }}" alt="References image">
                </div>
				<p>@lang('references.references-intro')</p>
				<p>@lang('references.references-paragraph-1')</p>
                <p>@lang('references.references-paragraph-2')</p>

                <div class="references-slider mt-5 mb-5">
                    <div><img src="{{ asset('/images/logos/tis-logo.jpg') }}"></div>
                    <div><img src="{{ asset('/images/logos/wagelaar-logo.jpg') }}"></div>
                    <div><img src="{{ asset('/images/logos/toren-logo.png') }}"></div>
                    <div><img src="{{ asset('/images/logos/hellofresh-logo.png') }}"></div>
                    <div><img src="{{ asset('/images/logos/logo-lovestories.png') }}"></div>
                    {{--<div><img src="{{ asset('/images/logos/trendsource-logo.png') }}"></div>--}}
                    <div><img src="{{ asset('/images/logos/logo-speech-republic.png') }}"></div>
                    <div><img src="{{ asset('/images/logos/tuzkapan-logo.png') }}"></div>
                    <div><img src="{{ asset('/images/logos/cooldelivery-logo.png') }}"></div>
                    <div><img src="{{ asset('/images/logos/spoel-sch-logo.jpg') }}"></div>
                </div>

                <h1 class="mt-5">Partners</h1>

                <div class="partner-slider mb-5">
                    <div><img src="{{ asset('/images/logos/image1.png') }}"></div>
                    <div><img src="{{ asset('/images/logos/image2.png') }}"></div>
                    <div><img src="{{ asset('/images/logos/image3.png') }}"></div>
                    <div><img src="{{ asset('/images/logos/image4.png') }}"></div>
                    <div><img src="{{ asset('/images/logos/image5.png') }}"></div>
                    <div><img src="{{ asset('/images/logos/image6.png') }}"></div>
                    <div><img src="{{ asset('/images/logos/image7.png') }}"></div>
                    <div><img src="{{ asset('/images/logos/image8.png') }}"></div>
                    <div><img src="{{ asset('/images/logos/image9.png') }}"></div>
                    <div><img src="{{ asset('/images/logos/image10.png') }}"></div>
                    <div><img src="{{ asset('/images/logos/image11.png') }}"></div>
                </div>
			</div>
			<div class="col-lg-3 col-md-12">
				@include('partials/rightsidebar/services')
                @include('partials/rightsidebar/isl')
			</div>
        </div>
    </div>
</section>
@include('partials/footer')
@endsection
