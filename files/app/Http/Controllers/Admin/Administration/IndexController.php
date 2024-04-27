<?php

namespace App\Http\Controllers\Admin\Administration;

use App\Http\Controllers\Controller;
use App\Models\Administration;

class IndexController extends Controller
{
    public function __invoke() {
        $administrations = Administration::all();
        return view('admin.administration.index', compact('administrations'));
    }
}
