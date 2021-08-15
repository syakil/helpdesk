@extends('layouts.app')

@section('content-header')
    Jurnal
@endsection


@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card">  
            <form class="form-horizontal">  
                <div class="card-body">      
                    <div class="form-group row">
                        <label for="ap" class="col-sm-4 col-form-label">Nama AP</label>
                        <div class="col-sm-8">
                            <input type="text" readonly class="form-control" id="ap">
                        </div>
                    </div>   
                    <div class="form-group row">
                        <label for="ap" class="col-sm-4 col-form-label">Kode AP</label>
                        <div class="col-sm-8">
                            <input type="text" readonly class="form-control" id="ap">
                        </div>
                    </div>     
                    <div class="form-group row">
                        <label for="ap" class="col-sm-4 col-form-label">Kode Transaksi</label>
                        <div class="col-sm-8">
                            <input type="text" readonly class="form-control" id="ap">
                        </div>
                    </div>     
                </div>
            </form>
        </div>
    </div>
    <div class="col-md-6">
    </div>
</div>

<div class="card">    
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID Transaksi</th>
                    <th scope="col">No Rekening</th>
                    <th scope="col">Tanggal Transaksi</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Debet</th>
                    <th scope="col">Kredit</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>BU/3002fjk12</td>
                    <th scope="row">1482000</th>
                    <td>20 Agustus 2021</td>
                    <td>Setoran Angsuran</td>
                    <td>100.000</td>
                    <td>0</td>
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
@endsection


@section('script')
<script>
    $('body').addClass('sidebar-collapse');
</script>
@endsection