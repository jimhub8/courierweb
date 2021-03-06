<?php

namespace App\paypal;

class Paypal
{
    protected $apiContext;

    public function __construct()
    {
        $apiContext = new \PayPal\Rest\ApiContext(
            new \PayPal\Auth\OAuthTokenCredential(
                config('services.paypal.id'), // ClientID
                config('services.paypal.secret')   // ClientID
            )
        );
    }
}
