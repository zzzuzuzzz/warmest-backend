<?php

namespace App\Http\Controllers\House;

use App\Http\Controllers\Controller;
use App\Models\House;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(House $house) {
        $house->delete();

        return redirect()->route('house.index');
    }
}
