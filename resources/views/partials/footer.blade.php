<div class="pt-4" style="background-color: #222;">
	<div class="container">
		<div class="row">
			<div class="col-md-3 mt-md-0 mt-3">

          <h5 class="text-uppercase text-primary">Footer Content</h5>
          <p class="text-white">Here you can use rows and columns here to organize your footer content.</p>

        </div>

        <div class="col-md-3 mb-md-0 mb-3">

            <h5 class="text-uppercase text-primary">@lang('home.services-relieves')</h5>

            <ul class="text-white">
							@if(Route::current()->getName() == 'services.automation') <li>@lang('services.automation')</li> @else<a href="{{ route("services.automation") }}" class="sysLinks"><li>@lang('services.automation')</li></a>@endif
							@if(Route::current()->getName() == 'services.wifi') <li>@lang('services.wifi')</li> @else<a href="{{ route("services.wifi") }}" class="sysLinks"><li>@lang('services.wifi')</li></a>@endif
							@if(Route::current()->getName() == 'services.cloud') <li>@lang('services.cloud')</li> @else<a href="{{ route("services.cloud") }}" class="sysLinks"><li>@lang('services.cloud')</li></a>@endif
							@if(Route::current()->getName() == 'services.consultancy') <li>@lang('services.consultancy')</li> @else<a href="{{ route("services.consultancy") }}" class="sysLinks"><li>@lang('services.consultancy')</li></a>@endif
							@if(Route::current()->getName() == 'services.repair') <li>@lang('services.repair')</li> @else<a href="{{ route("services.repair") }}" class="sysLinks"><li>@lang('services.repair')</li></a>@endif
							@if(Route::current()->getName() == 'services.voip') <li>@lang('services.voip')</li> @else<a href="{{ route("services.voip") }}" class="sysLinks"><li>@lang('services.voip')</li></a>@endif
							@if(Route::current()->getName() == 'services.management') <li>@lang('services.management')</li> @else<a href="{{ route("services.management") }}" class="sysLinks"><li>@lang('services.management')</li></a>@endif
            </ul>

          </div>

          <div class="col-md-3 mb-md-0 mb-3">

            <h5 class="text-uppercase text-primary">Links</h5>

            <ul class="text-white">
              @if(Route::current()->getName() == 'information.privacy') <li>@lang('information.privacy-title')</li> @else<a href="{{ route("information.privacy") }}" class="sysLinks"><li>@lang('information.privacy-title')</li></a>@endif
							@if(Route::current()->getName() == 'information.cookie') <li>@lang('information.cookie-title')</li> @else<a href="{{ route("information.cookie") }}" class="sysLinks"><li>@lang('information.cookie-title')</li></a>@endif
							@if(Route::current()->getName() == 'information.processor') <li>@lang('information.processor-title')</li> @else<a href="{{ route("information.processor") }}" class="sysLinks"><li>@lang('information.processor-title')</li></a>@endif
            </ul>

          </div>

					<div class="col-md-3 mt-md-0 mt-3">

								<h5 class="text-uppercase text-primary">Contact Gegevens</h5>
								<p class="text-white">L’Comp Automatiseringen </p>
								<p class="text-white">Burgermeester Postweg 5A </br> 1121 JA Landsmeer </p>
								<p class="text-white"> tel. 085 2735222 </p>

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
