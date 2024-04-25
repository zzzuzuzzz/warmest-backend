<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;

class CatalogController extends Controller
{
    public function __invoke() {
        return view('site.catalog');
    }
}
