<?php

namespace App\Http\Controllers;

use App\Models\ClientContact;
use Illuminate\Http\Request;

class ClientContactsController extends Controller{

    public function __construct(){
    }

    public function index(){
        return view('contacts.index',[
            'contacts' => ClientContact::all()
        ]);
    }

    public function store(Request $request){
        $contact = new ClientContact();
        $contact->name = filter_var($request->name, FILTER_SANITIZE_STRING);
        $contact->email = filter_var($request->email, FILTER_SANITIZE_EMAIL);
        $contact->phone = filter_var($request->phone, FILTER_SANITIZE_STRING);
        $contact->comment = filter_var($request->comment, FILTER_SANITIZE_STRING);
        $contact->save();

        return redirect()->route('home');
    }
}
