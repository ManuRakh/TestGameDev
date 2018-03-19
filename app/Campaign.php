<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model //Модель для связи с бд
{
    protected $fillable = [// какие поля можно будет затрагивать при инсерт запросе 
        'Accounts_ID', 'Campaign_type_ID', 'Name','Message_end',// не указанные поля айди и креатед и упдатед ат добавляются автоматом.
    ];
}
