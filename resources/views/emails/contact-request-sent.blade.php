@component('mail::message')
Beste {{ $contactRequest->first_name }} {{ $contactRequest->last_name }},

Bedankt voor uw vraag, we zullen deze zo snel mogelijk beantwoorden!

Mocht u een dringende vraag hebben, kunt u ons altijd bellen op 020 482 4440

Met vriendelijke groet,<br>
{{ config('app.name') }}
@endcomponent
