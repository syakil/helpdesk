@extends('layouts.app')

@section('content-header')
Kirim Barang
@endsection


@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <form class="form-horizontal">
                   
                    <div class="form-group row">
                        <label for="ap" class="col-sm-4 col-form-label">Pengirim</label>
                        <div class="col-sm-8">
                            <input type="text" readonly class="form-control" id="ap">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="ap" class="col-sm-4 col-form-label">Tgl Kirim</label>
                        <div class="col-sm-8">
                            <input type="text" readonly class="form-control" id="ap">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="ap" class="col-sm-4 col-form-label">Total Kirim (Rupiah)</label>
                        <div class="col-sm-8">
                            <input type="text" readonly class="form-control" id="ap">
                        </div>
                    </div>

            </div>
            </form>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <form class="form-horizontal">
                    <div class="form-group row">
                        <label for="ap" class="col-sm-4 col-form-label">Penerima</label>
                        <div class="col-sm-8">
                            <input type="text" readonly class="form-control" id="ap">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="ap" class="col-sm-4 col-form-label">Tgl Terima</label>
                        <div class="col-sm-8">
                            <input type="text" readonly class="form-control" id="ap">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="ap" class="col-sm-4 col-form-label">Total Terima (Rupiah)</label>
                        <div class="col-sm-8">
                            <input type="text" readonly class="form-control" id="ap">
                        </div>
                    </div>


                </form>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col">

        <div class="card">
            <div class="card-header">
                <h4> <strong>TB. Transaksi</strong></h4>
            </div>
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

    </div>
</div>

<div class="row">
    <div class="col">

        <div class="card">
            <div class="card-header">
                <h4> <strong>TB. Kirim Barang</strong></h4>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Kode Produk</th>
                            <th scope="col">Nama Produk</th>
                            <th scope="col">Jumlah Kirim</th>
                            <th scope="col">Jumlah Terima</th>
                            <th scope="col">Harga Jual</th>
                            <th scope="col">Harga Beli</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>899989080002</td>
                            <td>Indomie Ayam Goreng</td>
                            <td>10</td>
                            <td>15</td>
                            <td>10.000</td>
                            <td>9.000</td>
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

    </div>
</div>

<div class="row">
    <div class="col">

        <div class="card">
            <div class="card-header">
                <h4> <strong>TB. Produk</strong></h4>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Kode Produk</th>
                            <th scope="col">Nama Produk</th>
                            <th scope="col">Stok</th>
                            <th scope="col">Harga Jual</th>
                            <th scope="col">Harga Beli</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>899989080002</td>
                            <td>Kecap ABC 25 Ml</td>
                            <td>1</td>
                            <td>10.000</td>
                            <td>9.000</td>
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

    </div>
</div>


@endsection


@section('script')
<script>
    $('body').addClass('sidebar-collapse');
</script>
@endsection