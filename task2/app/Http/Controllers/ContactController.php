<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(){
        return view('fontend.contact');
    }
    
    public function contact_store(Request $request){
        $request->validate([
            'contact_name'=>'required|max:50',
            'contact_mobile'=>'required|max:50',
            'contact_email'=>'required|max:50',
            'contact_msg'=>'required|max:100',
        ]);
        Contact::create([
            'contact_name'=>$request->contact_name,
            'contact_mobile'=>$request->contact_mobile,
            'contact_email'=>$request->contact_email,
            'contact_message'=>$request->contact_msg,
        ]);
        return redirect()->back();
    }
}
