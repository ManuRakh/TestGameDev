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
      ]);        

      $input = (object) $request->all();
if($input->Campaign_type_ID==null)  $input->Campaign_type_ID="1";// если кампания тайп айди не указан, он равен 1
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
    $campaign =   Campaign::select('id','Campaign_type_ID','Name','Accounts_ID')->get();
if($campaign)
 {
        return view('listofcompanies')->with([   // получить шаблон из вью с встроенными переменными,
            //в данном случае с $campaign
            'campaigns'=>$campaign,
        ]);
        
    }
       // 


return view('listofcompanies');
}
public function removecompanydo($id) // удаление кампании по id
{
    Campaign::where('id',$id)->delete();
    session([    
        'data' => 'Successfull removed!',
        ]); 
        return redirect()->back();// редирект на страницу регистрации

    return redirect()->back();
}
public function editcompany($id)
{


    return view('editcompany')->with(['id'=>$id,]);
}
public function editcompanydo($id,Request $request)
{
    $input = (object) $request->all();


//   След.написанное обновит только те поля, что заполнены. Остальные сохранятся
if($input->id)
Campaign::where('id', $id)->update(['Campaign_type_ID' => $input->id]);
if($input->acid)
Campaign::where('id', $id)->update(['Accounts_ID' => $input->acid]);
if($input->name)
Campaign::where('id', $id)->update(['Name' => $input->name]);

  session([    
    'data' => 'Successfull edited!',
    ]); 
return redirect()->back();

}

}
