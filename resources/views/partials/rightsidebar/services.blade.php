<h6>@lang('home.services-relieves')</h6>
<div class="sidepadding">
	<div class="card">
		<div class="sidecard-body">
			<div class="small">@lang('home.services-text')</div>
				<ul class="pt-2">
					@if(Route::current()->getName() == 'services.wifi') <li>@lang('services.wifi')</li> @else<a href="{{ route("services.wifi") }}" class="sysLinks"><li>@lang('services.wifi')</li></a>@endif
					@if(Route::current()->getName() == 'services.cloud') <li>@lang('services.cloud')</li> @else<a href="{{ route("services.cloud") }}" class="sysLinks"><li>@lang('services.cloud')</li></a>@endif
			   </ul>
		</div>
	</div>
</div>