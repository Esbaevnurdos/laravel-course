<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
class ContactController extends Controller
{
    //
    public function submit(ContactRequest $request) {
        // $validation = $request->validate([
        //     'message'=> 'required|min:15|max:500',
        //     'email'=> 'required|min:5|max:50'
        // ]);
        $contact = new Contact();
        $contact -> name = $request->input('name');
        $contact -> email = $request->input('email');
        $contact -> message = $request->input('message');

        $contact -> save();

        return redirect()->route('home');


    }

    public function allData() {
        $contact = new Contact;
        return view('messages', ['data' => $contact-> all()]);
    }

    public function showOneMessage($id) {
        $contact = new Contact();
        return view('one-message', ['data' => $contact->find($id)]);
    }


    public function updateMessage($id) {
        $contact = new Contact();
        return view('update-message', ['data' => $contact-> find($id)]);
    }


        public function updateMessageSubmit($id, ContactRequest $request) {
        // $validation = $request->validate([
        //     'message'=> 'required|min:15|max:500',
        //     'email'=> 'required|min:5|max:50'
        // ]);
        $contact = Contact::find($id);
        $contact -> name = $request->input('name');
        $contact -> email = $request->input('email');
        $contact -> message = $request->input('message');

        $contact -> save();

        return redirect()->route('contact-data-one', $id)-> with('success', 'Message added');


    }

    public function deleteMessage($id) {
        Contact::find($id)->delete();
    }
}
