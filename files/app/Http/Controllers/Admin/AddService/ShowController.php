<?php

namespace App\Http\Controllers\Admin\AddService;

use App\Http\Controllers\Controller;
use App\Models\AddService;

class ShowController extends Controller
{
    public function __invoke(AddService $addService) {
        return view('admin.addService.show', compact('addService'));
    }
}
