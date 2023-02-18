 <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(<?= base_url() ?>/img/imgslide/1.jpg)">
          <div class="container">
            <h2>Selamat datang di <span>Website Desa Rangdu</span></h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde odio quod possimus vero, explicabo numquam porro nihil.</p>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(<?= base_url() ?>/img/imgslide/2.jpg)">
          <div class="container">
            <h2>Selamat datang di <span>Website Desa Rangdu</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde odio quod possimus vero, explicabo numquam porro nihil.</p>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(<?= base_url() ?>/img/imgslide/3.jpg)">
          <div class="container">
            <h2>Selamat datang di <span>Website Desa Rangdu</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde odio quod possimus vero, explicabo numquam porro nihil.</p>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-md-6 col-lg-4 justify-content-center text-center d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="fas fa-history"></i></div>
              <h4 class="title"><a href="">Sejarah Desa</a></h4>
              <p class="description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid, cum!</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 justify-content-center text-center d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="fas fa-map-pin"></i></div>
              <h4 class="title"><a href="">Visi & Misi</a></h4>
               <p class="description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid, cum!</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 justify-content-center text-center d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="fas fa-check-circle"></i></div>
              <h4 class="title"><a href="">Tentang Kami</a></h4>
               <p class="description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid, cum!</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>Website Desa</h3>
          <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur non ducimus labore magnam a consequatur!</p>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Berita Section ======= -->
  <section id="counts" class="counts">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Berita Terbaru</h2>
        </div>
      
        <div class="row no-gutters justify-content-center">
          <?php foreach($berita2 as $berita2) { ?>
          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="card count-box">
              <img src="<?php echo base_url('upload/image/'.$berita2['gambar']) ?>">
              <p><strong><?php echo $berita2['judul_berita'] ?></strong></p>
              <p><?php echo $berita2['ringkasan'] ?></p>
              <a href="<?php echo base_url('berita/read/'.$berita2['slug_berita']) ?>">Baca Selengkapnya &raquo;</a>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
  </section><!-- End Berita Section -->

  <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Galeri</h2>
        </div>

        <div class="gallery-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <?php foreach($gallery as $gallery) {?>
            <div class="swiper-slide"><a class="gallery-lightbox" href="<?php echo base_url('upload/image/'.$gallery['gambar']) ?>"><img src="<?php echo base_url('upload/image/'.$gallery['gambar']) ?>" class="img-fluid" alt=""></a></div>
          <?php } ?>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">
      </div>

      <div>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5608.227054631221!2d107.92338247868675!3d-6.314150296703971!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e694f87a1bef4eb%3A0x3d9714bed23c43b1!2sKantor%20Desa%20Rangdu!5e0!3m2!1sid!2sid!4v1674878157824!5m2!1sid!2sid" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

    </section><!-- End Contact Section -->

  </main><!-- End #main -->