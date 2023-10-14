<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstOne extends Controller
{

    
    public function index () {
        return view('welcome');
    }
    
    public function about () {
        return view('About');
    }
    public function contact () {
        return view('contact');
    }
    
    public function category ($category = null, $item = null) {
        if (isset($category)) {
            if (isset($item)) {
                return '<h1>' . $item . '</h1>';
            }
            return '<h1>' . $category . '</h1>';
        }
        return '<h1>Store</h1>';
    }
    
    public function countries ($countries = null, $capitals = null) {
        if (isset($countries)) {
            if (isset($capitals)) {
                return '<h1>' . $capitals . '</h1>';
            }
            return $countries;
        }
        return '<h1>STORE</h1>';
    }
}

