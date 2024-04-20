<?php

namespace App\Http\Controllers\House;

use App\Http\Controllers\Controller;
use App\Models\House;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke() {
        $houses = House::all();
        return view('admin.house.index', compact('houses'));
    }
}
