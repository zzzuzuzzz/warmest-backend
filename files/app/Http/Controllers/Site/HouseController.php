<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HouseController extends Controller
{
    public function __invoke() {
        return view('site.houses');
    }
}
