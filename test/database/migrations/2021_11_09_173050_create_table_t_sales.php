<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTSales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_sales', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode');
            $table->datetime('tgl');
            $table->integer('cust_id');
            $table->string('jml_brg');
            $table->decimal('subtotal');
            $table->decimal('diskonly');
            $table->decimal('ongkir');
            $table->decimal('tot_byr');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_sales');
    }
}
