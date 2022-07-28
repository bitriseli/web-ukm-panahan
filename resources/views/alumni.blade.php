@extends('layouts.main')

@section('content')
    <section id="alumni">
        <div class="hero">
            <img src="image/hero3.png" alt="">
            <div class="page-title">
                <h1>Alumni</h1>
            </div>
        </div>
        <div class="container">
            <div class="row text-center py-5">
                <h3>Alumni UKM Panahan <br>
                    Politeknik Negeri Pontianak</h3>
                <p>Berikut di bawah ini merupakan daftar alumni UKM Panahan</p>
            </div>
    </section>

    <section class="tabel">
        <div class="container">
            <div class="row">
                <table id="example" class="table table-striped bg-white pt-2" style="width:100%">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Angkatan</th>
                            <th>Jabatan</th>
                            <th>Prodi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Ahmad</td>
                            <td>1</td>
                            <td>Anggota Bidang Internal</td>
                            <td>Teknik Sipil</td>
                        </tr>
                        <tr>
                            <td>Garrett Winters</td>
                            <td>1</td>
                            <td>Sekretaris</td>
                            <td>Akuntansi</td>
                        </tr>
                        <tr>
                            <td>Ashton Cox</td>
                            <td>2</td>
                            <td>Kepala Bidang Pengadaan</td>
                            <td>Ilmu Kelautan Perikanan</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
