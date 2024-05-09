<?php

namespace App\Http\Controllers\Admin\AddService;

use App\Http\Controllers\Admin\NotificationsForController;
use App\Http\Controllers\Controller;
use App\Models\AddService;

class ShowController extends Controller
{
    public function __invoke(AddService $addService) {
        $passedTime = NotificationsForController::passedTime();
        $questions = NotificationsForController::questions();
        return view('admin.addService.show', compact('addService', 'questions', 'passedTime'));
    }
}
