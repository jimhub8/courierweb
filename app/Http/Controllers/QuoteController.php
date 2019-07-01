<?php

namespace App\Http\Controllers;

use App\models\Quote;
use Illuminate\Http\Request;
use App\Mail\QuoteMail;
use Illuminate\Support\Facades\Mail;

class QuoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $quote = new Quote;
        $quote->name = $request->name;
        $quote->email = $request->email;
        $quote->pickup_address = $request->pickup_address;
        $quote->delivery_address = $request->delivery_address;
        $quote->delivery_method = $request->delivery_method;
        $quote->courier_description = $request->courier_description;
        $quote->other_services = $request->other_services;
        $quote->save();
        Mail::send(new QuoteMail($quote));
        return $quote;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\models\Quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function show(Quote $quote)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\models\Quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function edit(Quote $quote)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\models\Quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quote $quote)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\models\Quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quote $quote)
    {
        //
    }
}
