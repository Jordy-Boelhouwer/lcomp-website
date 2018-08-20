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
					<h3>
						@lang('syscal.application')
					</h3>
				</p>
				<p>
					@lang('syscal.application-text1')
				</p>
				<p>
					@lang('syscal.application-text2')
				</p>
				<p>
					<b>
						@lang('syscal.office')
					</b>
				</p>
				<p>
					@lang('syscal.office-text')
				</p>
				<p>
					<b>
						@lang('syscal.business')
					</b>
				</p>
				<p>
					@lang('syscal.business-text')
				</p>
				<p>
					<b>
						@lang('syscal.customwork')
					</b>
				</p>
				<p>
					@lang('syscal.customwork-text')
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