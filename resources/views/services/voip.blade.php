@extends('layouts.app')

@section('title', 'Cloud Services')

@section('content')

@include('partials/headers/voip')
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
						@lang('services.voip')
					</h1>
				</p>
				<p>
					<b class="text-primary">@lang('services.voip-title1')</b>
				</p>
				<p>
					@lang('services.voip-text1')
				</p>
        <p>
          <b class="text-primary">@lang('services.voip-title2')</b>
        </p>
        <p>
          @lang('services.voip-text2')
        </p>
        <p>
					<b class="text-primary">@lang('services.voip-title3')</b>
				</p>
				<p>
					@lang('services.voip-text3')
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
