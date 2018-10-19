@extends('layouts.app')

@section('title', 'Cloud Services')

@section('content')

@include('partials/headers/automation')
<section>
    <div class="container">
        <div class="row">
			<div class="col-lg-2 col-md-12">
				@include('partials/leftsidebar/hulp')
			</div>
            <div class="col-lg-7 col-sm-12">
				<p>
					<h1>
						@lang('services.automation')
					</h1>
				</p>
				<p>
					@lang('services.automation-text1')
				</p>
				<p>
					@lang('services.automation-text2')
				</p>
        <p>
					@lang('services.automation-text3')
				</p>

        <p>
					<b>@lang('services.automation-ol-title')</b>
          <ol>
            <li>@lang('services.automation-li-1')</li>
            <li>@lang('services.automation-li-2')</li>
            <li>@lang('services.automation-li-3')</li>
          </ol>
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
