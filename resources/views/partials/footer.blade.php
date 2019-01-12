<div class="pt-4" style="background-color: #1f1f1f">
	<div class="container">
		<div class="footer">
			<div class="row">
				<div class="col-md-3 col-sm-12 mb-md-0 mb-3">

					<h5 class="text-uppercase text-white">@lang('home.services')</h5>

					<ul>
						@if(Route::current()->getName() == 'services.automation') <li>@lang('services.automation')</li> @else<a href="{{ route("services.automation") }}" class="sysLinks"><li>@lang('services.automation')</li></a>@endif
						@if(Route::current()->getName() == 'services.wifi') <li>@lang('services.wifi')</li> @else<a href="{{ route("services.wifi") }}" class="sysLinks"><li>@lang('services.wifi')</li></a>@endif
						@if(Route::current()->getName() == 'services.cloud') <li>@lang('services.cloud')</li> @else<a href="{{ route("services.cloud") }}" class="sysLinks"><li>@lang('services.cloud')</li></a>@endif
						@if(Route::current()->getName() == 'services.consultancy') <li>@lang('services.consultancy')</li> @else<a href="{{ route("services.consultancy") }}" class="sysLinks"><li>@lang('services.consultancy')</li></a>@endif
						@if(Route::current()->getName() == 'services.repair') <li>@lang('services.repair')</li> @else<a href="{{ route("services.repair") }}" class="sysLinks"><li>@lang('services.repair')</li></a>@endif
						@if(Route::current()->getName() == 'services.voip') <li>@lang('services.voip')</li> @else<a href="{{ route("services.voip") }}" class="sysLinks"><li>@lang('services.voip')</li></a>@endif
						@if(Route::current()->getName() == 'services.management') <li>@lang('services.management')</li> @else<a href="{{ route("services.management") }}" class="sysLinks"><li>@lang('services.management')</li></a>@endif
					</ul>
				</div>

				<div class="col-md-3 col-sm-12 mb-md-0 mb-3">

					<h5 class="text-uppercase text-white">Links</h5>

					<ul>
						@if(Route::current()->getName() == 'information.privacy') <li>@lang('information.privacy-title')</li> @else<a href="{{ route("information.privacy") }}" class="sysLinks"><li>@lang('information.privacy-title')</li></a>@endif
						@if(Route::current()->getName() == 'information.cookie') <li>@lang('information.cookie-title')</li> @else<a href="{{ route("information.cookie") }}" class="sysLinks"><li>@lang('information.cookie-title')</li></a>@endif
						@if(Route::current()->getName() == 'information.processor') <li>@lang('information.processor-title')</li> @else<a href="{{ route("information.processor") }}" class="sysLinks"><li>@lang('information.processor-title')</li></a>@endif
						<a href="/files/voorwaardenV2.pdf" target="_blank" class="sysLinks"><li>@lang('information.terms-and-conditions-lcomp')</li></a>
						<a href="/files/voorwaardenICTWaarborg.pdf" target="_blank" class="sysLinks"><li>@lang('information.terms-and-conditions-ictwaarborg')</li></a>
					</ul>

				</div>

				<div class="col-md-3 col-sm-12 mt-md-0 mt-3">

					<h5 class="text-uppercase text-white">Contact Gegevens</h5>
					<p>L’Comp Automatiseringen B.V </p>
					<p>Burgemeester Postweg 5A </br> 1121 JA Landsmeer </p>
					<a href="tel:0204824440"> tel. 020 482 444 0 </a>

				</div>
			</div>
		</div>
		</div>
	</div>
<div style="background-color: #1f1f1f; padding: 15px 0 5px;">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h5 class="text-white">L'Comp Automatiseringen B.V</h5>
            </div>
		</div>
	</div>
</div>
