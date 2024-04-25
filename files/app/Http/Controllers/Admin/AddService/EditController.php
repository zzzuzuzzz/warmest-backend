<?php

namespace App\Http\Controllers\Admin\AddService;

use App\Http\Controllers\Controller;
use App\Models\AddService;

class EditController extends Controller
{
    public function __invoke(AddService $addService) {
        return view('admin.addService.edit', compact('addService'));
    }
}
