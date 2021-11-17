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
          @if(session('sukses'))
          <div class="alert alert-success" role="alert">
            {{session('sukses')}}
</div>
@endif
            <div class="row">
             
          
            <form action="/update/{{$salesd[0]->id}}" method="POST">
        {{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputEmail1">Kode Barang</label>
    <select name="kode_barang" class="form-control">
      <option></option>
    @foreach($data_brg as $barang)
    <option value="{{$barang->id}}" data-nama="{{$barang->nama}}" {{ ($salesd[0]->id_barang == $barang->id)  ? 'selected' :'' }}>{{$barang->kode}}</option>
    @endforeach
</select>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Nama Barang</label>
    <input type="text" name="nama_barang" class="form-control" id="nama-barang"  value="{{$salesd[0]->nama_barang}}" >
    <input type="hidden" name="id_sales" id="id_sales">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Qty</label>
    <input type="text" name="qty" class="form-control" id="exampleInputPassword1" value="{{$salesd[0]->qty}}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Harga Bandrol</label>
    <input type="text" name="hrg_ban" class="form-control" id="exampleInputPassword1"  value="{{$salesd[0]->hrg_ban}}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Diskon (%)</label>
    <input type="decimal" name="dis_pct" class="form-control" id="exampleInputPassword1" value="{{$salesd[0]->dis_pct}}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Diskon (Rp)</label>
    <input type="decimal" name="dis_nilai" class="form-control" id="exampleInputPassword1"  value="{{$salesd[0]->dis_nilai}}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Harga Diskon</label>
    <input type="text" name="hrg_dis"class="form-control" id="exampleInputPassword1" value="{{$salesd[0]->hrg_dis}}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Total </label>
    <input type="text" name="total" class="form-control" id="exampleInputPassword1"  value="{{$salesd[0]->total}}">
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
    

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


      

    </script>
    </body>
</html>
@endsection 