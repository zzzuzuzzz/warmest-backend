<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminControllers extends Controller
{
    public function adminPanel() {
        echo 'Админ панель';
        echo '<br>';
        echo '<a href="http://localhost:8000/admin-panel/houses">Перейти в дома</a>';
        echo '<br>';
        echo '<a href="http://localhost:8000/admin-panel/serves">Перейти в услуги</a>';
    }

    public function adminPanelHouses() {
        echo ('Админ панель - дома');
        echo '<br>';
        echo '<a href="http://localhost:8000/admin-panel">Вернутся назад</a>';
    }

    public function adminPanelServes() {
        echo ('Админ панель - услуги');
        echo '<br>';
        echo '<a href="http://localhost:8000/admin-panel">Вернутся назад</a>';
    }



}
