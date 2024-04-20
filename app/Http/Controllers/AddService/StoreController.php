<?php

namespace App\Http\Controllers\AddService;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddServices\StoreRequest;
use App\Models\AddService;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request) {
        $date = $request->validated();
        AddService::firstOrCreate($date);

        return redirect()->route('addService.index');
    }
}
