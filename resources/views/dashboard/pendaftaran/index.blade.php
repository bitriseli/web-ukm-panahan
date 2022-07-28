@extends('dashboard.layouts.main')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header ml-2">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Daftar Anggota Baru</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
          <div class="card">
              <div class="card-header">
                <h3 class="card-title">Daftar Anggota Baru yang Disimpan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Jurusan</th>
                    <th>Prodi</th>
                    <th>Jenis Kelamin</th>
                    <th>No HP</th>
                    <th>Image</th>
                    <th>Bidik Misi</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($daftar as $user)
                      <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->nama }}</td>
                        <td>{{ $user->nim }}</td>
                        <td>{{ $user->jurusan }}</td>
                        <td>{{ $user->prodi }}</td>
                        <td>{{ $user->jk }}</td>
                        <td>{{ $user->nohp }}</td>
                        <td></td>
                        <td></td>
                        <td>
                          <form action="" class="d-inline">
                            <button class="btn btn-primary"><i class="fas fa-edit"></i></button>
                          </form>
                          <form action="" class="d-inline">
                            <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                          </form>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
    </section>
</div>

@endsection