@extends('layouts.main')

@section('content')
    <section class="agenda">
        <div class="hero">
            <img src="image/hero3.png" alt="">
            <div class="page-title">
                <h1>Agenda</h1>
            </div>
        </div>
        <div class="container">
            <div class="row text-center py-5">
                <h2>Agenda UKM Panahan <br>
                    Politeknik Negeri Pontianak</h2>
                <p>Di bawah ini merupakan agenda UKM Panahan</p>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupSelect01">Kategori</label>
                    <select class="form-select" id="inputGroupSelect01">
                        <option selected>Pilih Kategori</option>
                        <option value="1">Divisi UPT</option>
                        <option value="2">Divisi HUMAS</option>
                        <option value="3">Divisi Kaderisasi</option>
                        <option value="4">Divisi Umun</option>
                    </select>
                </div>
            </div>
            <div class="content-agenda">
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="card shadow-sm">
                            <img src="image/galeri/latihan fisik.jpg" class="card-img-top" alt="galeri1">
                            <div class="card-body">
                                <h6 class="card-title">Latihan Fisik</h6>
                                <p class="category" style="font-size:14px; color: rgb(100, 100, 100);">Kategori: Umum</p>
                                <div class="button-detail">
                                    <a class="btn btn-primary" href="#" role="button">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="card shadow-sm">
                            <img src="image/galeri/1 hari with UPT.jpg" class="card-img-top" alt="galeri1">
                            <div class="card-body">
                                <h6 class="card-title">1 hari bersama divisi UPT </h6>
                                <p class="category " style="font-size:14px; color: rgb(100, 100, 100);">Kategori: Divisi UPT</p>
                                <div class="button-detail">
                                    <a class="btn btn-primary" href="#" role="button">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="card shadow-sm">
                            <img src="image/galeri/latihan gabungan.jpg" class="card-img-top" alt="galeri1">
                            <div class="card-body">
                                <h6 class="card-title">Latihan Gabungan</h6>
                                <p class="category" style="font-size:14px; color: rgb(100, 100, 100);">Kategori: Umum</p>
                                <div class="button-detail">
                                    <a class="btn btn-primary" href="#" role="button">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection