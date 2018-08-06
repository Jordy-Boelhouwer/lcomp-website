@extends('layouts.app')

@section('title', 'Werkwijze')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-12">
                    @include('partials/leftsidebar/hulp')
                    @include('partials/leftsidebar/partners')
                </div>
                <div class="col-lg-7 col-sm-12">
                    <img class="w-100" src="{{asset('/images/image-werkwijze.jpg')}}">
                    <h1 class="mt-3">Onze werkwijze</h1>
                    <p>Onder systeem- en netwerkbeheer vallen alle werkzaamheden die nodig zijn om het netwerk en alle aangesloten apparatuur goed te laten functioneren. Wij zullen periodiek een bezoek aan uw organisatie brengen om u on-site
                        te ondersteunen. Het controleren en inrichten van uw netwerk beveiliging, het creëren van vpn verbindingen voor
                        werken op afstand, het controleren van logboeken, back-up procedures, virusscanners en tal van andere zaken helpen de stabiliteit van uw systemen te waarborgen. Dit wordt gecombineerd met beheer op afstand om u snel
                        van dienst te kunnen zijn in geval van problemen. Ook het beheren van softwarelicenties valt onder systeembeheer. </p>

                    <p>
                        Het is vanzelfsprekend dat de werkzaamheden zich niet beperken tot de genoemde punten, maar dat het goed
                        functioneren van alle netwerkonderdelen voorop staat.
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