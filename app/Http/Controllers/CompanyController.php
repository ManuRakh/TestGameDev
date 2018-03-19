<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
public function addcompany() // добавление кампании
{
return view('addcompany');// идет в Resources/views  и берет содержимое по название.blade.php
}
public function getcompany() // получение данных о кампании
{
return "";
}
public function removecompany($id) // удаление кампании по id
{
    return $id;
}

}
