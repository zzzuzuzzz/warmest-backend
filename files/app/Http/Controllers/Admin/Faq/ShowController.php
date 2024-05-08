<?php

namespace App\Http\Controllers\Admin\Faq;

use App\Http\Controllers\Controller;
use App\Models\Faq;

class ShowController extends Controller
{
    public function __invoke(Faq $faq) {
        return view('admin.faq.show', compact('faq'));
    }
}
