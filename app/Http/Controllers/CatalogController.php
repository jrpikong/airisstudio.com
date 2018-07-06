<?php

namespace App\Http\Controllers;

use App\Catalog;
use App\CategoryCatalog;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index(Request $request)
    {
        $catalogs = Catalog::where('status', '=', 'published')->paginate(10);
        $requestUri = $request->path();
        return view('catalog_list', compact('catalogs','requestUri'));
    }

    public function byCategory(Request $request,$category)
    {
        $category_slug = CategoryCatalog::where('slug', '=', $category)->firstOrFail();
        $catalogs = Catalog::where([['status', '=', 'published'], ['category_catalog_id', '=', $category_slug->id]])->paginate(10);
        $requestUri = $request->path();
        return view('catalog_list', compact('catalogs','requestUri'));

    }

    public function catalogDetail($slug)
    {
        $catalog = Catalog::where('slug','=',$slug)->firstOrFail();
        return view('catalog_detail', compact('catalog'));
    }
}
