<?php

namespace App\Http\Controllers\Admin\Application;

use App\Http\Controllers\Admin\NotificationsForController;
use App\Http\Controllers\Controller;
use App\Models\Application;

class DeleteController extends Controller
{
    public function __invoke(Application $application) {
        $application->delete();
        $passedTime = NotificationsForController::passedTime();
        $questions = NotificationsForController::questions();
        $questionsForMsg = NotificationsForController::questionsForMsg();



        return redirect()->route('application.index', compact('questions', 'passedTime','questionsForMsg'
));
    }
}
