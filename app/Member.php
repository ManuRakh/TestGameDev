<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model //Модель для связи с бд
{
    protected $fillable = [ // какие поля можно будет затрагивать при инсерт запросе 
        'name', 'email', 'password','Phone','Uid', // не указанные поля айди и креатед и упдатед ат добавляются автоматом.
    ];
}
