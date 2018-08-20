@extends('layouts.app')

@section('title', 'Syscal')

@section('content')
<section>
    <div class="container">
        <div class="row">
			<div class="col-lg-2 col-md-12">
				@include('partials/leftsidebar/hulp')
				@include('partials/leftsidebar/partners')
			</div>
            <div class="col-lg-7 col-sm-12">
                <h1>Syscal</h1>
				<p>
					@lang('syscal.service-intro')
				</p>
				<p>
					<b>
						@lang('syscal.similarities')
					</b>
				</p>
				<p>
					@lang('syscal.similarities-text1')
				</p>

				<p>
					@lang('syscal.similarities-text2')
				</p>
				<h3>@lang('syscal.overview')</h3>
				<p>
					<b>
						@lang('syscal.system-network')
					</b>
				</p>
				<p>
						@lang('syscal.serviceagreement')
				</p>
				<p>
						@lang('syscal.system-network-li')
				</p>
				<b>
					<p>
						@lang('syscal.application')
					</p>
				</b>
				<p>
						@lang('syscal.service-application-text')
				</p>
				<p>
						@lang('syscal.service-application-li')
				</p>
								<b>
					<p>
						@lang('syscal.calamity')
					</p>
				</b>
				<p>
						@lang('syscal.calamity-text')
				</p>
				<p>
						@lang('syscal.calamity-li')
				</p>
				
			</div>
			<div class="col-lg-3 col-md-12">
				@include('partials/rightsidebar/syscal')
                @include('partials/rightsidebar/isl')				
			</div>
        </div>
    </div>
</section>
@endsection