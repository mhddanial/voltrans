<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $title = 'Blog Page';
        $data1 = [
            'title' => 'Blog Title 1',
            'description' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ',
            'author' => 'John Doe',
            'date' => '2023-10-01',
        ];
        $data2 = [
            'title' => 'Blog Title 2',
            'description' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ',
            'author' => 'Jane Doe',
            'date' => '2023-10-02',
        ];
        return view('blog', compact('title','data1', 'data2'));
    }
}
