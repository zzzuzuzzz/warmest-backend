<?php

namespace App\Http\Controllers\Site\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function __invoke() {
        $user = auth()->user();
        return view('site.profilePages.setting', compact('user'));
    }
}
