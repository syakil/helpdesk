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
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No Tiket</th>
                    <th scope="col">UserId</th>
                    <th scope="col">Cif</th>
                    <th scope="col">Kode Transaksi</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>708099SDA</td>
                    <td>BU/3002fjk12</td>
                    <td>Salah Nominal</td>
                    <td>
                        <div class="btn-group btn-group-toggle">
                            <a class="btn btn-warning" href="#" role="button"><i class="fas fa-pencil-alt"></i></a>
                            <a class="btn btn-danger" href="#" role="button"><i class="fas fa-trash"></i></a>
                        </div>
                    </td>
                </tr>
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
                            <option value="{{$list->id}}">{{$list->jenis_transaksi}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="kode_jurnal">Kode Jurnal</label>
                        <select required class="form-control" id="kode_jurnal">
                        <option value="" disabled selected>-Pilih Salah Satu-</option>
                            @foreach($kode_jurnal as $list_kode)
                            <option value="{{$list_kode->id}}">{{$list_kode->kode_jurnal}}</option>
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
@endsection


@section('script')
<script>
    $('body').addClass('sidebar-collapse');
</script>
@endsection