<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DemeterChain\C;
use App\Category;
use App\Service;

class PagesController extends Controller
{
    public function getCategory($category)
    {
        $category = Category::where('slug', $category)->first();
        return view('category', compact('category'));
    }

    public function getService($category, $service)
    {
        $service = Service::where('slug', $service)->first();
        return view('service', compact('service'));
    }
}
