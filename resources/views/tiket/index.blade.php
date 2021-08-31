@extends('layouts.app')

@section('content-header')
    Tiket
@endsection


@section('content')
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#opentiket">
  Open Tiket
</button>

<div class="card">    
    <div class="card-body">
        <table class="table table-tiket">
            <thead>
                <tr>
                    <th scope="col">No Tiket</th>
                    <th scope="col">UserId</th>
                    <th scope="col">CIF</th>
                    <th scope="col">Tanggal Transaksi</th>
                    <th scope="col">Jenis Transaksi</th>
                    <th scope="col">Kode Transaksi</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">FU Helpdesk</th>
                    <th scope="col">Status Tiket</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                
             </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->


<!-- Modal -->
<div class="modal fade" id="opentiket" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Open Tiket</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form>
            <div class="form-group">
                <label for="user">User</label>
                <input type="text" class="form-control" id="user" value="{{Auth::user()->name}}" disabled>
            </div>
            <div class="form-group">
                <label for="cif">CIF/Kode Member</label>
                <input type="text" class="form-control" id="cif">
            </div>
            <div class="form-group">
                <label for="kode_transaksi">Kode Transaksi</label>
                <input type="text" class="form-control" id="kode_transaksi">
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="jenis_transaksi">Jenis Transaksi</label>
                        <select required class="form-control" id="jenis_transaksi">
                            <option value="" disabled selected>-Pilih Salah Satu-</option>
                            @foreach($jenis_transaksi as $list)
                            <option value="{{$list->id}}">{{$list->keterangan_transaksi}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
           
            <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <textarea class="form-control" id="keterangan" rows="3"></textarea>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
@if ($errors->any())
  <script>
    var pesan = "{{$errors->first()}}"
    swal("Maaf !", pesan, "error"); 
  </script>
@elseif ($message = Session::get('success'))
<script>
  var pesan = "{{$message}}"
  swal("Selamat !", pesan, "success"); 
</script>
@elseif ($message = Session::get('error'))
<script>
  var pesan = "{{$message}}"
  swal("Maaf !", pesan, "error"); 
</script>
@endif
@endsection


@section('script')
<script>
    $('body').addClass('sidebar-collapse');
</script>
<script type="text/javascript">
var table, save_method, table1;

  var url = "{{ route('tiket.data') }}";
   table = $('.table-tiket').DataTable({
     "serverside" : true,
     dom: 'Bfrtip',
        buttons: [
        ],
     "ajax" : {
       "url" : url,
       "type" : "GET"
     }

   });
   $('div.dataTables_filter input').focus(); 

   function done(id){
    
    swal({
    title: "Anda Yakin?",
    text: "Tiket Yang sudah diselesaikan tidak akan dapat dirubah kembali!",
    icon: "warning",
    buttons: true,
    dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          url = "{{route('tiket.done',':id')}}"
          url = url.replace(':id',id);
          window.location.href = url;
        } else {
          swal("Tiket Anda Masih Dalam Proses!");
        }
      });
  }
</script>
@endsection