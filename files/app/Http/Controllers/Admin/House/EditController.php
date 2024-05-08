<?php

namespace App\Http\Controllers\Admin\House;

use App\Http\Controllers\Controller;
use App\Models\AddService;
use App\Models\AddServiceHouse;
use App\Models\Category;
use App\Models\House;
use App\Models\ImageHouse;

class EditController extends Controller
{
    public function __invoke(House $house) {

        $categories = Category::all();
        $addServices = AddService::all();
        $addServiceHouses = AddServiceHouse::where('house_id', $house->id)->get();
        $addServiceHousesList = [];
        if (isset($addServiceHouses)) {
            foreach ($addServiceHouses as $ash) {
                $addServiceHousesList[] = $ash->id;
            }
        }
        $imageHouse = ImageHouse::where('house_id', $house->id)->get();
        $imageHouseList = [];
        if (isset($imageHouse)) {
            foreach ($imageHouse as $ih) {
                $imageHouseList[] = $ih->image;
            }
        }
        return view('admin.house.edit', compact('house', 'categories', 'addServices', 'addServiceHousesList', 'imageHouseList'));
    }
}
