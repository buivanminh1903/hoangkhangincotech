<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PartnerController extends Controller
{
    public function index() {
        $popular_post = DB::table('post')
            ->orderByDesc('id')
            ->limit('2')
            ->get();
        return view('partner', [
            'title' => 'Đối Tác',
            'popular_post' => $popular_post
        ]);
    }
}
