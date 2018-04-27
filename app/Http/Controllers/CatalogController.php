<?php

namespace App\Http\Controllers;

use App\Catalog;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function catalogDetail($slug)
    {
        $catalog = Catalog::where('slug','=',$slug)->firstOrFail();
        return view('catalog_detail', compact('catalog'));
    }
}
