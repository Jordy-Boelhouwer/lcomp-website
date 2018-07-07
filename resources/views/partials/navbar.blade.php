<nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <a class="navbar-brand text-white" href="{{ route("home.index") }}">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link active text-white" href="{{ route("home.index") }}">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link text-white" href="{{ route("about.index") }}">Over ons</a>
            <a class="nav-item nav-link text-white" href="{{ route("contact.index") }}">Contact</a>
        </div>
    </div>
</nav>