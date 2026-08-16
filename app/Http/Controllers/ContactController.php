<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Services\ContactService;
use Illuminate\Http\RedirectResponse;

class ContactController extends Controller
{

    public function __construct(private ContactService $contactService) {}

    public function send(ContactRequest $request): RedirectResponse
    {
        $this->contactService->send($request->validated());

        return back()->with(
            'success',
            'Votre demande a bien été envoyée. Un email de réception vous sera envoyé.'
        );
    }

}
