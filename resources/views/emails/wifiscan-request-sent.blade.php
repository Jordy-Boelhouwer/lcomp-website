@component('mail::message')
    Beste {{ $wifiScan->name }},

    Bedankt voor uw verzoek op een wifi scan, we zullen deze zo snel mogelijk beantwoorden!

    Mocht u een dringende vraag hebben, kunt u ons altijd bellen op 020 482 4440

    Met vriendelijke groet,
    {{ config('app.name') }}
@endcomponent
