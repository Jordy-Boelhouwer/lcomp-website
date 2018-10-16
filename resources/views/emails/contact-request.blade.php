@component('mail::message')
    Iemand heeft een nieuwe vraag gestuurd. Hieronder de details:

    Voornaam:{{ $contactRequest->first_name }}
    Achternaam: {{ $contactRequest->last_name }}
    Email adres: {{ $contactRequest->email }}
    Vraag: {{ $contactRequest->question }}
@endcomponent
