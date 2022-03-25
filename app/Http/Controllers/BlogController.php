<?php

namespace App\Http\Controllers;

class BlogController extends Controller
{
    public function index() {
        return view('blog', [
            'title' => 'Danh Sách Bài Viết'
        ]);
    }
}
