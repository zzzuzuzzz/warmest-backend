<?php

namespace App\Http\Controllers\House;

use App\Http\Controllers\Controller;
use App\Http\Requests\Houses\StoreRequest;
use App\Models\House;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request) {
        $date = $request->validated();

        $date['preview_image'] = Storage::disk('public')->put('/images', $date['preview_image']);

        $addServiceIds = $date['add_services_ids'];
        $addServiceList = '';
        foreach ($addServiceIds as $addServiceId) {
            $addServiceList = $addServiceList . $addServiceId . ';';
        }
        $date['add_services_ids'] = $addServiceList;
        House::firstOrCreate([
            'title' => $date['title']
        ], $date);

        return redirect()->route('house.index');
    }
}
