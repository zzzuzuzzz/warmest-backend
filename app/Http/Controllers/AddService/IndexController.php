<?php

namespace App\Http\Controllers\AddService;

use App\Http\Controllers\Controller;
use App\Models\AddService;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke() {
        $addServices = AddService::all();
        return view('admin.addService.index', compact('addServices'));
    }
}
