@component('mail::message')
# Introduction

QUOTE

@component('mail::panel')
Name: {{ $quote->name }} <br>
Email: {{ $quote->email }} <br>
Pickup Address: {{ $quote->pickup_address }} <br>
Delivery Address: {{ $quote->delivery_address }} <br>
Courier Description: {{ $quote->courier_description }} <br>
Delivery Method: {{ $quote->delivery_method }} <br>
Other Services: {{ $quote->other_services }} <br>
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
