<?php

namespace App\Http\Controllers\Admin\House;

use App\Http\Controllers\Admin\NotificationsForController;
use App\Http\Controllers\Controller;
use App\Models\AddServiceHouse;
use App\Models\House;
use App\Models\ImageHouse;
use Illuminate\Support\Facades\Storage;

class DeleteController extends Controller
{
    public function __invoke(House $house) {
        AddServiceHouse::where('house_id', $house->id)->delete();
        ImageHouse::where('house_id', $house->id)->delete();
        Storage::disk('public')->delete('images/' . $house->title);
        $house->delete();
        $passedTime = NotificationsForController::passedTime();
        $passedTimeApplication = NotificationsForController::passedTimeApplication();
        $questions = NotificationsForController::questions();
        $applications = NotificationsForController::applications();
        $numberNotification = NotificationsForController::numberNotification();
        $questionsForMsg = NotificationsForController::questionsForMsg();
        $applicationsForMsg = NotificationsForController::applications();


        return redirect()->route('house.index', compact('questions', 'passedTime','questionsForMsg', 'applicationsForMsg', 'applications', 'numberNotification', 'passedTimeApplication'
));
    }
}
