<?php

namespace App\Http\Controllers;

class BlogDetailsController extends Controller
{
    public function index() {
        return view('blog-details', [
            'title' => 'Chi Tiết Bài Viết'
        ]);
    }
}
