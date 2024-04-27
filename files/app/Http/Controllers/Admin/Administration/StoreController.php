<?php

namespace App\Http\Controllers\Admin\Administration;

use App\Http\Controllers\Controller;
use App\Http\Requests\Administrations\StoreRequest;
use App\Models\Administration;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request) {
        $date = $request->validated();
        Administration::firstOrCreate($date);

        return redirect()->route('administration.index');
    }
}
