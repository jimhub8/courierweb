<?php

namespace App\Http\Controllers;

use App\models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SubscriberMail;
use Newsletter;

class SubscriberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $subscriber = new Subscriber;
        // $subscriber->name = $request->name;
        $subscriber->email = $request->email;
        // $subscriber->user_id = Auth::id();
        $subscriber->save();
        Mail::send(new SubscriberMail($subscriber));
        // if ( ! Newsletter::isSubscribed($request->email) ) {
        //     Newsletter::subscribe($request->email);
        // }
        
        // $mail = Mail::send(['name' => $subscriber->email], function ($message) use ($subscriber) {
        //     $message->from('jimlaravel@gmail.com', 'Email Platform');
        //     $message->markdown('mails.subscriber');
        //     $message->to($subscriber->email);
        // });
        
        return $subscriber;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subscriber  $subscriber
     * @return \Illuminate\Http\Response
     */
    public function show(Subscriber $subscriber)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subscriber  $subscriber
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subscriber $subscriber)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subscriber  $subscriber
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subscriber $subscriber)
    {
        //
    }
}
