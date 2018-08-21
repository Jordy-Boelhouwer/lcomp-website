@extends('layouts.app')

@section('title', 'Cloud Services')

@section('content')

@include('partials/headers/cloud')
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
						@lang('services.cloud')
					</h1>
				</p>
				<p>
					@lang('services.cloud-intro')
				</p>
				<p>
					@lang('services.cloud-services')
				</p>
				<div class="row">
					<div class="col-lg-6 col-sm-12">
						<p>
							<span class="mdi mdi-cloud mg-2 text-primary"></span><b class="text-primary ml-2">@lang('services.cloud-backup')</b>
						</p>
						<p>
							@lang('services.cloud-backup-text1')
						</p>
					</div>
					<div class="col-lg-6 col-sm-12">
						<p>
							<span class="mdi mdi-cloud text-primary"></span><b class="text-primary ml-2">@lang('services.cloud-hosting')</b>
						</p>
						<p>
							@lang('services.cloud-hosting-text1')
						</p>
					</div>
					<div class="col-lg-6 col-sm-12">
						<p>
							<span class="mdi mdi-cloud text-primary"></span><b class="text-primary ml-2">@lang('services.cloud-workplace')</b>
						</p>
						<p>
							@lang('services.cloud-workplace-text1')
						</p>
					</div>
					<div class="col-lg-6 col-sm-12">
						<p>
							<span class="mdi mdi-cloud text-primary"></span><b class="text-primary ml-2">@lang('services.cloud-storage')</b>
						</p>
						<p>
							@lang('services.cloud-storage-text1')
						</p>
					</div>
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