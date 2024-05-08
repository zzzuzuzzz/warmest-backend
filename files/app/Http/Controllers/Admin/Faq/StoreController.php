<?php

namespace App\Http\Controllers\Admin\Faq;

use App\Http\Controllers\Controller;
use App\Http\Requests\Faqs\StoreRequest;
use App\Models\Faq;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request) {
        $date = $request->validated();
        Faq::firstOrCreate($date);

        return redirect()->route('faq.index');
    }
}
