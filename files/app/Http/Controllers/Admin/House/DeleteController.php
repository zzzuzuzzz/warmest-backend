<?php

namespace App\Http\Controllers\Admin\House;

use App\Http\Controllers\Controller;
use App\Models\House;

class DeleteController extends Controller
{
    public function __invoke(House $house) {
        $house->delete();

        return redirect()->route('house.index');
    }
}
