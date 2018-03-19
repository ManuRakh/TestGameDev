<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{



    public function addmember()// Добавление пользователя
    {
        return view('addmember');// идет в Resources/views  и берет содержимое по название.blade.php
    }
}
