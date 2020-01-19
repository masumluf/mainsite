<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function sendForm(Request $request){
        request()->validate(['name' => 'required'],['email' => 'required'],['mobile' => 'required'],['body' => 'required']);
        Contact::create($request->all());
        return back()->with('success','Message Has been sent successfully!');;

    }
}
