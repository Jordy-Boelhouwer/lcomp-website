<div class="pt-4" style="background-color: #1f1f1f">
	<div class="container">
		<div class="footer">
			<div class="row">
				<div class="col-md-3 col-sm-12 mt-md-0 mt-3">
					<h3 class="text-white">Partners</h3>
					<div class="partner-slider">
						<div><img src="{{ asset('/images/logos/image1.png') }}"></div>
						<div><img src="{{ asset('/images/logos/image2.png') }}"></div>
						<div><img src="{{ asset('/images/logos/image3.png') }}"></div>
						<div><img src="{{ asset('/images/logos/image4.png') }}"></div>
						<div><img src="{{ asset('/images/logos/image5.png') }}"></div>
						<div><img src="{{ asset('/images/logos/image6.png') }}"></div>
						<div><img src="{{ asset('/images/logos/image7.png') }}"></div>
						<div><img src="{{ asset('/images/logos/image8.png') }}"></div>
						<div><img src="{{ asset('/images/logos/image9.png') }}"></div>
						<div><img src="{{ asset('/images/logos/image10.png') }}"></div>
						<div><img src="{{ asset('/images/logos/image11.png') }}"></div>
					</div>
				</div>

				<div class="col-md-3 col-sm-12 mb-md-0 mb-3">

					<h5 class="text-uppercase text-white">@lang('home.services-relieves')</h5>

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
					</ul>

				</div>

				<div class="col-md-3 col-sm-12 mt-md-0 mt-3">

					<h5 class="text-uppercase text-white">Contact Gegevens</h5>
					<p>L’Comp Automatiseringen </p>
					<p>Burgermeester Postweg 5A </br> 1121 JA Landsmeer </p>
					<p> tel. 085 2735222 </p>

				</div>
			</div>
		</div>
		</div>
	</div>
<div style="background-color: #1f1f1f; padding: 15px 0 5px;">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h5 class="text-white">L'Comp Automatiseringen</h5>
            </div>
		</div>
	</div>
</div>
