<?php

namespace App\Http\Controllers\Site\Profile;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function __invoke() {
        $user = auth()->user();
        $faqs = Faq::all();
        return view('site.profilePages.faq', compact('user', 'faqs'));
    }
}
