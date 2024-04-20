<?php

namespace App\Http\Controllers\House;

use App\Http\Controllers\Controller;
use App\Models\AddService;
use App\Models\Category;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke() {

        $categories = Category::all();
        $addServices = AddService::all();

        return view('admin.house.create', compact('categories', 'addServices'));
    }
}
