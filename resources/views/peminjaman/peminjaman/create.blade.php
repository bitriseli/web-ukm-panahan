@extends('peminjaman.layouts.main')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header ml-2">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Tambah Data Peminjaman</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <section class="content">
            <div class="col-lg-8 ml-2">
                <form action="">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Nama Barang  </label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>Arm Guard</option>
                            <option>Busur</option>
                            <option>Arrow</option>
                            <option>Case Guard</option>
                        </select>
                    </div>
                    <div class="form-group mt-4">
                        <label for="date">Tanggal Peminjaman  </label> <br>
                        <input type="date" id="date" name="date">
                    </div>
                    <div class="form-group mt-4">
                        <label for="exampleFormControlInput1" class="form-label">Tujuan/Kepada  </label>
                        <input type="nama" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="form-group mt-4">
                        <label for="exampleFormControlInput1" class="form-label">Jumlah</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="mt-4">
                        <input class="btn btn-primary" type="submit" value="Simpan">
                    </div>
                </form>
            </div>
        </section>


    </div>
@endsection
