@extends('layouts.main')
    
@section('content')
    <section id="pengurus">
        <div class="hero">
            <img src="image/hero3.png" alt="">
            <div class="page-title">
                <h1>Pengurus</h1>
            </div>
        </div>
        <div class="container">
            <div class="row text-center py-5">
                <div class="col">
                    <h3>Pengurus UKM Panahan <br>
                        Politeknik Negeri Pontianak</h3>
                    <p>Di bawah ini merupakan pengurus UKM Panahan</p>
                    <div class="widget-area mb-5">
                        <div class="search-widget">
                            <form class="d-flex">
                                <input class="form-control me-2" type="search" placeholder="Search..." aria-label="Search">
                                <button class="btn" type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-5">
                    <div class="card shadow-sm">
                        <div class="imgprofile">
                            <img src="image/profil.jpg" alt="">
                        </div>
                        <div class="content text-center px-2">
                            <h3>Dinda Aprilia Muharni</h3>
                            <h4>Kepala Bidang Internal</h4>
                            <h5>Divisi HUMAS</h5>
                            <p>Akuntansi</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-5">
                    <div class="card shadow-sm">
                        <div class="imgprofile">
                            <img src="image/profil.jpg" alt="">
                        </div>
                        <div class="content text-center px-2">
                            <h3>Rosa</h3>
                            <h4>Sekretaris</h4>
                            <h5>Divisi HUMAS</h5>
                            <p>Teknik Arsitektur</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-5">
                    <div class="card shadow-sm">
                        <div class="imgprofile">
                            <img src="image/profil.jpg" alt="">
                        </div>
                        <div class="content text-center px-2">
                            <h3>Rini Mardiah</h3>
                            <h4>Bendahara</h4>
                            <h5>Divisi Kaderisasi</h5>
                            <p>Administrasi Bisnis</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-5">
                    <div class="card shadow-sm">
                        <div class="imgprofile">
                            <img src="image/profil.jpg" alt="">
                        </div>
                        <div class="content text-center px-2">
                            <h3>Sumartono</h3>
                            <h4>Ketua </h4>
                            <h5>Divisi UPT</h5>
                            <p>Teknik Sipil</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection