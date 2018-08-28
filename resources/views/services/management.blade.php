@extends('layouts.app')

@section('title', 'Cloud Services')

@section('content')

@include('partials/headers/management')
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
						@lang('services.management')
					</h1>
				</p>
				<p>
					@lang('services.management-intro')
				</p>
				<p>
					<b class="text-primary">@lang('services.management-title1')</b>
				</p>
        <p>
					@lang('services.management-text1')
				</p>
        <p>
					@lang('services.management-text2')
				</p>
        <p>
					<b class="text-primary">@lang('services.management-title2')</b>
				</p>
        <p>
					@lang('services.management-text3')
				</p>
        <p>
					<b class="text-primary">@lang('services.management-title3')</b>
				</p>
        <p>
					@lang('services.management-text4')
				</p>
        <p>
					<b class="text-primary">@lang('services.management-title4')</b>
				</p>
        <p>
					@lang('services.management-text5')
				</p>
        <p>
					@lang('services.management-text6')
				</p>
        <p>
					<i><b class="text-primary">@lang('services.management-title5')</b></i></br>
					@lang('services.management-text7')
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
