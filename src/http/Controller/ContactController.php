<?php

namespace App\Package\contact\src\http\Controller;

use App\http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Package\contact\src\Models\Contact;
use App\Package\contact\src\Mail\ContactMailable;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
   public function index(){
    return view('contact::contact');
   }
   public function send(Request $request){
     Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message,$request->name));
     Contact::create($request->all());
     return redirect(route('contact'));
   }
}
