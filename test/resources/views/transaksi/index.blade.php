
<!DOCTYPE html>
<html>
	<head>
		<title></title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
	
    </head>
	<body>
        <div class="container">
            <div class="row">
                <div >
                    <!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>
</div> -->

            <table class="table table-striped">
    <thead>
    
          <td>No </td>
          <td>No Transaksi</td>
          <td>Tanggal</td>
          
          <td>Jumlah Barang</td>
          <td>Sub Total</td>
          <td>Diskon</td>
          <td>Ongkir</td>
          <td>Total</td>
          <!-- <td colspan="2">Action</td> -->
          </tr>
    </thead>
    <tbody>
        @foreach($data_tran as $transaksi)
        <tr>
            <td>{{$transaksi->id}}</td>
            <td>{{$transaksi->kode}}</td>
            <td>{{$transaksi->tgl}}</td>
            <td>{{$transaksi->jml_brg}}</td>
            <td>{{$transaksi->subtotal}}</td>
            <td>{{$transaksi->diskonly}}</td>
            <td>{{$transaksi->ongkir}}</td>
            <td>{{$transaksi->tot_byr}}</td>
            
</tr>
@endforeach

    </tbody>
</table>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form>
  <div class="form-group">
    <label for="exampleInputEmail1">No Transaksi</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Tanggal</label>
    <input type="date" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Nama Customer</label>
    <input type="text" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Jumlah Barang</label>
    <input type="text" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Sub Total</label>
    <input type="text" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

</body>
</html>