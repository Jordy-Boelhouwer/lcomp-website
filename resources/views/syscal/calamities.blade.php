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
						@lang('syscal.calamities')
					</h3>
				</p>
				<p>
					<b>
						@lang('syscal.disturbances')
					</b>
				</p>
				<p>
					@lang('syscal.disturbances2-text')
				</p>
				<p>
					<b>
						@lang('syscal.softwaredisturbances')
					</b>
				</p>
				<p>
					@lang('syscal.softwaredisturbances-text')
				</p>
				<p>
					<b>
						@lang('syscal.hardwaredisturbances')
					</b>
				</p>
				<p>
					@lang('syscal.hardwaredisturbances-text')
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