<?php

namespace App\Http\Controllers\AddService;

use App\Http\Controllers\Controller;
use App\Models\AddService;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(AddService $addService) {
        $addService->delete();

        return redirect()->route('addService.index');
    }
}
