<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $popular_post = DB::table('post')
            ->orderByDesc('id')
            ->limit('2')
            ->get();
        return view('home', [
            'title' => 'Hoàng Khang Incotech',
            'popular_post' => $popular_post
        ]);
    }
}
