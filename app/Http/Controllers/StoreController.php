<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequest;
use App\Models\Contact;
use RealRashid\SweetAlert\Facades\Alert;


class StoreController extends Controller
{
    public function storeContact(StoreRequest $request)
    {
        $contact = Contact::create($request->validated());
        Alert::success('Success', 'Your message has been sent successfully, Thank you!');

        return redirect()->back();
    }

}
