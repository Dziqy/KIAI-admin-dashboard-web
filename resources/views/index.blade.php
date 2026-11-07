@extends('layouts.main')

@section('main')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up">
          <div>
            <h1>Kajian Ilmu Agama Islam</h1>
            <h2>Media Informasi Berbagai Majelis Ilmu di sekitar Anda, hanya dalam satu aplikasi. Mau? Download Sekarang!</h2>
            <a href="#download" class="download-btn"><i class="bi bi-box-arrow-down"></i> Download</a>
          </div>
        </div>
        <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img" data-aos="fade-up">
          <img src="assets1/img/home.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <!-- ======= Pricing Section ======= -->
  <section id="kelola" class="pricing">
    <div class="container">

      <div class="section-title">
        <h2>Kelola Kajian / Majelis</h2>
        <p>WEB KIAI Dihadirkan untuk memudahkan pengurus masjid mengelola dan menyebarkan informasi majelis ilmu & kajian dimanapun berada.</p>
      </div>

      <div class="row no-gutters">

        <div class="col-lg-6 box" data-aos="fade-right">
          <h3>Takmir/DKM Masjid</h3>
          <h4><i class='bx bxs-institution'></i></h4>
          <ul>
            <li><i class="bx bx-radio-circle"></i> Kelola daftar informasi kajian/majelis</li>
            <li><i class="bx bx-radio-circle"></i> Kelola data lokasi tempat kajian/majelis</li>
            <li><i class="bx bx-radio-circle"></i> Pengajuan Asatidz</li>
          </ul>
          <a href="/register" target="_blank" class="get-started-btn">Masuk</a>
        </div>

        <div class="col-lg-6 box" data-aos="fade-left">
          <h3>Administrator</h3>
          <h4><i class='bx bxs-data'></i></h4>
          <ul>
            <li><i class="bx bx-radio-circle"></i> Kelola registrasi takmir/majelis</li>
            <li><i class="bx bx-radio-circle"></i> Kelola pengajuan asatidz</li>
            <li><i class="bx bx-radio-circle"></i> Kelola aktifitas takmir/majelis</li>
          </ul>
          <a href="/login" target="_blank" class="get-started-btn">Masuk</a>
        </div>

      </div>

    </div>
  </section><!-- End Pricing Section -->

    <!-- ======= App Features Section ======= -->
    <section id="fitur" class="features">
      <div class="container">

        <div class="section-title">
          <h2>Berbagai fitur bermanfaat untuk Anda</h2>
          <p>Aplikasi media informasi berbagai majelis ilmu syar’i menggunakan teknologi location based service sebagai penyajian informasi lokasi terdekat untuk dapat dioperasikan serta digunakan dengan cara yang lebih efisien dan efektif  dari jarak jauh dengan memberikan informasi daftar jadwal kajian atau majelis dengan mengklasifikasikan berdasar fitur seperti berikut ini.</p>
        </div>

        <div class="row no-gutters">
          <div class="col-xl-7 d-flex align-items-stretch order-2 order-lg-1">
            <div class="content d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-md-6 icon-box" data-aos="fade-up">
                  <i class="bx bx-home"></i>
                  <h4>Kajian Terdekat</h4>
                  <p>Memberikan daftar informasi kajian atau majelis yang terdekat.</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-map-pin"></i>
                  <h4>Lokasi Terdekat</h4>
                  <p>Memberikan informasi lokasi kajian atau majelis terdekat yang disajikan dalam bentuk peta.</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                  <i class="bx bx-female"></i>
                  <h4>Kajian Muslimah</h4>
                  <p>Memberikan informasi daftar jadwal kajian yang hanya menampilkan jadwal hari ini atau besok.</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                  <i class="bx bx-movie-play"></i>
                  <h4>Kajian Online</h4>
                  <p>Memberikan informasi daftar jadwal kajian atau majelis yang diselenggarakan secara online.</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                  <i class="bx bx-user"></i>
                  <h4>Profil Asatidz</h4>
                  <p>Memberikan informasi data ustadz atau ustadzah beserta daftar kajian atau majelis yang tersedia.</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                  <i class="bx bx-map"></i>
                  <h4>Lokasi Kajian</h4>
                  <p>Memberikan informasi data tempat lokasi kajian beserta daftar kajian yang tersedia.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="image col-xl-5 d-flex align-items-stretch justify-content-center order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets1/img/fitur.png" class="img-fluid" alt="">
          </div>
        </div>

      </div>
    </section><!-- End App Features Section -->

   <!-- ======= Gallery Section ======= -->
  <section id="gallery" class="gallery">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Gallery</h2>
        {{-- <p></p> --}}
      </div>

    </div>

    <div class="container-fluid" data-aos="fade-up">
      <div class="gallery-slider swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><a href="assets1/capture/1.jpg" class="gallery-lightbox" data-gall="gallery-carousel"><img src="assets1/capture/1.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="assets1/capture/2.jpg" class="gallery-lightbox" data-gall="gallery-carousel"><img src="assets1/capture/2.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="assets1/capture/3.jpg" class="gallery-lightbox" data-gall="gallery-carousel"><img src="assets1/capture/3.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="assets1/capture/4.jpg" class="gallery-lightbox" data-gall="gallery-carousel"><img src="assets1/capture/4.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="assets1/capture/5.jpg" class="gallery-lightbox" data-gall="gallery-carousel"><img src="assets1/capture/5.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="assets1/capture/6.jpg" class="gallery-lightbox" data-gall="gallery-carousel"><img src="assets1/capture/6.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="assets1/capture/7.jpg" class="gallery-lightbox" data-gall="gallery-carousel"><img src="assets1/capture/7.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="assets1/capture/8.jpg" class="gallery-lightbox" data-gall="gallery-carousel"><img src="assets1/capture/8.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="assets1/capture/9.jpg" class="gallery-lightbox" data-gall="gallery-carousel"><img src="assets1/capture/9.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="assets1/capture/10.jpg" class="gallery-lightbox" data-gall="gallery-carousel"><img src="assets1/capture/10.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="assets1/capture/11.jpg" class="gallery-lightbox" data-gall="gallery-carousel"><img src="assets1/capture/11.jpg" class="img-fluid" alt=""></a></div>
        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Gallery Section -->

  <!-- ======= Details Section ======= -->
  <section id="download" class="details section-bg">
    <div class="container">

      <div class="row content">
        <div class="col-md-4" data-aos="fade-right">
          <img src="assets1/img/home.png" class="img-fluid" alt="">
        </div>
        <div class="col-md-8 pt-4" data-aos="fade-up">
          <h3>Download KIAI</h3>
          <a href="#download" class="btn btn-primary"><i class="bi bi-box-arrow-down"></i> Download</a>            
          
          <p class="fst-italic">
            Download gratis dan install sekarang juga. KIAI telah tersedia pada platform Android.
          </p>
          <ul>
            <li><i class="bi bi-check"></i> perangkat Android.</li>
            <li><i class="bi bi-check"></i> pengguna harus mengaktifkan setelan Izinkan penginstalan aplikas.</li>
            <li><i class="bi bi-check"></i> proses penginstalan akan otomatis dimulai hanya jika pengguna telah mengonfigurasi Setelan untuk mengizinkan penginstalan aplikasi dari sumber tidak dikenal.</li>
          </ul>
          <p>
            KIAI Dihadirkan untuk memudahkan kaum muslimin yang ingin menghadiri majelis ilmu dan belajar islam di manapun berada.
          </p>
        </div>
      </div>

    </div>
  </section><!-- End Details Section -->


  @endsection