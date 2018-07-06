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

        $data = $request->all();
        unset($data['_token']);
        $insert = ContactUs::insert($data);
        if (!$insert) {
            Session::flash('alert-danger', 'Please Post Again');
            return view('contact_us');
        }
        Session::flash('alert-success', 'Thank you');
        return view('contact_us');
    }
}
