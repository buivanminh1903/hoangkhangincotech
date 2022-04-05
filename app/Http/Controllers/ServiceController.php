<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    public function index() {
        $popular_post = DB::table('post')
            ->orderByDesc('id')
            ->limit('2')
            ->get();
        return view('service', [
            'title' => 'Danh Sách Dịch Vụ',
            'popular_post'=> $popular_post
        ]);
    }
}
