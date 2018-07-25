<h6>@lang('home.syscal-relieves')</h6>
<div class="sidepadding">
	<div class="card">
		<div class="sidecard-body">
			<div class="small">@lang('home.syscal-text')</div>
				<ul class="pt-2">
					@if(Route::current()->getName() == 'syscal.application') <li>@lang('syscal.application')</li> @else<a href="{{ route("syscal.application") }}" class="sysLinks"><li>Applicatiebeheer</li></a>@endif
					@if(Route::current()->getName() == 'syscal.systems') <li>@lang('syscal.system')</li> @else<a href="{{ route("syscal.systems") }}" class="sysLinks"><li>Systeembeheer</li></a>@endif
					@if(Route::current()->getName() == 'syscal.calamities') <li>@lang('syscal.calamities')</li> @else<a href="{{ route("syscal.calamities") }}" class="sysLinks"><li>Calamiteitenbeheer</li></a>@endif
					@if(Route::current()->getName() == 'syscal.service') <li>@lang('syscal.service')</li> @else<a href="{{ route("syscal.service") }}" class="sysLinks"><li>Serviceovereenkomsten</li></a>@endif
					@if(Route::current()->getName() == 'syscal.prices') <li>@lang('syscal.prices')</li> @else<a href="{{ route("syscal.prices") }}" class="sysLinks"><li>Tarieven</li></a>@endif
			   </ul>
		</div>
	</div>
</div>