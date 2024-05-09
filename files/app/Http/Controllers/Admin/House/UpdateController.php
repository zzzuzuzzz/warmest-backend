<?php

namespace App\Http\Controllers\Admin\House;

use App\Http\Controllers\Admin\NotificationsForController;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddServices\UpdateRequest;
use App\Models\AddService;
use App\Models\Category;
use App\Models\House;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, House $house) {
        dd($request);
        $date = $request->validated();
        dd($date);

//        $date['preview_image'] = Storage::disk('public')->put('/images', $date['preview_image']);
        Storage::makeDirectory('public/images/' . $date['finder_name']);
        $names = ['image_one', 'image_two', 'image_three', 'image_four', 'image_facade_one', 'image_facade_two', 'image_facade_three', 'image_facade_four', 'image_plan_one', 'image_plan_two'];
        foreach ($names as $name) {
            if ($date[$name]) {
                $date[$name] = Storage::disk('public')->put('/images/' . $date['finder_name'], $date[$name]);
            }
        }
//        $addServiceIds = $date['add_services_ids'];
//        $addServiceList = '';
//        foreach ($addServiceIds as $addServiceId) {
//            $addServiceList = $addServiceList . $addServiceId . ';';
//        }
//        $date['add_services_ids'] = $addServiceList;
        $house->update($date);

        $category = Category::find($house->category_id);
//        $addServicesList = [];

//        if ($house->add_services_ids) {
//            $array = explode(";", substr($house->add_services_ids, 0, -1));
//            foreach ($array as $element) {
//                $addServicesList[] = AddService::find($element)->title;
//            }
//        } else {
//            $addServicesList = ['Дополнительные услуги не выбраны'];
//        }
        $passedTime = NotificationsForController::passedTime();
        $questions = NotificationsForController::questions();
        $questionsForMsg = NotificationsForController::questionsForMsg();



        return view('admin.house.show', compact('house', 'category', 'addServicesList', 'questions', 'passedTime','questionsForMsg'
));
    }
}
