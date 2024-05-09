<?php

namespace App\Http\Controllers\Admin\Faq;

use App\Http\Controllers\Admin\NotificationsForController;
use App\Http\Controllers\Controller;
use App\Models\Faq;

class ShowController extends Controller
{
    public function __invoke(Faq $faq) {
        $passedTime = NotificationsForController::passedTime();
        $questions = NotificationsForController::questions();
        $questionsForMsg = NotificationsForController::questionsForMsg();



        return view('admin.faq.show', compact('faq','questions', 'passedTime','questionsForMsg'
));
    }
}
