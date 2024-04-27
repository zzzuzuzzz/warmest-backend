<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Administrations\StoreRequest;
use App\Models\Administration;

class AdminAuthController extends Controller
{
    public function __invoke(StoreRequest $request) {
        $date = $request->validated();
        $user = Administration::where('login', $date['login'])->where('password', $date['password'])->get();
        if ($user->isEmpty()) {
            return redirect()->route('admin.singin');
        } else {
            setcookie('auth', 'eyJpdiI6ImFzd04wODhtTkNpMUhrMXhnd1gzV1E9PSIsInZhbHVlIjoiOHcyejNSc1BVTHBqOVhrc2VWS3JjM3UrTnVvUWpZa001a2NjVmFlUkd0eW1LUldPVjRmeitUVUJIeXp3bjdFQjBsV0lpczltVGtwRGRrK1BWbU5RaWdhaENiVmkyMTBvalhXWSttZmtaeEp3T2Noek5ROXFXZzdRemIxWnlLK3EiLCJtYWMiOiJmZTY3NjY2NTliZmRkMzFjN2VjZjQwOTM5MzNhNjdiN2M5YzFiN2QzMDJjM2NhZjczZWI1NTA3NzMyMzQxMDZjIiwidGFnIjoiIn0%3D', time() + 60 * 60 * 24 * 30 * 12, '/');
            return redirect()->route('admin.main.index');
        }
    }
}
