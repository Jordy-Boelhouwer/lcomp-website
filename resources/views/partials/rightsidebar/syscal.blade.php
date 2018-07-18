<h6>Syscal ontzorgt</h6>
<div class="sidepadding">
	<div class="card">
		<div class="sidecard-body">
			<div class="small">Er is meer nodig dan alleen het leveren van een product. Wij bieden een overeenkomst aan voor voor algemeen beheer en acurate zorg bij incidenten. Voor u een zorg minder.</div>
				<ul class="pt-2">
					@if(Route::current()->getName() == 'syscal.application') <li>Applicatiebeheer</li> @else<a href="{{ route("syscal.application") }}" class="sysLinks"><li>Applicatiebeheer</li></a>@endif
					@if(Route::current()->getName() == 'syscal.systems') <li>Systeembeheer</li> @else<a href="{{ route("syscal.systems") }}" class="sysLinks"><li>Systeembeheer</li></a>@endif
					@if(Route::current()->getName() == 'syscal.calamities') <li>Calamiteitenbeheer</li> @else<a href="{{ route("syscal.calamities") }}" class="sysLinks"><li>Calamiteitenbeheer</li></a>@endif
					@if(Route::current()->getName() == 'syscal.service') <li>Serviceovereenkomsten</li> @else<a href="{{ route("syscal.service") }}" class="sysLinks"><li>Serviceovereenkomsten</li></a>@endif
					@if(Route::current()->getName() == 'syscal.prices') <li>Tarieven</li> @else<a href="{{ route("syscal.prices") }}" class="sysLinks"><li>Tarieven</li></a>@endif
			   </ul>
		</div>
	</div>
</div>