<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTSalesDef extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_sales_def', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('id_barang');
            $table->decimal('hrg_ban');
            $table->string('qty');
            $table->decimal('dis_pct');
            $table->decimal('dis_nilai');
            $table->decimal('hrg_dis');
            $table->decimal('total');
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
        Schema::dropIfExists('t_sales_def');
    }
}
