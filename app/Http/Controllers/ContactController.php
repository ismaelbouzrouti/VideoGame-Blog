<?php

namespace App\Http\Controllers;

use App\Models\ContactForm;
use App\Models\User;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showContact()
    {



        return view('contact.contact-page');
    }

    public function storeContactForm(Request $request)
    {

        $request->validate([

            'username' => 'required|string',
            'subject' => 'required|string',
            'message' => 'required|string'

        ]);

        // First check if the provided username is equal to the user's username
        if ($request->user()->username !== $request->username) {
            return redirect()->back()->with('error', 'Give your correct username!');
        }


        $contact = $request->user()->contactforms()->create([
            'userId' => $request->user()->userId,
            'username' => $request->username,
            'subject' => $request->subject,
            'message' => $request->message
        ]);


        $contact->save();

        return redirect()->back()->with('success', 'message was sent');
    }

    public function showAdminContactPage()
    {

        $contactForms = ContactForm::OrderBy('created_at', 'desc')->get();

        return view('contact.contact-adminpage', compact('contactForms'));



    }
}
