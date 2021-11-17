<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salesd extends Model
{
    protected $table ='t_sales_def';
    protected $fillable = [
        'id_barang', 'sales_id', 'qty','hrg_ban', 'dis_pct', 'dis_nilai', 'hrg_dis', 'total', 
    ];
}