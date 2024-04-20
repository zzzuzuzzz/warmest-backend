<?php

namespace App\Http\Controllers\AddService;

use App\Http\Controllers\Controller;
use App\Models\AddService;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(AddService $addService) {
        return view('admin.addService.edit', compact('addService'));
    }
}
