<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function message(){
        $messages=Contact::all();
        return view('admin.contact.contact',compact('messages'));
    }
    public function message_delete($id){
        Contact::find($id)->delete();
        return redirect()->back();
        
    }
}
