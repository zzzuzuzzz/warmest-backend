<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\House;
use App\Models\ImageHouse;

class IndexController extends Controller
{
    public function __invoke() {

        $housesList = House::take(6)->get();

        foreach ($housesList as $house) {
            $images = [];
            foreach (ImageHouse::where('house_id', $house->id)->get() as $img) {
                $images[] = $img->image;
            }
            $house->images = $images;

            $house->main_price = number_format(num: $house->main_price, thousands_separator: ' ');
            $house->credit = number_format(num: $house->credit, thousands_separator: ' ');
        }

        return view('site.welcome', compact('housesList'));
    }
}
