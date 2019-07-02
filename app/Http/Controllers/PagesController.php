<?php

namespace App\Http\Controllers;

use App\Service;
use App\Category;

class PagesController extends Controller
{
    public function getCategory(Category $category)
    {
        return view('category', compact('category'));
    }

    public function getService($category, $service)
    {
        $service = Service::where('slug', $service)->first();
        return view('service', compact('service'));
    }
}
