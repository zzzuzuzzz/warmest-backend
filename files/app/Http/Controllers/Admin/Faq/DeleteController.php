<?php

namespace App\Http\Controllers\Admin\Faq;

use App\Http\Controllers\Controller;
use App\Models\Faq;

class DeleteController extends Controller
{
    public function __invoke(Faq $faq) {
        $faq->delete();

        return redirect()->route('faq.index');
    }
}
