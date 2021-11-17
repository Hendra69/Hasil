<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViewTransaksi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement($this->createView());
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement($this->dropView());
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    private function createView(): string
    {
        return <<<SQL
            CREATE VIEW view_transaksi AS
                SELECT 
                    ts.kode, 
                    ts.tgl, 
                    cs.name AS nama, 
                    ts.jml_brg, 
                    ts.subtotal,
                    ts.dis_pct, 
                    ts.diskonly, 
                    ts.ongkir, 
                    sd.total,
                    SUM(sd.qty) AS jumlahbrg
                FROM t_sales ts
                LEFT JOIN m_customer cs ON ts.cust_id = cs.id
                LEFT JOIN t_sales_def sd ON ts.id = sd.sales_id
                LEFT JOIN m_barang mb ON sd.id_barang = mb.id
                GROUP BY ts.tgl, ts.kode, cs.name, ts.jml_brg, ts.subtotal, ts.dis_pct, ts.diskonly, ts.ongkir, sd.total
            SQL;
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    private function dropView(): string
    {
        return <<<SQL

            DROP VIEW IF EXISTS `view_user_data`;
            SQL;
    }
}
