<?php

namespace App\Http\Controllers\House;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddServices\UpdateRequest;
use App\Models\House;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, House $house) {
        $date = $request->validated();
        $house->update($date);

        return view('admin.house.show', compact('house'));
    }
}
