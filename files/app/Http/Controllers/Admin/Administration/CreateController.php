<?php

namespace App\Http\Controllers\Admin\Administration;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke() {
        return view('admin.administration.create');
    }
}
