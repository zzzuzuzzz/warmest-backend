<?php

namespace App\Http\Controllers\AddService;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddServices\UpdateRequest;
use App\Models\AddService;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, AddService $addService) {
        $date = $request->validated();
        $addService->update($date);

        return view('admin.addService.show', compact('addService'));
    }
}
