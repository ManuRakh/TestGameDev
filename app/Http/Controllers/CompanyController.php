<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Campaign;

class CompanyController extends Controller
{
public function addcompany() // добавление кампании
{
return view('addcompany');// идет в Resources/views  и берет содержимое по название.blade.php




}
public function addcompanydo(Request $request)
{
    $campaign = new Campaign;

    $this->validate($request,//валидирование входных данных к требованиям админа
      [
          'Accounts_ID'=>'required|max:50',
         // 'Campaign_type_ID '=>'required|min:6',
      ]);        

      $input = (object) $request->all();

      $data =(array) $input;
    $campaign->fill($data);
    
   
 $campaign->save();
//Если все хорошо то создаст success 
session([    
        'data' => 'Successfull added!',
        ]); 
        return redirect()->back();// редирект на страницу регистрации
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
