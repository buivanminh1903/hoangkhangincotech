<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailsServiceController extends Controller
{
    public function details_serivce() {
        return view('details_service', [
            'title' => 'Chi Tiết Dịch Vụ'
        ]);
    }
}
