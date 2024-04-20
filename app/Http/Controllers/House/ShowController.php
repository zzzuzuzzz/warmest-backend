<?php

namespace App\Http\Controllers\House;

use App\Http\Controllers\Controller;
use App\Models\House;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(House $house) {
        return view('admin.house.show', compact('house'));
    }
}
