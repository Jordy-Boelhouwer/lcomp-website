@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="container">
        <div class="row">
			<div class="col-lg-2 col-md-12">
				@include('partials/leftsidebar/hulp')
				@include('partials/leftsidebar/partners')
			</div>
            <div class="col-lg-7 col-sm-12">
                <h1>L’Comp Automatiseringen</h1>
				<p>
					<b>
						@lang('home.text-intro')
					</b>
				</p>
				<p>
					@lang('home.text')
				</p>
				<img class="w-100" alt="" src="{{ asset('/images/LCOMPTeamNieuw1.jpg') }}">
			</div>
			<div class="col-lg-3 col-md-12">
				@include('partials/rightsidebar/syscal')
                @include('partials/rightsidebar/isl')				
			</div>
        </div>
    </div>
@endsection