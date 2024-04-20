<?php

namespace App\Http\Controllers\AddService;

use App\Http\Controllers\Controller;
use App\Models\AddService;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(AddService $addService) {
        return view('admin.addService.show', compact('addService'));
    }
}
