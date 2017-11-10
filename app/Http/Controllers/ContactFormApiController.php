<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use LockSoftwares\Handlers\ContactFormHandler;
use LockSoftwares\Repositories\ContactFormRepository;

class ContactFormApiController extends Controller
{
    public function __invoke(ContactFormRequest $request, ContactFormRepository $repository)
    {
        $contact = $repository->make($request->all());

        $contact->save();

        $contact = $contact->fresh();

        (new ContactFormHandler($contact))->handle();

        return response()->json([
            'success' => true,
            'model' => $contact
        ]);
    }
}
