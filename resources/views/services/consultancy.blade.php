@extends('layouts.app')

@section('title', 'Cloud Services')

@section('content')

@include('partials/headers/consultancy')
<section>
    <div class="container">
        <div class="row">
			<div class="col-lg-2 col-md-12">
				@include('partials/leftsidebar/hulp')
				@include('partials/leftsidebar/partners')
			</div>
            <div class="col-lg-7 col-sm-12">
				<p>
					<h1>
						@lang('services.consultancy')
					</h1>
				</p>
				<p>
					@lang('services.consultancy-text1')
				</p>
				<p>
					@lang('services.consultancy-text2')
				</p>
        <p>
					@lang('services.consultancy-text3')
				</p>
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
