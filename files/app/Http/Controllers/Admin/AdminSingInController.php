<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AdminSingInController extends Controller
{
    public function __invoke() {
        return view('admin.main.singin');
    }
}
