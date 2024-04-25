<?php

namespace App\Http\Controllers\Admin\House;

use App\Http\Controllers\Controller;
use App\Models\AddService;
use App\Models\Category;
use App\Models\House;

class EditController extends Controller
{
    public function __invoke(House $house) {

        $categories = Category::all();
        $addServices = AddService::all();

        return view('admin.house.edit', compact('house', 'categories', 'addServices'));
    }
}
