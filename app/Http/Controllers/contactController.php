<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class contactController extends Controller
{

    public function submit(Request $req)
    {

        $contact = new Contact();
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->phone = $req->input('phone');

        $contact->save();

        return redirect()->route('home');
    }

    public function updateContact($id)
    {
        $contacts = new Contact;
        return view('update',['users' => $contacts->find($id)]);
    }

    public function destroy($id)
    {
        $user = Contact::find($id);
        $user->delete();
    }
}
