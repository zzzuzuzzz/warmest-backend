<?php

namespace App\Http\Controllers\Admin\Administration;

use App\Http\Controllers\Controller;
use App\Models\Administration;

class ShowController extends Controller
{
    public function __invoke(Administration $administration) {
        return view('admin.administration.show', compact('administration'));
    }
}
