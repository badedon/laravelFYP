<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function __construct()
        {
            $this->middleware(['auth:sanctum', 'verified', 'is_admin']);
        }

        public function contactAdmin()
        {
            $contact= Contact::get();
            return view('\Backend\Contact\contact',compact('contact'));
        }

        public function createContact(Request $request)
        {
            $this->validate($request, [
                'name' => 'required',
                'email' => 'required',
                'subject' => 'required',
                'message' => 'required',

            ]);
            //handle file upload

            //for deleting image use unlink() function.
            //for storing image

            $contact= new Contact();
            $contact->name = $request->name;
            $contact->email = $request->email;
            $contact->subject = $request->subject;
            $contact->message = $request->message;
            $contact->save();
            return back()->with('contact_created', 'Your request has been sent successfully!');
        }

        public function getContact()
        {
            $contact= Contact::orderBy('id', 'DESC')->get();
            return view('contacts', compact('contact'));
        }


}
