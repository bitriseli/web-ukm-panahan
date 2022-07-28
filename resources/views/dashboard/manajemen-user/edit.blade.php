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
                <form method="get" action="/dashboard/user/edit">
                    @csrf
                    <div class="form-group">
                        <label for="periode">Nama</label>
                        <input type="text" class="form-control" id="periode" name="periode" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="periode">Email</label>
                        <input type="text" class="form-control" id="periode" name="periode" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="periode">Role</label>
                        <input type="text" class="form-control" id="periode" name="periode" required autofocus>
                    </div>
                  </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </section>
    </div>
@endsection
