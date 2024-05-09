<?php

namespace App\Http\Controllers\Admin\Faq;

use App\Http\Controllers\Admin\NotificationsForController;
use App\Http\Controllers\Controller;
use App\Models\Faq;

class DeleteController extends Controller
{
    public function __invoke(Faq $faq) {
        $faq->delete();
        $passedTime = NotificationsForController::passedTime();
        $questions = NotificationsForController::questions();

        return redirect()->route('faq.index', compact('questions', 'passedTime'));
    }
}
