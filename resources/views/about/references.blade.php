@extends('layouts.app')

@section('title', 'Referenties')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-12">
                    @include('partials/leftsidebar/hulp')
                    @include('partials/leftsidebar/partners')
                </div>
                <div class="col-lg-7 col-sm-12">
                    <img class="w-100" src="{{asset('/images/image-referenties.jpg')}}">
                    <h1>Referenties</h1>
                    <p>L’Comp is reeds sinds 1986 actief. In deze periode hebben wij een uitgebreide klantenkring opgebouwd met
                        allen hun eigen vraagstukken. Op deze pagina geven wij u een kleine greep uit onze klantenkring. U leest in het kort welke sector de klant werkzaam is, wat de omvang is van het bedrijf en welke technische
                        vraagstukken door ons zijn opgepakt </p>

                    <p>
                        Heeft u na het lezen van een referentie nog vragen gekregen of wilt u in contact komen met één van onze
                        referenties? Neem gerust contact met ons op en wij zullen uw verzoek zo spoedig mogelijk behandelen.
                    </p>
                </div>

                <div class="col-lg-3 col-md-12">
                    @include('partials/rightsidebar/syscal')
                    @include('partials/rightsidebar/isl')
                </div>
            </div>
        </div>
    </section>
@endsection