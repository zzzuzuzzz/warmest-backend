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

class CatalogController extends Controller
{
    public function __invoke(GetRequest $request) {
        $data = $request->validated();
//        dd($data);
        $addServices = AddService::all();
        $floorCategories = FloorCategory::all();
        $materialCategories = MaterialCategory::all();




        if ($data !== []) {
            $query = House::query();
            if (isset($data['materials'])) {
                $query->whereIn('material_category_id', $data['materials']);
            }
            if (isset($data['floors'])) {
                $query->whereIn('floor_category_id', $data['floors']);
            }
            if (isset($data['min_price'])) {
                if ($data['min_price'] == '') {
                    $data['min_price'] = 0;
                }
                $query->where('main_price', '>=', $data['min_price']);
            }
            if (isset($data['max_price'])) {
                if ($data['max_price'] == '') {
                    $data['max_price'] = 100000000000;
                }
                $query->where('main_price', '<=', $data['max_price']);
            }
            if (isset($data['addServices'])) {
                $query->whereIn('id', (AddServiceHouse::whereIn('add_service_id', $data['addServices'])->pluck('house_id')));
            }
            if (isset($data['asc'])) {
                $query->orderBy('params_size', 'asc');
            }
            if (isset($data['desc'])) {
                $query->orderBy('params_size', 'desc');
            }
            $housesList = $query->get();
        } else {
            $housesList = House::all();
        }

        foreach ($housesList as $house) {
            $images = [];
            foreach (ImageHouse::where('house_id', $house->id)->get() as $img) {
                $images[] = $img->image;
            }
            $house->images = $images;

            $house->main_price = number_format(num: $house->main_price, thousands_separator: ' ');
            $house->credit = number_format(num: $house->credit, thousands_separator: ' ');
        }

        return view('site.catalog', compact('housesList', 'addServices', 'floorCategories', 'materialCategories'));
    }
}
