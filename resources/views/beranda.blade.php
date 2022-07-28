 @extends('layouts.main')

 @section('content')
 <section class="beranda">
    <div class="hero">
      <img src="image/hero2.png" alt="">
      <div class="hero-title">
        <h1>
          Unit Kegiatan Mahasiswa Panahan
        </h1>
        <h2>
          Politeknik Negeri Pontianak
        </h2>
      </div>
    </div>
    <div class="container">
      <div class="ukm pt-5">
        <div class="row">
          <div class="col-lg-6 text-center">
            <img class="ilustration" src="image/Archery-bro.png" alt="dart" style="width: 100%; height:auto;">
          </div>
          <div class="col-lg-6">
            <div class="profil" style="padding-top: 3rem;">
              <h3>Unit Kegiatan Mahasiswa Panahan
                Politeknik Negeri Pontianak</h3>
              <br>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis blanditiis sed maiores sint
                placeat laboriosam beatae minima distinctio, ducimus, repellendus suscipit labore velit enim
                magni reiciendis harum? Beatae, mollitia vitae? Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Earum reiciendis voluptas magnam aperiam, vitae eaque quo perferendis illo molestiae deleniti corporis
                est
                quos hic officia nemo aliquid ipsa itaque similique.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="sejarah pt-3">
        <div class="row">
          <div class="col-lg-6">
            <div class="blog-profile" style="padding-top: 5.5rem;">
              <h3>Sejarah UKM Panahan Polnep</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni ea voluptatum
                dicta, voluptate sit sequi iure quam porro laudantium hic nihil ullam atque.
                Beatae quaerat ad dicta praesentium modi consectetur... </p>
              <a class="btn" href="#" role="button">Selengkapnya</a>
            </div>
          </div>
          <div class="col-lg-6 ms-0">
            <img class="ilustration" src="image/Target-rafiki.png" alt="panah" style="width: 100%; height:auto;">
          </div>
        </div>
      </div>

      <div class="pendaftaran pt-3">
        <div class="row">
          <div class="col-lg-6 text-center">
            <img src="image/Students-amico.png" alt="" style="width: 100%; height:auto;">
          </div>
          <div class="col-lg-6">
            <div class="blog-pendaftaran" style="padding-top: 4rem;">
              <h3>Pendaftaran</h3>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Quisquam dolor error facere nostrum ullam velit ea, suscipit rerum esse nesciunt!</p>
              <a class="btn" href="/info-daftar" role="button">Pendaftaran</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
 @endsection
 