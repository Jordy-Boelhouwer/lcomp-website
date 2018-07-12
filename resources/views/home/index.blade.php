@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="container">
        <div class="row">
			<div class="col-lg-2 col-md-12">
				@include('partials/leftsidebar/hulp')
				@include('partials/leftsidebar/partners')
			</div>
            <div class="col-lg-7 col-md-12">
                <h1>L’Comp Automatiseringen</h1>
				<p>
					<b>
						Automatisering en Informatievoorziening ondersteunt het functioneren binnnen een organisatie en speelt hiermee een belangrijke rol in effectiviteit.
						Het inrichten, beheren en functioneren zijn ‘de tools’ van de ICT infrastructuur.
						Ook het up-to-date houden van applicaties is van belang omdat de technische ontwikkelingen elkaar snel op volgen.
						Daarnaast dienen de kosten aanvaardbaar te blijven.
						Voor middelgrote en kleinere organisaties is het vaak onbetaalbaar om een fulltime netwerk/systeembeheerder in dienst te nemen.
					</b>
				</p>
				<p>
					L’Comp biedt u de oplossing om zonder een vaste kracht een passende automatisering en informatievoorziening in huis te hebben.
					Wij zijn een jonge onderneming en wij hebben de benodigde kennis en ervaring op het gebied van systeem- en netwerkbeheer.
					Dit te samen met onze service en ondersteuning bieden wij u een, in de markt unieke, totale service; “alles in een hand”
				</p>
				<img class="w-100" alt="" src="{{ asset('/images/LCOMPTeamNieuw1.jpg') }}">
			</div>
			<div class="col-lg-3 col-md-12">
                @include('partials/rightsidebar/isl')
			</div>
        </div>
    </div>
@endsection