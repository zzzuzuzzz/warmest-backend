<?php

namespace App\Http\Controllers\Admin\House;

use App\Http\Controllers\Admin\NotificationsForController;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddServices\UpdateRequest;
use App\Models\AddService;
use App\Models\AddServiceHouse;
use App\Models\MaterialCategory;
use App\Models\House;
use App\Models\ImageHouse;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, House $house) {
        $date = $request->validated();
        $houseId = $house->id;

        if (isset($date['deleteImg'])) {
            Storage::deleteDirectory('public/images/' . $date['title']);
            Storage::makeDirectory('public/images/' . $house->title);
            unset($date['deleteImg']);
        }

        $directories = Storage::directories('public/images/');
        $resultFindDir = in_array($date['title'], $directories);

        if (isset($date['images'])) {
            if (!$resultFindDir) {
                Storage::makeDirectory('public/images/' . $date['title']);
            }
            ImageHouse::where('house_id', $houseId)->delete();
            foreach ($date['images'] as $img) {
                $imgPath = Storage::disk('public')->put('/images/' . $date['title'], $img);
                ImageHouse::firstOrCreate([
                    'image' => $imgPath,
                    'house_id' => $houseId
                ]);
            }
            unset($date['images']);
        }

        AddServiceHouse::where('house_id', $houseId)->delete();
        foreach ($date['add_services_ids'] as $as) {
            AddServiceHouse::firstOrCreate([
                'add_service_id' => $as,
                'house_id' => $houseId
            ]);
        }
        unset($date['add_services_ids']);

        $house->update($date);


        $category = MaterialCategory::find($house->category_id);
        $images = [];
        foreach (ImageHouse::where('house_id', $house->id)->get() as $img) {
            $images[] = $img->image;
        }
        $addServices = [];
        foreach (AddServiceHouse::where('house_id', $house->id)->get() as $as) {
            $addServices[] = AddService::find($as->add_service_id);
        }

        $passedTime = NotificationsForController::passedTime();
        $passedTimeApplication = NotificationsForController::passedTimeApplication();
        $questions = NotificationsForController::questions();
        $applications = NotificationsForController::applications();
        $numberNotification = NotificationsForController::numberNotification();
        $questionsForMsg = NotificationsForController::questionsForMsg();
        $applicationsForMsg = NotificationsForController::applications();


        return view('admin.house.show', compact('addServices', 'images', 'house', 'category', 'questions', 'passedTime','questionsForMsg', 'applicationsForMsg', 'applications', 'numberNotification', 'passedTimeApplication'
));
    }
}
