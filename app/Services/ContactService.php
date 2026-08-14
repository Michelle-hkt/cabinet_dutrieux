<?php

namespace App\Services;

use Illuminate\Support\Facades\Mail;
use App\Mail\ContactConfirmationMail;
use App\Mail\ContactRequestMail;

class ContactService
{
     public function send(array $data): void
    {
        // Email destiné au Cabinet Dutrieux
        Mail::to(config('mail.contact_receiver'))
            ->send(new ContactRequestMail($data));

        // Email de confirmation destiné au visiteur
        Mail::to($data['email'])
            ->send(new ContactConfirmationMail($data));
    }
}
