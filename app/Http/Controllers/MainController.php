<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        return view('welcome');
    }
    public function aboutUs() {
        return 'О нас';
    }
    public function catalog() {
        return 'Дома';
    }
    public function littleForms() {
        return 'Маленькие формы';
    }
    public function ourObjects() {
        return 'Наши объекты';
    }
    public function credits() {
        return 'Дома в ипотеку';
    }
    public function invest() {
        return 'Для инвестора';
    }
    public function services() {
        return 'Услуги';
    }

}
