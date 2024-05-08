<?php

namespace App\Http\Controllers\Admin\Faq;

use App\Http\Controllers\Controller;
use App\Models\Faq;

class IndexController extends Controller
{
    public function __invoke() {
        $faqs = Faq::all();
        return view('admin.faq.index', compact('faqs'));
    }
}
