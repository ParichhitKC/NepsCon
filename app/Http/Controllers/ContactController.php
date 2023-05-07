<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contactForm()
    {
        return view('frontend.contact');
    }

    public function storeContactForm(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|digits:10|numeric',
            'message' => 'required',
        ]);

        $input = $request->all();

        Contact::create($input);

        //  Send mail to admin
//        \Mail::send('contactMail', array(
//            'name' => $input['name'],
//            'email' => $input['email'],
//            'phone' => $input['phone'],
//            'message' => $input['message'],
//        ), function ($message) use ($request) {
//            $message->from($request->email);
//            $message->to('admin@admin.com', 'Admin')->subject($request->get('message'));
//        });

        return redirect()->back()->with(['success' => 'Contact Form Submit Successfully']);
    }
    public function contactView()
    {
        $Contact=contact::all();
    return view ('contact.contact')->with(compact('Contact'));
    }
}
