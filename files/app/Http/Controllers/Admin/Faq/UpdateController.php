<?php

namespace App\Http\Controllers\Admin\Faq;

use App\Http\Controllers\Controller;
use App\Http\Requests\Faqs\UpdateRequest;
use App\Models\Faq;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Faq $faq) {
        $date = $request->validated();
        $faq->update($date);

        return view('admin.faq.show', compact('faq'));
    }
}