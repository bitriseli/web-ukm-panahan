@extends('peminjaman.layouts.main')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header ml-2">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Peminjaman</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <section class="content">
            <a href="/peminjaman/daftarbarang/create" class="btn btn-primary mb-3 ml-3">Tambah Data</a>
            <div class="card ml-3">
                <div class="card-header">
                    <h3 class="card-title">Data peminjaman yang tersimpan</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Barang</th>
                                <th>Tanggal Peminjaman</th>
                                <th>Asal</th>
                                <th>Tujuan</th>
                                <th>Jumlah</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Arm Guard</td>
                                <td>19/07/2022</td>
                                <td>berdasarkan nama user yg login</td>
                                <td>Latihan bersama</td>
                                <td>13</td>
                                <td>Dipinjam</td>
                                <td>
                                    <form action="" class="d-inline">
                                        <button class="btn btn-primary"><i class="fas fa-edit"></i></button>
                                    </form>
                                    <form action="" class="d-inline">
                                        <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                    </form>
                                    <form action="" class="d-inline">
                                        <button class="btn btn-success"><i class="fas fa-check"></i></button>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Busur</td>
                                <td>19/07/2022</td>
                                <td>berdasarkan nama user yg login</td>
                                <td>Latihan Fisik</td>
                                <td>29</td>
                                <td>Kembali</td>
                                <td>
                                    <form action="" class="d-inline">
                                        <button class="btn btn-primary"><i class="fas fa-edit"></i></button>
                                    </form>
                                    <form action="" class="d-inline">
                                        <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                    </form>
                                    <form action="" class="d-inline">
                                        <button class="btn btn-success"><i class="fas fa-check"></i></button>
                                    </form>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </section>
    </div>
@endsection
