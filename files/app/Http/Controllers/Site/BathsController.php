<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\MaterialCategory;
use App\Models\House;
use App\Models\ImageHouse;

class BathsController extends Controller
{
    public function __invoke() {

        $housesList = House::all();
//        $categories = MaterialCategory::all();
//        $houseImages = ImageHouse::all();

        foreach ($housesList as $house) {

//            $categoryName = 'Одноэтажный дом';
//            foreach ($categories as $materialCategory) {
//                if ($house->category_id === $materialCategory->id) {
//                    $categoryName = $materialCategory->title;
//                }
//            }
//            $house->category_id = $categoryName;


            $images = [];
            foreach (ImageHouse::where('house_id', $house->id)->get() as $img) {
                $images[] = $img->image;
            }
            $house->images = $images;
        }
//        dd($housesList);

        return view('site.baths', compact('housesList'));
    }
}
