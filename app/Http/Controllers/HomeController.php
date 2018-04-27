<?php

namespace App\Http\Controllers;

use App\Catalog;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Page;

class HomeController extends Controller
{
    public function index()
    {
        $about = Page::where('slug', '=', 'about')->first();
        $catalogTopThree = Catalog::where('ratting', '=', 1)->get();
        return view('home',compact('about','catalogTopThree'));
    }
}

