<?php

namespace App\Http\Controllers;
use App\Models\ourprojectModel;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index() {

        $out_projectlm3 = DB::table('project')
            ->orderByDesc('id')
            ->limit( '3')
            ->get();
        $out_projectlm2 = DB::table('project')
            ->orderByDesc('id')
            ->limit( '2')
            ->get();

        return view('home', [
            'title' => 'Hoàng Khang Incotech',
            'out_projectlm3' => $out_projectlm3,
            'out_projectlm2' => $out_projectlm2
        ]);
    }

}
