@extends('layouts.app')

@section('title', 'Over ons')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Over ons</h1>
                </div>

                <div class="col">
                    <div class="card" id="about">
                        <img class="card-img-top" src="{{asset('/images/image-werkwijze.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Werkwijze</h4>
                            <p class="card-text">Wij verzorgen uw systeem- en netwerkbeheer, ook op afstand (remote).</p>
                            <a href="{{ route("about.methods") }}" class="btn btn-primary">Lees meer</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card" id="about">
                        <img class="card-img-top" src="{{asset('/images/image-referenties.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Referenties</h4>
                            <p class="card-text">L’Comp is reeds sinds 1986 actief. In deze periode hebben wij een uitgebreide klantenkring opgebouwd met
                                allen hun eigen vraagstukken.</p>
                            <a href="{{ route("about.references") }}" class="btn btn-primary">Lees meer</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                   <div class="card" id="about">
                       <img class="card-img-top" src="{{asset('/images/image-privacy.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Privacy</h4>
                            <p class="card-text">L’Comp Automatiseringen B.V. is een automatiseringsbureau die zich richt op de zakelijke en particuliere markt.</p>
                            <a href="{{ route("information.privacy") }}" class="btn btn-primary">Lees meer</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@include('partials/footer')	
@endsection