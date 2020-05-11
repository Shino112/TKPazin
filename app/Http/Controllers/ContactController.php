<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Contact; 
use Mail; 

class ContactController extends Controller { 

      public function getContact() { 

       return view('frontend.kontakt'); 
     } 

      public function saveContact(Request $request) { 

        $this->validate($request, [
            'ime' => 'required',
            'prezime' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'phone_number' => 'required',
            'message' => 'required'
        ]);

        $contact = new Contact;

        $contact->ime = $request->ime;
        $contact->prezime = $request->prezime;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->phone_number = $request->phone_number;
        $contact->message = $request->message;

        $contact->save();

        \Mail::send('contact_email',
             array(
                 'ime' => $request->get('ime'),
                 'prezime' => $request->get('prezime'),
                 'email' => $request->get('email'),
                 'subject' => $request->get('subject'),
                 'phone_number' => $request->get('phone_number'),
                 'user_message' => $request->get('message'),
             ), function($message) use ($request)
               {
                  $message->from($request->email);
                  $message->to('tkpazin@gmail.com');
               });
        
        return back()->with('success', 'Hvala na poruci! Odgovorimo u što kraćem roku.');

    }
}