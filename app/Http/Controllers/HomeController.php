<?php

namespace App\Http\Controllers;

use App\Models\ourprojectModel;
use Illuminate\Support\Facades\DB;
use Mail;

class HomeController extends Controller
{
    public function index()
    {
        $popular_post = DB::table('post')
            ->orderByDesc('id')
            ->limit('2')
            ->get();

        $out_projectlm3 = DB::table('project')
            ->orderByDesc('id')
            ->limit('3')
            ->get();
        $out_projectlm2 = DB::table('project')
            ->orderByDesc('id')
            ->limit('2')
            ->get();

        $latestblog = DB::table('post')
            ->orderByDesc('id')
            ->limit('3')
            ->get();

        $reviews = DB::table('reviews')
            ->orderByDesc('id')
            ->limit('3')
            ->get();

        return view('home', [
            'title' => 'Hoàng Khang Incotech',
            'popular_post' => $popular_post,
            'out_projectlm3' => $out_projectlm3,
            'out_projectlm2' => $out_projectlm2,
            'latestblog' => $latestblog,
            'reviews' => $reviews
        ]);
    }
}
