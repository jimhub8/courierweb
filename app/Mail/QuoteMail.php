<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\models\Quote;

class QuoteMail extends Mailable
{
    use Queueable, SerializesModels;
    public $quote;

    /**
     * Create a new quote instance.
     *
     * @return void
     */
    public function __construct(Quote $quote)
    {
        $this->quote = $quote;
    }

    /**
     * Build the quote.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->quote->email)
                ->markdown('mails/quote')
                ->to('jimlaravel@gmail.com')
                ->subject('Quotation');
    }
}
