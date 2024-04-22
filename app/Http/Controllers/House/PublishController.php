<?php

namespace App\Http\Controllers\House;

use App\Http\Controllers\Controller;
use App\Models\AddService;
use App\Models\Category;
use App\Models\House;
use Illuminate\Http\Request;


class PublishController extends Controller
{
    public function __invoke(House $house) {

        if ($house->is_published) {
            $house->update([
                'is_published' => 0
            ]);
        } else {
            $house->update([
                'is_published' => 1
            ]);
        }

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
