<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table ='m_barang';
    protected $fillable =['kode_barang','nama-barang'];
}
