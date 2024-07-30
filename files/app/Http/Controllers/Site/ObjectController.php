<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\GetRequest;
use App\Models\AddService;
use App\Models\AddServiceHouse;
use App\Models\FloorCategory;
use App\Models\MaterialCategory;
use App\Models\House;
use App\Models\ImageHouse;
use Illuminate\Support\Facades\DB;

class ObjectController extends Controller
{
    public function __invoke(House $object) {
//        dd($object);
        $addServiceHouses = AddServiceHouse::where('house_id', $object->id)->get();
        $addServices = [];
        foreach ($addServiceHouses as $add) {
            $addServices[] = AddService::find($add->add_service_id);
        }
//        $floorCategories = FloorCategory::all();
//        $materialCategories = MaterialCategory::all();




//        if ($data !== []) {
//            $query = House::query();
//            if (isset($data['materials'])) {
//                $query->whereIn('material_category_id', $data['materials']);
//            }
//            if (isset($data['floors'])) {
//                $query->whereIn('floor_category_id', $data['floors']);
//            }
//            if (isset($data['min_price'])) {
//                if ($data['min_price'] == '') {
//                    $data['min_price'] = 0;
//                }
//                $query->where('main_price', '>=', $data['min_price']);
//            }
//            if (isset($data['max_price'])) {
//                if ($data['max_price'] == '') {
//                    $data['max_price'] = 100000000000;
//                }
//                $query->where('main_price', '<=', $data['max_price']);
//            }
//            if (isset($data['addServices'])) {
//                $query->whereIn('id', (AddServiceHouse::whereIn('add_service_id', $data['addServices'])->pluck('house_id')));
//            }
//            if (isset($data['asc'])) {
//                $query->orderBy('params_size', 'asc');
//            }
//            if (isset($data['desc'])) {
//                $query->orderBy('params_size', 'desc');
//            }
//            $housesList = $query->get();
//        } else {
//            $housesList = House::all();
//        }

        $images = [];
        foreach (ImageHouse::where('house_id', $object->id)->get() as $img) {
            $images[] = $img->image;
        }
        $object->images = $images;

        $object->main_price = number_format(num: $object->main_price, thousands_separator: ' ');
        $object->add_price = number_format(num: $object->add_price, thousands_separator: ' ');
        $object->credit = number_format(num: $object->credit, thousands_separator: ' ');

//        dd($object);
        return view('site.object', compact('object', 'addServices'));
    }
}
