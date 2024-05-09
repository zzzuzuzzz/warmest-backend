<?php

namespace App\Http\Controllers\Admin\AddService;

use App\Http\Controllers\Admin\NotificationsForController;
use App\Http\Controllers\Controller;
use App\Models\AddService;

class DeleteController extends Controller
{
    public function __invoke(AddService $addService) {
        $addService->delete();
        $passedTime = NotificationsForController::passedTime();
        $questions = NotificationsForController::questions();
        $questionsForMsg = NotificationsForController::questionsForMsg();



        return redirect()->route('addService.index', compact('questions', 'passedTime','questionsForMsg'
));
    }
}
