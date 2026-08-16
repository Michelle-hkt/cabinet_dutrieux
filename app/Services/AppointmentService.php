<?php

namespace App\Services;

use Illuminate\Support\Facades\Mail;
use App\Mail\AppointmentMail;
use App\Mail\AppointmentConfirmationMail;

class AppointmentService
{
    
        public function send(array $data): void
    {
        // Email destiné au Cabinet Dutrieux
        Mail::to(config('mail.contact_receiver'))
            ->send(new AppointmentMail($data));

        // Email de confirmation destiné au visiteur
        Mail::to($data['email'])
            ->send(new AppointmentConfirmationMail($data));
    }
    
}
