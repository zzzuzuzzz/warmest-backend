<?php

namespace App\Http\Controllers\Site\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\Questions\StoreRequest;
use App\Models\Question;

class QuestionStoreController extends Controller
{
    public function __invoke(StoreRequest $request) {
        $date = $request->validated();
        Question::create($date);

        return redirect()->route('site.profile.question');
    }
}
