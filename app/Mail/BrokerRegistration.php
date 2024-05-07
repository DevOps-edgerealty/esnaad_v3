<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Attachment;
 
class BrokerRegistration extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    
    public function __construct($data)
    {
         $this->data = $data;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'ESNAAD Notification - New Broker Registration',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.brokerReg',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [
            // Attachment::fromPath($this->data['power_of_atty_or_moa_id_path'])
            //     ->as($this->data['power_of_atty_or_moa_id_name'])
            //     ->withMime($this->data['power_of_atty_or_moa_id_type']),

            Attachment::fromPath($this->data['valid_trade_license_id_path'])
                ->as($this->data['valid_trade_license_id_name'])
                ->withMime($this->data['valid_trade_license_id_type']),    

            // Attachment::fromPath($this->data['rera_certificate_id_path'])
            //     ->as($this->data['rera_certificate_id_name'])
            //     ->withMime($this->data['rera_certificate_id_type']),

            // Attachment::fromPath($this->data['broker_card_id_path'])
            //     ->as($this->data['broker_card_id_name'])
            //     ->withMime($this->data['broker_card_id_type']),

            // Attachment::fromPath($this->data['valid_vat_certificate_or_noc_id_path'])
            //     ->as($this->data['valid_vat_certificate_or_noc_id_name'])
            //     ->withMime($this->data['valid_vat_certificate_or_noc_id_type']),

            // Attachment::fromPath($this->data['passport_visa_eid_id_path'])
            //     ->as($this->data['passport_visa_eid_id_name'])
            //     ->withMime($this->data['passport_visa_eid_id_type']),                
        ];
    }
}
