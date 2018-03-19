<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;

class MemberController extends Controller
{



    public function addmember()// Добавление пользователя
    {
        return view('addmember');// идет в Resources/views  и берет содержимое по название.blade.php
    }
    public function addmemberdo(Request $request)
    {        $member = new Member;

        $this->validate($request,//валидирование входных данных к требованиям админа
          [
              'name'=>'required|max:50',
              'email'=>'required|max:50',
              'password'=>'required|max:50',
              'password'=>'required|min:6',
              'Phone'=>'required|min:6',
              'confirmpassword' => 'required|same:password',
              'email'=>'required|unique:members',
          ]);        

          $input = (object) $request->all();

          $input->password = md5($input->password);
          $input->confirmpassword = md5($input->confirmpassword);
          $data =(array) $input;
        $member->fill($data);
        
       
  
    $member->save();
    //Если все хорошо то создаст success 
   session([    
            'data' => 'Successfull registered!',
            ]); 
            return redirect()->back();// редирект на страницу регистрации
         }
    
}
