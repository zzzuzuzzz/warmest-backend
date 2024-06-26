<?php

namespace App\Http\Controllers\Admin\House;

use App\Http\Controllers\Admin\NotificationsForController;
use App\Http\Controllers\Controller;
use App\Models\AddService;
use App\Models\AddServiceHouse;
use App\Models\Category;
use App\Models\House;
use App\Models\ImageHouse;

class ShowController extends Controller
{
    public function __invoke(House $house) {

        $category = Category::find($house->category_id);

        $images = [];
        foreach (ImageHouse::where('house_id', $house->id)->get() as $img) {
            $images[] = $img->image;
        }

        $addServices = [];
        foreach (AddServiceHouse::where('house_id', $house->id)->get() as $as) {
            $addServices[] = AddService::find($as->add_service_id);
        }
        $passedTime = NotificationsForController::passedTime();
        $questions = NotificationsForController::questions();
        $questionsForMsg = NotificationsForController::questionsForMsg();

        return view('admin.house.show', compact('house', 'category', 'images', 'addServices', 'questions', 'passedTime','questionsForMsg'
));
    }
}
