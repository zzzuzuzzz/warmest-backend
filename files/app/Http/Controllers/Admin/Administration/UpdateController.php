<?php

namespace App\Http\Controllers\Admin\Administration;

use App\Http\Controllers\Controller;
use App\Http\Requests\Administrations\UpdateRequest;
use App\Models\Administration;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Administration $administration) {
        $date = $request->validated();
        $administration->update($date);

        return view('admin.administration.show', compact('administration'));
    }
}
