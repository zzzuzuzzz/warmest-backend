<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\StoreRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request) {
        $date = $request->validated();
        Category::firstOrCreate($date);

        return redirect()->route('category.index');
    }
}
