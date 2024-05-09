<?php

namespace App\Http\Controllers\Admin\Administration;

use App\Http\Controllers\Controller;
use App\Models\Administration;

class EditController extends Controller
{
    public function __invoke(Administration $administration) {
        return view('admin.administration.edit', compact('administration'));
    }
}
