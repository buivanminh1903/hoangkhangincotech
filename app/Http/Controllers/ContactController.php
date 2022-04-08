<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function index()
    {
        $popular_post = DB::table('post')
            ->orderByDesc('id')
            ->limit('2')
            ->get();
        return view('contact', [
            'title' => 'Liên Hệ',
            'popular_post' => $popular_post
        ]);
    }
}
