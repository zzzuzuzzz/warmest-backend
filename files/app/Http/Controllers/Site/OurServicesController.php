<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OurServicesController extends Controller
{
    public function __invoke() {
        return view('site.addServices');
    }
}
