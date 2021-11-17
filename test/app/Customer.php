<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table ='m_customer';
   
    protected $fillable =['kode','nama','jml_brg','subtotal','diskonly','ongkir','total','jumlahbrg'];
}
