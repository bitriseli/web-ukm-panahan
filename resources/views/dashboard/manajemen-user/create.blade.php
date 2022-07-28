@extends('dashboard.layouts.main')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header ml-2">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Tambah Data User</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <section class="content">
            <div class="col-lg-8 ml-2">
                <form method="POST" action="/dashboard/manajemen-user">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                      </div>
                    <div class="form-group">
                        <label for="role">Role</label>
                        <select class="form-control" aria-label="Default select example" placeholder="Select" name="role" id="role">
                            <option value="1">Administrator</option>
                            <option value="2">Divisi UPT</option>
                          </select>
                    </div>
                  </div>
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="/dashboard/manajemen-user" class="btn btn-primary">Kembali</a>
                </form>
            </div>
        </section>
    </div>
@endsection
