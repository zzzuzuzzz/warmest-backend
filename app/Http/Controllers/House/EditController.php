<?php

namespace App\Http\Controllers\House;

use App\Http\Controllers\Controller;
use App\Models\AddService;
use App\Models\Category;
use App\Models\House;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(House $house) {

        $categories = Category::all();
        $addServices = AddService::all();

        return view('admin.house.edit', compact('house', 'categories', 'addServices'));
    }
}
