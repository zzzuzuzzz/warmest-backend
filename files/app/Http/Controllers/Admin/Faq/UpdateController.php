<?php

namespace App\Http\Controllers\Admin\Faq;

use App\Http\Controllers\Admin\NotificationsForController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Faqs\UpdateRequest;
use App\Models\Faq;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Faq $faq) {
        $date = $request->validated();
        $faq->update($date);
        $passedTime = NotificationsForController::passedTime();
        $questions = NotificationsForController::questions();
        $questionsForMsg = NotificationsForController::questionsForMsg();




        return view('admin.faq.show', compact('faq', 'questions', 'passedTime','questionsForMsg'
));
    }
}
