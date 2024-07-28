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
            'mezzanine' => $date['mezzanine'],
            'main_price' =>  $date['main_price'],
            'add_price' =>  $date['add_price'],
            'credit' => $date['credit_info'],


            'description' =>  $date['description'],
            'article' => $date['article'],
            'finishing' => $date['finishing'],
            'number_of_bedrooms' => $date['number_of_bedrooms'],
            'electricity' => $date['electricity'],
            'water' => $date['water'],
            'gas' => $date['gas'],


            'floor_category_id' => $date['floor_category_id'],
            'material_category_id' => $date['material_category_id'],
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
