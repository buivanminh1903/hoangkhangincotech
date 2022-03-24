<?php

namespace App\Http\Controllers;

class ServiceController extends Controller
{
    public function index() {
        return view('service', [
            'title' => 'Danh Sách Dịch Vụ'
        ]);
    }
}
