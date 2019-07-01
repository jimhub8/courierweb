@component('mail::message')
# {{ $message->subject }}

{{ $message->message }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
