@extends('layouts.master')

@section('content')
<!DOCTYPE html>
<html>
	<head>
		<title></title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
	
    </head>
	<body>
        <div class="container">
            <div class="row">
             
            <table class="table table-striped">
    <thead>
        <h1>Transaksi</h1>
        <tr>
         <td>
          <form>
  <div class="form-group">
    <label for="formGroupExampleInput">No </label>
    <input type="text" value="{{$kodeAuto }}" class="form-control" id="kodeauto" placeholder="No" disabled>
    
  </div>
  <div class="form-group">
        <label>Tanggal:</label>
        <input class="datepicker" data-date-format="mm/dd/yyyy" placeholder="Tanggal" name="tgl" id="tgl">
</form>
</td>
         
        </tr>
    </thead>

  </table>

<table class="table table-striped">
    <thead>
    <div class="col-6">
        <h1>Customer</h1>
      </div>
      <div class="col-6">
      <!-- <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal1">
  Tambah Customer
</button>
      </div> -->
       
        
        <tr>
          <td> 
            <div class="form-group">
                <label for="formGroupExampleInput">Kode </label>
                <select id="customer_kode" name="customer_kode" class="form-control" onchange="getDetailCustomer(this)">
                    <option value="">-- pilih --</option>
                  @foreach($data_cus as $customer)  
                  <option value="{{$customer->id}}" data-nama="{{$customer->name}}" data-tlp="{{$customer->tlp}}">{{$customer->kode}}</option>
                  @endforeach
              </select>
            </div>
            
            <div class="form-group">
         
                <label for="formGroupExampleInput">Nama </label>
                <input type="text" class="form-control" id="nama_customer" placeholder="Nama" disabled>
            
            </div>
            
            <div class="form-group">
            
                <label for="formGroupExampleInput">Tlpn </label>
                <input type="number" class="form-control"  id="tlp_customer" placeholder="Telepon" disabled>
               
            </div></td>
         
        </tr>
    </thead>
    <tbody>
      </tbody>
  </table>
  </br>
  <table class="table table-sm">
  <thead>
  <div class="col-6">
<!-- Button trigger modal -->

</div>
    <tr>
      <th scope="col" colspan="2"><button onclick="tambahBarang()" type="button" class="btn btn-primary " data-toggle="modal" data-target="#exampleModal">
  Tambah
</button></th>
      <!-- <th scope="col">No</th> -->
      <th scope="col">Kode Barang</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Qty</th>
      <th scope="col">Harga Bandrol</th>
      <th scope="col">Diskon %</th>
      <th scope="col">Diskon Rp</th>
      <th scope="col">Harga Diskon </th>
      <th scope="col">Total</th>
    </tr>
  </thead>
  <tbody id="contentBarang">
     @foreach($data as $datax)
        <tr>
          <td><a href="/customer/edit/{{$datax->id}}" class="btn btn-primary ">Edit</a></td>
          <td><button ><a href="/destroy/{{$datax->id}}" class="btn btn-primary ">Hapus</button></td>
            <td>{{$datax->kode_barang}}</td>
            <td>{{$datax->nama_barang}}</td>
            <td>{{$datax->qty}}</td>
            <td>{{$datax->hrg_ban}}</td>
            <td>{{$datax->dis_pct}}</td>
            <td>{{$datax->dis_nilai}}</td>
            <td>{{$datax->hrg_dis}}</td>
            <td>{{$datax->total}}</td>         
            </tr>
        @endforeach
  </tbody>
</table>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="/customer/create" method="POST">
        {{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputEmail1">Kode Barang</label>
    <select name="kode_barang" class="form-control" onchange="getDetailBarang(this)">
      <option></option>
    @foreach($data_brg as $barang)
    <option value="{{$barang->id}}" data-nama="{{$barang->nama}}">{{$barang->kode}}</option>
    @endforeach
</select>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Nama Barang</label>
    <input type="text" name="nama_barang" class="form-control" id="nama-barang" disabled>
    <input type="hidden" name="id_sales" id="id_sales">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Qty</label>
    <input type="text" name="qty" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Harga Bandrol</label>
    <input type="text" name="hrg_ban" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Diskon (%)</label>
    <input type="decimal" name="dis_pct" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Diskon (Rp)</label>
    <input type="decimal" name="dis_nilai" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Harga Diskon</label>
    <input type="text" name="hrg_dis"class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Total </label>
    <input type="text" name="total" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
     
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="/customer/{id}/edit" method="GET">
        {{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputEmail1">Kode Barang</label>
    <select name="kode_barang" class="form-control" onchange="getDetailBarang(this)">
      <option></option>
    @foreach($data_brg as $barang)
    <option value="{{$barang->id}}" data-nama="{{$barang->nama}}">{{$barang->kode}}</option>
    @endforeach
</select>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Nama Barang</label>
    <input type="text" name="nama_barang" class="form-control" id="nama-barang" disabled>
    <input type="hidden" name="id_sales" id="id_sales">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Qty</label>
    <input type="text" name="qty" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Harga Bandrol</label>
    <input type="text" name="hrg_ban" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Diskon (%)</label>
    <input type="decimal" name="dis_pct" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Diskon (Rp)</label>
    <input type="decimal" name="dis_nilai" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Harga Diskon</label>
    <input type="text" name="hrg_dis"class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Total </label>
    <input type="text" name="total" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
     
      </div>
    </div>
  </div>
</div>


            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>     
        <script type="text/javascript">
      $('.datepicker').datepicker({
          format: 'mm/dd/yyyy',
          startDate: '-3d'
        
      });


      function getDetailBarang(data){
          let fieldBarang = document.getElementById('nama-barang');
          let getNamaBarang = data.options[data.selectedIndex].getAttribute('data-nama');
          fieldBarang.value = getNamaBarang;
          console.log(getNamaBarang);
      }
      function getDetailCustomer(data){
          let fieldNama = document.getElementById('nama_customer');
          let fieldTlp = document.getElementById('tlp_customer');
          let getNamaCustomer= data.options[data.selectedIndex].getAttribute('data-nama');
          let getTlpCustomer= data.options[data.selectedIndex].getAttribute('data-tlp');
          fieldNama.value = getNamaCustomer;
          fieldTlp.value = getTlpCustomer;
      }

      function tambahBarang(){
        let idSales = document.getElementById('id_sales');
        let customerCode = document.getElementById('customer_kode');
        let getCustomerCode = customerCode.options[customerCode.selectedIndex].value;
        idSales.value = getCustomerCode;
      }
     

    </script>
    </body>
</html>
@endsection