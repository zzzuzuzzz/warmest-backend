<?php

namespace App\Http\Controllers\Admin\AddService;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddServices\StoreRequest;
use App\Models\AddService;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request) {
        $date = $request->validated();
        AddService::firstOrCreate($date);

        return redirect()->route('addService.index');
    }
}
