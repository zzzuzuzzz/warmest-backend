<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Applications\StoreRequest;
use App\Models\Application;

class ApplicationStoreController extends Controller
{
    public function __invoke(StoreRequest $request) {
        $date = $request->validated();
        Application::create($date);

        return redirect()->route('site.index');
    }
}
