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
                        <label for="ap" class="col-sm-4 col-form-label">Kode AP</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="ap">
                        </div>
                    </div>   
                    <div class="form-group row">
                        <label for="ap" class="col-sm-4 col-form-label">Kode Transaksi</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="ap">
                        </div>
                    </div>      
                    <div class="form-group row">
                        <label for="ap" class="col-sm-4 col-form-label">Tanggal Transaksi</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" id="ap">
                        </div>
                    </div>   
                    <button class="btn btn-primary float-right"><i class="fas fa-search"></i> Cari</button>     
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
                    <td>1482000</td>
                    <td>20 Agustus 2021</td>
                    <td>Setoran Angsuran</td>
                    <td><input type="text" class="form-control"></td>
                    <td><input type="text" class="form-control"></td>
                    <td>
                        <div class="btn-group btn-group-toggle">
                            <a class="btn btn-danger" href="#" role="button"><i class="fas fa-trash"></i></a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>BU/3002fjk12</td>
                    <td>1482000</td>
                    <td>20 Agustus 2021</td>
                    <td>Setoran Angsuran</td>
                    <td><input type="text" class="form-control"></td>
                    <td><input type="text" class="form-control"></td>
                    <td>
                        <div class="btn-group btn-group-toggle">
                            <a class="btn btn-danger" href="#" role="button"><i class="fas fa-trash"></i></a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="4" class="text-right font-weight-bold">Total :</td>
                    <td> <input type="text" readonly class="form-control" value="100.000"> </td>
                    <td> <input type="text" readonly class="form-control" value="100.000"> </td>
                </tr>
                <tr>
                    <td colspan="5" class="text-right font-weight-bold">Selisih :</td>
                    <td> <input type="text" readonly class="form-control" value="0"> </td>
                    <td><span class="badge badge-success">Balance</span></td>
                </tr>
             </tbody>
        </table>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        <button class="btn btn-primary float-right">Simpan</button>
    </div>
</div>
<!-- /.card -->
@endsection


@section('script')
<script>
    $('body').addClass('sidebar-collapse');
</script>
@endsection