<?php

namespace App\Http\Controllers\Admin\House;

use App\Http\Controllers\Controller;
use App\Models\House;

class IndexController extends Controller
{
    public function __invoke() {
        $houses = House::all();
        return view('admin.house.index', compact('houses'));
    }
}
