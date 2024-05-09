<?php

namespace App\Http\Controllers\Admin\AddService;

use App\Http\Controllers\Admin\NotificationsForController;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddServices\UpdateRequest;
use App\Models\AddService;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, AddService $addService) {
        $date = $request->validated();
        $addService->update($date);
        $passedTime = NotificationsForController::passedTime();
        $questions = NotificationsForController::questions();

        return view('admin.addService.show', compact('addService', 'questions', 'passedTime'));
    }
}
