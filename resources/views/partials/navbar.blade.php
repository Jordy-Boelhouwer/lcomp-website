<div class="top-header">
		<i class="mdi mdi-phone mdi-18px mr-2"></i>
		<b><a class="text-white mr-2" href="tel:0204824440">020 482 4440</a></b>
		<i class="mdi mdi-email mdi-18px mr-2"></i>
		<b><a class="text-white" href="mailto:info@lcomp.nl">info@lcomp.nl</a></b>
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container">
		<a class="navbar-brand" href="{{ route("home.index") }}"><img src="{{ asset('/images/logo.png') }}" width="140px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link @if(Route::current()->getName() == 'home.index') active @endif"
                   href="{{ route("home.index") }}">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link @if(Route::current()->getName() == 'about.index') active @endif"
                   href="{{ route("about.index") }}">@lang('header.about-us')</a>
                <a class="nav-item nav-link @if(Route::current()->getName() == 'contact.index') active @endif"
                   href="{{ route("contact.index") }}">Contact</a>
                <a class="nav-item nav-link @if(Route::current()->getName() == 'brochure.index') active @endif"
                   href="{{ route("brochure.index") }}">Folder</a>
            </div>
        </div>
    </nav>
</div>