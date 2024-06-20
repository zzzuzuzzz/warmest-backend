<?php

namespace App\Http\Controllers\Admin\House;

use App\Http\Controllers\Admin\NotificationsForController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Houses\StoreRequest;
use App\Models\AddServiceHouse;
use App\Models\House;
use App\Models\ImageHouse;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request) {
        $date = $request->validated();

        House::firstOrCreate([
            'title' => $date['title']
        ], [
            'title' => $date['title'],
            'params_size' => $date['params_size'],
            'params_floors' =>  $date['params_floors'],
            'params_length' =>  $date['params_length'],
            'params_width' =>  $date['params_width'],

            'description' =>  $date['description'],

            'main_price' =>  $date['main_price'],
            'add_price' =>  $date['add_price'],
            'credit_info' =>  $date['credit_info'],

            'category_id' => $date['category_id'],
        ]);


        Storage::makeDirectory('public/images/' . $date['title']);
        foreach ($date['images'] as $img) {
            $imgPath = Storage::disk('public')->put('/images/' . $date['title'], $img);
            ImageHouse::firstOrCreate([
                'image' => $imgPath,
                'house_id' => (House::where('title', $date['title'])->get())[0]->id
                ]);
        }


        foreach ($date['add_services_ids'] as $as) {
            AddServiceHouse::firstOrCreate([
                'add_service_id' => $as,
                'house_id' => (House::where('title', $date['title'])->get())[0]->id
            ]);
        }


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
