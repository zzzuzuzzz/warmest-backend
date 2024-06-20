<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\User;

class ProfileController extends Controller
{
    public function __invoke() {
        return redirect()->route('site.profile.favorite');
    }
}
