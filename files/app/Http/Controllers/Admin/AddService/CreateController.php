<?php

namespace App\Http\Controllers\Admin\AddService;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke() {
        return view('admin.addService.create');
    }
}