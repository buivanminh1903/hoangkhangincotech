<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DetailsServiceController extends Controller
{
    public function details_serivce() {
        $popular_post = DB::table('post')
            ->orderByDesc('id')
            ->limit('2')
            ->get();
        return view('details_service', [
            'title' => 'Chi Tiết Dịch Vụ',
            'popular_post' => $popular_post
        ]);
    }
}
