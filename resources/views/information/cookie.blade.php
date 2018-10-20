@extends('layouts.app')

@section('title', 'Cookie statement')

@section('content')
<section>
    <div class="container">
        <div class="row">
			<div class="col-lg-2 col-md-12">
				@include('partials/leftsidebar/hulp')
			</div>
            <div class="col-lg-7 col-sm-12">
                <h1>Cookies</h1>
				<p>
					<b>
						Cookies
					</b>
				</p>

				<p>
					@lang('cookies.cookies-paragraph')
				</p>

				<p>
					<b>@lang('cookies.what-are-cookies')</b>
				</p>

				<p>
					@lang('cookies.what-are-cookies-paragraph')
				</p>

				<p>
					<b>@lang('cookies.which-cookies')</b>
				</p>

				<p>
					@lang('cookies.which-cookies-text')
				</p>

				<p>
					@lang('cookies.which-cookies-li')
				</p>

				<p>
					<b>@lang('cookies.how-long')</b>
				</p>

				<p>
					@lang('cookies.how-long-paragraph')
				</p>

				<p>
					<b>@lang('cookies.remove')</b>
				</p>

				<p>
					@lang('cookies.remove-paragraph')
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