<?php

namespace App\Http\Controllers\Admin\Application;

use App\Http\Controllers\Admin\NotificationsForController;
use App\Http\Controllers\Controller;
use App\Models\Application;

class CreateController extends Controller
{
    public function __invoke(Application $application) {

        $passedTime = NotificationsForController::passedTime();
        $questions = NotificationsForController::questions();
        $questionsForMsg = NotificationsForController::questionsForMsg();



        return view('admin.application.create', compact('application','questions', 'passedTime','questionsForMsg'
));
    }
}
