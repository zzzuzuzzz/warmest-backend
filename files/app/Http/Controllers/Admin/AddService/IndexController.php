<?php

namespace App\Http\Controllers\Admin\AddService;

use App\Http\Controllers\Admin\NotificationsForController;
use App\Http\Controllers\Controller;
use App\Models\AddService;

class IndexController extends Controller
{
    public function __invoke() {
        $addServices = AddService::all();
        $passedTime = NotificationsForController::passedTime();
        $questions = NotificationsForController::questions();

        return view('admin.addService.index', compact('addServices', 'questions', 'passedTime'));
    }
}
