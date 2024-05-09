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

//        if ($date['image_one']) {
//            $date['image_one'] = Storage::disk('public')->put('/images/' . $date['finder_name'], $date['image_one']);
//        }
//        if ($date['image_two']) {
//            $date['image_two'] = Storage::disk('public')->put('/images/' . $date['finder_name'], $date['image_two']);
//        }
//        if ($date['image_three']) {
//            $date['image_three'] = Storage::disk('public')->put('/images/' . $date['finder_name'], $date['image_three']);
//        }
//        if ($date['image_four']) {
//            $date['image_four'] = Storage::disk('public')->put('/images/' . $date['finder_name'], $date['image_four']);
//        }
//        if ($date['image_facade_one']) {
//            $date['image_facade_one'] = Storage::disk('public')->put('/images/' . $date['finder_name'], $date['image_facade_one']);
//        }
//        if ($date['image_facade_two']) {
//            $date['image_facade_two'] = Storage::disk('public')->put('/images/' . $date['finder_name'], $date['image_facade_two']);
//        }
//        if ($date['image_facade_three']) {
//            $date['image_facade_three'] = Storage::disk('public')->put('/images/' . $date['finder_name'], $date['image_facade_three']);
//        }
//        if ($date['image_facade_four']) {
//            $date['image_facade_four'] = Storage::disk('public')->put('/images/' . $date['finder_name'], $date['image_facade_four']);
//        }
//        if ($date['image_plan_one']) {
//            $date['image_plan_one'] = Storage::disk('public')->put('/images/' . $date['finder_name'], $date['image_plan_one']);
//        }
//        if ($date['image_plane_two']) {
//            $date['image_plane_two'] = Storage::disk('public')->put('/images/' . $date['finder_name'], $date['image_plane_two']);
//        }
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
        $questions = NotificationsForController::questions();
        $questionsForMsg = NotificationsForController::questionsForMsg();



        return redirect()->route('house.index', compact('questions', 'passedTime','questionsForMsg'
));
    }
}
