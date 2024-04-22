<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AddService;
use App\Models\House;

class AdminIndexController extends Controller
{
    public function __invoke() {
        $housesNumber = count(House::all());
        $addServicesNumber = count(AddService::all());
        return view('admin.main.index', compact('housesNumber', 'addServicesNumber'));
    }
}
