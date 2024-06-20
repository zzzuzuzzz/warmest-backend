<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\House;
use App\Models\ImageHouse;

class CatalogController extends Controller
{
    public function __invoke() {

        $housesList = House::all();
//        $categories = Category::all();
//        $houseImages = ImageHouse::all();

        foreach ($housesList as $house) {

//            $categoryName = 'Одноэтажный дом';
//            foreach ($categories as $category) {
//                if ($house->category_id === $category->id) {
//                    $categoryName = $category->title;
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

        return view('site.catalog', compact('housesList'));
    }
}
