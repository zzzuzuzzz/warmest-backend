<?php

namespace App\Http\Controllers\Admin\Faq;

use App\Http\Controllers\Admin\NotificationsForController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Faqs\StoreRequest;
use App\Models\Faq;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request) {
        $date = $request->validated();
        Faq::firstOrCreate($date);
        $passedTime = NotificationsForController::passedTime();
        $passedTimeApplication = NotificationsForController::passedTimeApplication();
        $questions = NotificationsForController::questions();
        $applications = NotificationsForController::applications();
        $numberNotification = NotificationsForController::numberNotification();
        $questionsForMsg = NotificationsForController::questionsForMsg();
        $applicationsForMsg = NotificationsForController::applications();


        return redirect()->route('faq.index', compact('questions', 'passedTime','questionsForMsg', 'applicationsForMsg', 'applications', 'numberNotification', 'passedTimeApplication'
));
    }
}
