@component('mail::message')
{{-- # Introduction --}}

>Hi {{ $subscriber->email }},</p>
<p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">Welcome to our news letter, we will be sending you updates soon</p>                 

Thanks,<br>
{{ config('app.name') }}
@endcomponent