<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\models\Subscriber;

class SubscriberMail extends Mailable
{
    use Queueable, SerializesModels;
    public $subscriber;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Subscriber $subscriber)
    {
        $this->subscriber = $subscriber;
        // $this->name = $subscriber->email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->markdown('mails/subscriber');

        // dd($this->subscriber);
        return $this->markdown('mails/subscriber')
            ->to($this->subscriber->email)
            ->subject('Subscription');
    }
}
