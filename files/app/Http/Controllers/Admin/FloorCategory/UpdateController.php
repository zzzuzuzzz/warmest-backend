<?php

namespace App\Http\Controllers\Admin\FloorCategory;

use App\Http\Controllers\Admin\NotificationsForController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Category\UpdateRequest;
use App\Models\FloorCategory;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, FloorCategory $category) {
        $date = $request->validated();
        $category->update($date);
        $passedTime = NotificationsForController::passedTime();
        $passedTimeApplication = NotificationsForController::passedTimeApplication();
        $questions = NotificationsForController::questions();
        $applications = NotificationsForController::applications();
        $numberNotification = NotificationsForController::numberNotification();
        $questionsForMsg = NotificationsForController::questionsForMsg();
        $applicationsForMsg = NotificationsForController::applications();


        return view('admin.floorCategory.show', compact('category','questions', 'passedTime','questionsForMsg', 'applicationsForMsg', 'applications', 'numberNotification', 'passedTimeApplication'
));
    }
}
