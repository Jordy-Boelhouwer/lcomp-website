@extends('layouts.app')

@section('title', 'Privacy Verklaring')

@section('content')
<section>
    <div class="container">
        <div class="row">
			<div class="col-lg-2 col-md-12">
				@include('partials/leftsidebar/hulp')
				@include('partials/leftsidebar/partners')
			</div>
            <div class="col-lg-7 col-sm-12">
				<img class="w-100 h-50" src="{{asset('/images/image-privacy.jpg')}}">
                <h1>@lang('information.privacy-title')</h1>
				<p>
					@lang('information.privacy-intro-1')
				</p>
				<p>
					@lang('information.privacy-intro-2')
				</p>
				<p>
					<b>
						@lang('information.personal-process-title')
					</b>
				</p>
				<p>
					@lang('information.personal-process-li')
				</p>
				<p>
					<b>
						@lang('information.personal-uses-title')
					</b>
				</p>
				<p>
					@lang('information.personal-uses-text-1')
				</p>
				<p>
					@lang('information.personal-uses-text-2')
				</p>
				<p>
					<b>
						@lang('information.personal-share-title')
					</b>
				</p>
				<p>
					@lang('information.personal-share-text')
				</p>
				<p>
					<b>
						@lang('information.insight-title')
					</b>
				</p>
				<p>
					@lang('information.insight-text')
				</p>
				<p>
					<b>
						@lang('information.correction-title')
					</b>
				</p>
				<p>
					@lang('information.correction-text')
				</p>
				<p>
					<b>
						@lang('information.contact-title')
					</b>
				</p>
				<p>
					@lang('information.contact-text')
				</p>
				<p>
					@lang('information.contact-li')
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