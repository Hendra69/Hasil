<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Sales;
use App\Salesd;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_brg = \App\Barang::all();
        $data_cus = \App\Customer::all();

        // $data = DB::select('SELECT 
        //                 ts.kode, 
        //                 ts.tgl, 
        //                 cs.name AS nama, 
        //                 ts.jml_brg, 
        //                 ts.subtotal, 
        //                 ts.diskonly, 
        //                 ts.ongkir, 
        //                 sd.total,
        //                 SUM(sd.qty) AS jumlahbrg
        //             FROM t_sales ts
        //             LEFT JOIN m_customer cs ON ts.cust_id = cs.id
        //             LEFT JOIN t_sales_def sd ON ts.id = sd.sales_id
        //             LEFT JOIN m_barang mb ON sd.id_barang = mb.id
        //             GROUP BY ts.tgl, ts.kode, cs.name, ts.jml_brg, ts.subtotal, ts.diskonly, ts.ongkir, sd.total
        //         ');
        $kodeAuto = 'PO-'.str_pad(count(Salesd::all())+1,4,'0',STR_PAD_LEFT);
         $data = DB::select('SELECT 
                        mb.kode AS kode_barang, 
                        mb.nama AS nama_barang,
                    ts.*
                    FROM t_sales_def ts
                    LEFT JOIN m_barang mb ON ts.id_barang = mb.id');
              

        return view ('customer.index',['data_cus'=> $data_cus, 'data'=>$data, 'data_brg'=> $data_brg, 'kodeAuto'=> $kodeAuto]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // \App\Barang::create($request->all());
        // \App\Customer::create($request->all());
        // return redirect('/customer'); 
        // dd($request);die();
        $sales_def = new Salesd;
        $sales_def ->sales_id = (int)$request->id_sales;
        $sales_def ->id_barang = (int)$request->kode_barang;
        $sales_def ->qty = $request->qty;
        $sales_def ->hrg_ban = $request->hrg_ban;
        $sales_def ->dis_pct = $request->dis_pct;
        $sales_def ->dis_nilai = $request->dis_nilai;
        $sales_def ->hrg_dis = $request->hrg_dis;
        $sales_def ->total = $request->total;
        // dd($sales_def);die();
        $sales_def ->save();
        return redirect('/customer');
        
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data_brg = \App\Barang::all();
        $salesd =DB::select('SELECT 
        mb.kode AS kode_barang, 
        mb.nama AS nama_barang,
    ts.*
    FROM t_sales_def ts
    LEFT JOIN m_barang mb ON ts.id_barang = mb.id where ts.id='.$id.'' );
    // dd($salesd[0]->kode_barang);die();
        return view ('customer.edit',['data_brg'=> $data_brg,'salesd'=> $salesd]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    // $data_brg = \App\Barang::all();
       $salesd=\App\Salesd::find($id);
       $salesd->update($request->all());
      
       return redirect('/customer')->with('sukses','Data Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $salesd = Salesd::find($id);
        $salesd->delete();
        return redirect('/customer');
    }
}
