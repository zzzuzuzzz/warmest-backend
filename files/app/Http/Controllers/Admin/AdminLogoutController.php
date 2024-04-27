<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AdminLogoutController extends Controller
{
    public function __invoke() {
        setcookie ("auth", "", time() - 3600, '/');
        return redirect()->route('site.index');
    }
}
