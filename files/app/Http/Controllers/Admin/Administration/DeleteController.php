<?php

namespace App\Http\Controllers\Admin\Administration;

use App\Http\Controllers\Controller;
use App\Models\Administration;

class DeleteController extends Controller
{
    public function __invoke(Administration $administration) {
        $administration->delete();

        return redirect()->route('administration.index');
    }
}
