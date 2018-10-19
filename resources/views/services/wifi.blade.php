@extends('layouts.app')

@section('title', 'WiFi')

@section('content')

@include('partials/headers/wifi')
<section>
    <div class="container">
        <div class="row">
			<div class="col-lg-2 col-md-12">
				@include('partials/leftsidebar/hulp')
			</div>
            <div class="col-lg-7 col-sm-12">
				<p>
					<h1>
						@lang('services.wifi')
					</h1>
				</p>
				<p>
					@lang('services.wifi-intro')
				</p>
				<p>
					<u>@lang('services.wifi-spectrum')</u></br>
					@lang('services.wifi-spectrum-text1')
				</p>
				<p>
					<u>@lang('services.wifi-meten')</u></br>
					@lang('services.wifi-meten-text1')
					<b>@lang('services.wifi-meten-aanvraag')</b>
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