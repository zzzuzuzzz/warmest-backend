<?php

namespace App\Http\Controllers\Admin\House;

use App\Http\Controllers\Controller;
use App\Models\AddService;
use App\Models\Category;

class CreateController extends Controller
{
    public function __invoke() {

        $categories = Category::all();
        $addServices = AddService::all();

        return view('admin.house.create', compact('categories', 'addServices'));
    }
}
