<section>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container">
        <a class="navbar-brand" href="{{ route("home.index") }}"><img src="{{ asset('/images/lcomplogo.png') }}" width="140px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="{{ route("home.index") }}">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="{{ route("about.index") }}">Over ons</a>
                <a class="nav-item nav-link" href="{{ route("contact.index") }}">Contact</a>
            </div>
        </div>
    </nav>
    <hr>
</div>
</section>
