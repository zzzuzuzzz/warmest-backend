<?php

namespace App\Http\Controllers\Admin\AddService;

use App\Http\Controllers\Controller;
use App\Models\AddService;

class DeleteController extends Controller
{
    public function __invoke(AddService $addService) {
        $addService->delete();

        return redirect()->route('addService.index');
    }
}
