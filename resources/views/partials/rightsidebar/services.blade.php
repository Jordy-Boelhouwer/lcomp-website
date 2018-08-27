<h6>@lang('home.services-relieves')</h6>
<div class="sidepadding">
	<div class="card">
		<div class="sidecard-body">
			<div class="small">@lang('home.services-text')</div>
				<ul class="pt-2">
					@if(Route::current()->getName() == 'services.automation') <li>@lang('services.automation')</li> @else<a href="{{ route("services.automation") }}" class="sysLinks"><li>@lang('services.automation')</li></a>@endif
					@if(Route::current()->getName() == 'services.wifi') <li>@lang('services.wifi')</li> @else<a href="{{ route("services.wifi") }}" class="sysLinks"><li>@lang('services.wifi')</li></a>@endif
					@if(Route::current()->getName() == 'services.cloud') <li>@lang('services.cloud')</li> @else<a href="{{ route("services.cloud") }}" class="sysLinks"><li>@lang('services.cloud')</li></a>@endif
					@if(Route::current()->getName() == 'services.consultancy') <li>@lang('services.consultancy')</li> @else<a href="{{ route("services.consultancy") }}" class="sysLinks"><li>@lang('services.consultancy')</li></a>@endif
					@if(Route::current()->getName() == 'services.repair') <li>@lang('services.repair')</li> @else<a href="{{ route("services.repair") }}" class="sysLinks"><li>@lang('services.repair')</li></a>@endif
					@if(Route::current()->getName() == 'services.voip') <li>@lang('services.voip')</li> @else<a href="{{ route("services.voip") }}" class="sysLinks"><li>@lang('services.voip')</li></a>@endif
					@if(Route::current()->getName() == 'services.management') <li>@lang('services.management')</li> @else<a href="{{ route("services.management") }}" class="sysLinks"><li>@lang('services.management')</li></a>@endif
				 </ul>
		</div>
	</div>
</div>
