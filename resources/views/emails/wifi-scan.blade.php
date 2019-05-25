@component('mail::message')
    Iemand heeft een nieuwe wifi scan aanvraag gestuurd. Hieronder de details:

    Naam:{{ $wifiScan->name }}
    Email adres: {{ $wifiScan->email }}
    Datum: {{ Carbon\Carbon::parse($wifiScan->date)->toFormattedDateString() }}
@endcomponent
