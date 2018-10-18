<?php

namespace App\Mail;

use App\WifiScan;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WifiScanSentMail extends Mailable
{
    use Queueable, SerializesModels;

    public $wifiScan;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(WifiScan $wifiScan)
    {
        $this->wifiScan = $wifiScan;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.wifiscan-request-sent');
    }
}
