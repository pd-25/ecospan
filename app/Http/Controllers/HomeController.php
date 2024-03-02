<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index() : View
    {
        return view('index');
    }


    public function aboutUs() : View
    {
        return view('about-us');
    }


    public function contactUs() : View
    {
        return view('contact-us');
    }


    public function contact() : View
    {
        return view('contact');
    }


    public function gallery() : view
    {
        $galleries = Gallery::get();

        return view('gallery', ['galleries' => $galleries]);
    }


    public function productDetail($productId) : view
    {
        $product = Product::where('id', $productId)->first();

        return view('product-details', ['product' => $product]);
    }
}
