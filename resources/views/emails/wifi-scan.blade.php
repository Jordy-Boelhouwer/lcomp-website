@component('mail::message')
    Iemand heeft een nieuwe wifi scan aanvraag gestuurd. Hieronder de details:

    Voornaam:{{ $wifiScan->first_name }}
    Achternaam: {{ $wifiScan->last_name }}
    Email adres: {{ $wifiScan->email }}
    Vraag: {{ $wifiScan->question }}
@endcomponent
