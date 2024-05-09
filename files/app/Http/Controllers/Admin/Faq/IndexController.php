<?php

namespace App\Http\Controllers\Admin\Faq;

use App\Http\Controllers\Admin\NotificationsForController;
use App\Http\Controllers\Controller;
use App\Models\Faq;

class IndexController extends Controller
{
    public function __invoke() {
        $faqs = Faq::all();
        $passedTime = NotificationsForController::passedTime();
        $questions = NotificationsForController::questions();
        $questionsForMsg = NotificationsForController::questionsForMsg();



        return view('admin.faq.index', compact('faqs', 'questions', 'passedTime','questionsForMsg'
));
    }
}
