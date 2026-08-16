<?php

namespace App\Http\Controllers;

use App\Http\Requests\AppointmentRequest;
use App\Services\AppointmentService;
use Illuminate\Http\RedirectResponse;

class AppointmentController extends Controller
{
    public function __construct(
        private AppointmentService $appointmentService
    ) {}

    public function send(AppointmentRequest $request): RedirectResponse
    {
        $this->appointmentService->send($request->validated());

        return back()->with(
            'success',
            'Votre demande a bien été envoyée. Un email de réception vous sera envoyé.'
        );
    }
}