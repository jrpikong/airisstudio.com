<?php

namespace App\Http\Controllers;

use App\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('contact_us');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $insert = new ContactUs;
        $insert->name = $request->name;
        $insert->email = $request->email;
        $insert->phone = $request->phone;
        $insert->subject = $request->subject;
        $insert->message = $request->message;
        $insert->save();

        if (!$insert) {
            Session::flash('alert-danger', 'Please Post Again');
            return view('contact_us');
        }
        Session::flash('alert-success', 'Thank you');
        return view('contact_us');
    }
}
