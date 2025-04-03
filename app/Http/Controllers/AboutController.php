<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $title = 'About Page';
        $data = [
            'name' => 'Muhammad Danial',
            'description' => 'This is the about page of our application.'
        ];
        return view('about', compact('title','data'));
    }
}
