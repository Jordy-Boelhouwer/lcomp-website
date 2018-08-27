@extends('layouts.app')

@section('title', 'Cloud Services')

@section('content')

@include('partials/headers/repair')
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
						@lang('services.repair')
					</h1>
				</p>
				<p>
					@lang('services.repair-text1')
				</p>
				<p>
					@lang('services.repair-text2')
				</p>
        <p>
					@lang('services.repair-text3')
				</p>
        <p>
					<b>@lang('services.repair-most-title')</b>
				</p>
        <p>
					@lang('services.repair-most-text1')
          <ul>
            <li>@lang('services.repair-li-1')</li>
            <li>@lang('services.repair-li-2')</li>
            <li>@lang('services.repair-li-3')</li>
            <li>@lang('services.repair-li-4')</li>
            <li>@lang('services.repair-li-5')</li>
            <li>@lang('services.repair-li-6')</li>
            <li>@lang('services.repair-li-7')</li>
            <li>@lang('services.repair-li-8')</li>
            <li>@lang('services.repair-li-9')</li>
            <li>@lang('services.repair-li-10')</li>
            <li>@lang('services.repair-li-11')</li>
          </ul>
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
