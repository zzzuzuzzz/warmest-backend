<?php

namespace App\Http\Controllers\House;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddServices\UpdateRequest;
use App\Models\AddService;
use App\Models\Category;
use App\Models\House;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, House $house) {
        $date = $request->validated();
        dd($date);

        $date['preview_image'] = Storage::disk('public')->put('/images', $date['preview_image']);

        $addServiceIds = $date['add_services_ids'];
        $addServiceList = '';
        foreach ($addServiceIds as $addServiceId) {
            $addServiceList = $addServiceList . $addServiceId . ';';
        }
        $date['add_services_ids'] = $addServiceList;
        $house->update($date);

        $category = Category::find($house->category_id);
        $addServicesList = [];

        if ($house->add_services_ids) {
            $array = explode(";", substr($house->add_services_ids, 0, -1));
            foreach ($array as $element) {
                $addServicesList[] = AddService::find($element)->title;
            }
        } else {
            $addServicesList = ['Дополнительные услуги не выбраны'];
        }

        return view('admin.house.show', compact('house', 'category', 'addServicesList'));
    }
}
