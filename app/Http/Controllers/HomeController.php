<?php

namespace App\Http\Controllers;

use App\Catalog;
use App\Slider;
use App\Subscribe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use TCG\Voyager\Models\Page;

class HomeController extends Controller
{
    public function index()
    {
        $about = Page::where('slug', '=', 'about')->first();
        $catalogTopThree = Catalog::where([['ratting', '=', 1],['status', '=', 'published']])->get();
        $sliders = Slider::where('status', '=', 1)->orderby('order')->get();
        return view('home',compact('about','catalogTopThree','sliders'));
    }

    public function subscribe(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email'
        ]);

        $insert = new Subscribe;
        $insert->email = $request->email;
        $insert->save();

        if (!$insert) {
            Session::flash('alert-danger', 'Please Post Again');
            return view('contact_us');
        }
        Session::flash('alert-success', 'Thank you');

        return redirect('/');
    }
}

