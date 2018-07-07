@extends('layouts.app')

@section('title', 'Contact')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Contact pagina</h1>
                </div>

                <div class="col-md-6 col-sm-12">
                    <p>Hier komt locatie in google maps</p>
                </div>

                <div class="col-md-6 col-sm-12">
                    @include('partials/forms/contact')
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h2>Openingstijden</h2>
                    <span><strong>Maandag:</strong> 9:00 t/m 18:00</span><br>
                    <span><strong>Dinsdag:</strong> 9:00 t/m 18:00</span><br>
                    <span><strong>Woensdag:</strong> 9:00 t/m 18:00</span><br>
                    <span><strong>Donderdag:</strong> 9:00 t/m 18:00</span><br>
                    <span><strong>Vrijdag:</strong> 9:00 t/m 18:00</span><br>
                    <span><strong>Vrijdag:</strong> 10:00 t/m 16:00</span><br>
                </div>
            </div>
        </div>
    </section>
@endsection