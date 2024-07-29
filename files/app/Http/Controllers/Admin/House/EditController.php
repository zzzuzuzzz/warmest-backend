<?php

namespace App\Http\Controllers\Admin\House;

use App\Http\Controllers\Admin\NotificationsForController;
use App\Http\Controllers\Controller;
use App\Models\AddService;
use App\Models\AddServiceHouse;
use App\Models\MaterialCategory;
use App\Models\House;
use App\Models\ImageHouse;

class EditController extends Controller
{
    public function __invoke(House $house) {

        $categories = MaterialCategory::all();
        $addServices = AddService::all();
        $addServiceHouses = AddServiceHouse::where('house_id', $house->id)->get();
        $addServiceHousesList = [];
        if (isset($addServiceHouses)) {
            foreach ($addServiceHouses as $ash) {
                $addServiceHousesList[] = $ash->id;
            }
        }
        $imageHouse = ImageHouse::where('house_id', $house->id)->get();
        $imageHouseList = [];
        if (isset($imageHouse)) {
            foreach ($imageHouse as $ih) {
                $imageHouseList[] = $ih->image;
            }
        }
        $passedTime = NotificationsForController::passedTime();
        $passedTimeApplication = NotificationsForController::passedTimeApplication();
        $questions = NotificationsForController::questions();
        $applications = NotificationsForController::applications();
        $numberNotification = NotificationsForController::numberNotification();
        $questionsForMsg = NotificationsForController::questionsForMsg();
        $applicationsForMsg = NotificationsForController::applications();


        return view('admin.house.edit', compact('house', 'categories', 'addServices', 'addServiceHousesList', 'imageHouseList', 'questions', 'passedTime','questionsForMsg', 'applicationsForMsg', 'applications', 'numberNotification', 'passedTimeApplication'
));
    }
}
