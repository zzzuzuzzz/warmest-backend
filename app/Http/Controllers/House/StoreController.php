<?php

namespace App\Http\Controllers\House;

use App\Http\Controllers\Controller;
use App\Http\Requests\Houses\StoreRequest;
use App\Models\AddServiceHouse;
use App\Models\House;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request) {
        $date = $request->validated();

        $date['preview_image'] = Storage::disk('public')->put('/images', $date['preview_image']);

        $addServiceIds = $date['addServices'];
        unset($date['addServices']);

        $house = House::firstOrCreate([
            'title' => $date['title']
        ], $date);

        foreach ($addServiceIds as $addServiceId) {
            AddServiceHouse::firstOrCreate([
                'house_id' => $house->id,
                'add_service_id' => $addServiceId
            ]);
        }
        return redirect()->route('house.index');
    }
}
