@component('mail::message')
    {{ $contactRequest->first_name }} {{ $contactRequest->last_name }} ( {{ $contactRequest->email }} ) heeft een vraag gestuurd:

    {{ $contactRequest->question }}
@endcomponent
