 <!-- ======= Hero Section ======= -->
 <section id="hero">
     <div class="hero-container">
         <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

             <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

             <div class="carousel-inner" role="listbox">
                 <!-- Slide 1 -->
                 <div class="carousel-item active"
                     style="background: url('<?php echo base_url(); ?>assets/front/assets/img/slide/slide1.jpg');">
                     <div class="carousel-container">
                         <div class="carousel-content">
                             <h2 class="animate__animated animate__fadeInDown">SMPN 25 Pekanbaru</h2>
                             <p class="animate__animated animate__fadeInUp">"Berdoa saja tidak cukup.
                                 Belajar dengan baik adalah bukti bahwa doa Anda serius. Belajar adalah ibadah."</p>
                             <!--  <div>
                                 <a href="#about"
                                     class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                             </div>-->
                         </div>
                     </div>
                 </div>

                 <!-- Slide 2 -->
                 <div class="carousel-item"
                     style="background: url('<?php echo base_url(); ?>assets/front/assets/img/slide/slide2.jpg');">
                     <div class="carousel-container">
                         <div class="carousel-content">
                             <!-- Slide <h2 class="animate__animated animate__fadeInDown">Lorem Ipsum Dolor</h2>
                             <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui
                                 aliquid. Sequi
                                 ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut.
                                 Similique ea
                                 voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi
                                 architecto.</p>
                             <div>
                                 <a href="#about"
                                     class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                             </div>-->
                         </div>
                     </div>
                 </div>

                 <!-- Slide 3 -->
                 <div class="carousel-item"
                     style="background: url('<?php echo base_url(); ?>assets/front/assets/img/slide/slide3.jpg');">
                     <div class="carousel-background"><img
                             src="<?php echo base_url(); ?>assets/front/assets/img/slide/slide3.jpg" alt=""></div>
                     <div class="carousel-container">
                         <div class="carousel-content">
                             <!-- Slide 2    <h2 class="animate__animated animate__fadeInDown">Sequi ea ut et est quaerat</h2>
                             <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui
                                 aliquid. Sequi
                                 ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut.
                                 Similique ea
                                 voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi
                                 architecto.</p>
                             <div>
                                 <a href="#about"
                                     class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                             </div>-->
                         </div>
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
     </div>
 </section><!-- End Hero -->

 <main id="main">

     <!-- ======= About Section ======= -->
     <section id="about" class="about">
         <div class="container">

             <div class="row no-gutters ">
                 <div class="col-xl-6 d-flex align-items-stretch justify-content-center justify-content-lg-start ">
                     <div class="content d-flex flex-column justify-content-center mt-lg-5 ">
                         <h3>Visi SMPN 25 Pekanbaru</h3>
                         <div class="col-md icon-box">
                             <i class="bx bx-cube-alt"></i>
                             <h4>Visi </h4>
                             <p>Terwujudnya sekolah sebagai budaya pendidikan dalam upaya meningkatkan mutu, keasrian
                                 lingkungan, disiplin, beriman dan bertaqwa
                             </p>
                         </div>

                     </div>
                 </div>
                 <!-- END CONTENT-->

                 <div class="col-xl-6 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch">
                     <div class="content d-flex flex-column justify-content-center">
                         <h3>Misi SMPN 25 Pekanbaru</h3>
                         <div class="col-md icon-box">
                             <i class="bx bx-receipt"></i>
                             <h4>Misi </h4>
                             <p><br>
                             <ol>
                                 <li>Melaksanakan kegiatan yang memiliki nilai- nilai keagamaan</li>
                                 <li>Mengoptimalkan tugas dan tanggung jawab setiap warga sekolah.</li>
                                 <li>Meningkatkan kualitas pembelajaran melalui pendekatan scientific (keterampilan)
                                 </li>
                                 <li>Meningkatkan kualitas penguasaan kurikulum</li>
                                 <li>Meningkatkan nilai Ujian Nasional dan Ujian Sekolah tertinggi di Kota Pekanbaru
                                 </li>
                                 <li>Menumbuh kembangkan jiwa keunggulan melalui kegiatan minat dan bakat siswa</li>
                                 <li>Melengkapi fasilitas keamanan</li>
                             </ol>

                             </p>
                         </div>

                     </div>
                 </div>
                 <!-- END CONTENT-->
             </div>
         </div>
         </div>
     </section><!-- End About Section -->


     <!-- ======= NEWS Section ======= -->

     <!-- ======= news Section ======= -->
     <section id="NEWS" class="news">
         <div class="container">
             <div class="section-title" data-aos="fade-up">
                 <h2>Berita Sekolah</h2>
                 <div class="row">
                     <?php foreach ($berita as $row) : ?>
                     <div class="col-md-4 mb-5 align-items-stretch" data-aos="fade-up">
                         <div class="card"
                             style="background-image: url('<?php echo base_url(); ?>assets/img-berita/<?php echo $row->img; ?>');">
                             <div class="card-body">
                                 <h5 class="card-title"><?php echo word_limiter($row->judul, 5, '....') ?></a></h5>
                                 <p class="card-text"><?php echo word_limiter($row->isi, 15, '....') ?></p><br>

                                 <div class="container">
                                     <div class="row">
                                         <div class="col-sm">
                                             <small>
                                                 <p class="card-text"><small class="text-muted"><a href="#"><em>Dibuat
                                                                 Oleh :
                                                                 <?php echo $row->name ?></em></a></small></p>
                                             </small>
                                         </div>


                                     </div>
                                 </div>

                                 <div class="read-more">
                                     <small>
                                         <p class="card-text"><small class="text-muted"><a href="#" title=""><em>Dibuat
                                                         Pada :
                                                         <?php echo $row->created ?></em></a></small></p>
                                     </small>
                                     <a href="<?php echo base_url() . 'DetailBeritaSekolah/' . $row->id; ?>"><i
                                             class="bi bi-arrow-right"></i> Detail</a>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <?php endforeach ?>
                 </div>
                 <a href="<?php echo base_url(); ?>BeritaSekolah" class="btn btn-outline-info">Tampilkan Semua
                     Berita</a>
             </div>
         </div>
     </section><!-- End news Section -->
     <!-- End NEWS Section -->


     <!-- ======= Testimonials Section ======= 
     <section id="testimonials" class="testimonials">
         <div class="container position-relative" data-aos="fade-up">

             <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                 <div class="swiper-wrapper">

                     <div class="swiper-slide">
                         <div class="testimonial-item">
                             <img src="<?php echo base_url(); ?>assets/front/assets/img/testimonials/testimonials-1.jpg"
                                 class="testimonial-img" alt="">
                             <h3>Saul Goodman</h3>
                             <h4>Ceo &amp; Founder</h4>
                             <p>
                                 <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                 Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit
                                 rhoncus. Accusantium
                                 quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                                 <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                             </p>
                         </div>
                     </div><!-- End testimonial item 

                     <div class="swiper-slide">
                         <div class="testimonial-item">
                             <img src="<?php echo base_url(); ?>assets/front/assets/img/testimonials/testimonials-2.jpg"
                                 class="testimonial-img" alt="">
                             <h3>Sara Wilsson</h3>
                             <h4>Designer</h4>
                             <p>
                                 <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                 Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid
                                 cillum eram malis
                                 quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                                 <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                             </p>
                         </div>
                     </div><!-- End testimonial item --

                     <div class="swiper-slide">
                         <div class="testimonial-item">
                             <img src="<?php echo base_url(); ?>assets/front/assets/img/testimonials/testimonials-3.jpg"
                                 class="testimonial-img" alt="">
                             <h3>Jena Karlis</h3>
                             <h4>Store Owner</h4>
                             <p>
                                 <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                 Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam
                                 duis minim
                                 tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                                 <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                             </p>
                         </div>
                     </div><!-- End testimonial item --

                     <div class="swiper-slide">
                         <div class="testimonial-item">
                             <img src="<?php echo base_url(); ?>assets/front/assets/img/testimonials/testimonials-4.jpg"
                                 class="testimonial-img" alt="">
                             <h3>Matt Brandon</h3>
                             <h4>Freelancer</h4>
                             <p>
                                 <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                 Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat
                                 minim velit
                                 minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum
                                 veniam.
                                 <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                             </p>
                         </div>
                     </div><!-- End testimonial item --

                     <div class="swiper-slide">
                         <div class="testimonial-item">
                             <img src="<?php echo base_url(); ?>assets/front/assets/img/testimonials/testimonials-5.jpg"
                                 class="testimonial-img" alt="">
                             <h3>John Larson</h3>
                             <h4>Entrepreneur</h4>
                             <p>
                                 <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                 Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster
                                 veniam enim culpa
                                 labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi
                                 cillum quid.
                                 <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                             </p>
                         </div>
                     </div><!-- End testimonial item --

                 </div>
                 <div class="swiper-pagination"></div>
             </div>

         </div>
     </section><!-- End Testimonials Section -->
     <!-- End Why Us Section -->

     <!-- ======= Portfolio Section ======= -->
     <!-- <section id="portfolio" class="portfolio">
         <div class="container">

             <div class="section-title">
                 <h2>Portfolio</h2>
                 <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                     sint
                     consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                     fugiat sit
                     in iste officiis commodi quidem hic quas.</p>
             </div>

             <div class="row">
                 <div class="col-lg-12 d-flex justify-content-center">
                     <ul id="portfolio-flters">
                         <li data-filter="*" class="filter-active">All</li>
                         <li data-filter=".filter-app">App</li>
                         <li data-filter=".filter-card">Card</li>
                         <li data-filter=".filter-web">Web</li>
                     </ul>
                 </div>
             </div>

             <div class="row portfolio-container">

                 <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                     <div class="portfolio-wrap">
                         <img src="<?php echo base_url(); ?>assets/front/assets/img/portfolio/portfolio-1.jpg"
                             class="img-fluid" alt="">
                         <div class="portfolio-info">
                             <h4>App 1</h4>
                             <p>App</p>
                             <div class="portfolio-links">
                                 <a href="<?php echo base_url(); ?>assets/front/assets/img/portfolio/portfolio-1.jpg"
                                     data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i
                                         class="bx bx-plus"></i></a>
                                 <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                             </div>
                         </div>
                     </div>
                 </div>

                 <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                     <div class="portfolio-wrap">
                         <img src="<?php echo base_url(); ?>assets/front/assets/img/portfolio/portfolio-2.jpg"
                             class="img-fluid" alt="">
                         <div class="portfolio-info">
                             <h4>Web 3</h4>
                             <p>Web</p>
                             <div class="portfolio-links">
                                 <a href="<?php echo base_url(); ?>assets/front/assets/img/portfolio/portfolio-2.jpg"
                                     data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i
                                         class="bx bx-plus"></i></a>
                                 <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                             </div>
                         </div>
                     </div>
                 </div>

                 <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                     <div class="portfolio-wrap">
                         <img src="<?php echo base_url(); ?>assets/front/assets/img/portfolio/portfolio-3.jpg"
                             class="img-fluid" alt="">
                         <div class="portfolio-info">
                             <h4>App 2</h4>
                             <p>App</p>
                             <div class="portfolio-links">
                                 <a href="<?php echo base_url(); ?>assets/front/assets/img/portfolio/portfolio-3.jpg"
                                     data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i
                                         class="bx bx-plus"></i></a>
                                 <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                             </div>
                         </div>
                     </div>
                 </div>

                 <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                     <div class="portfolio-wrap">
                         <img src="<?php echo base_url(); ?>assets/front/assets/img/portfolio/portfolio-4.jpg"
                             class="img-fluid" alt="">
                         <div class="portfolio-info">
                             <h4>Card 2</h4>
                             <p>Card</p>
                             <div class="portfolio-links">
                                 <a href="<?php echo base_url(); ?>assets/front/assets/img/portfolio/portfolio-4.jpg"
                                     data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i
                                         class="bx bx-plus"></i></a>
                                 <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                             </div>
                         </div>
                     </div>
                 </div>

                 <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                     <div class="portfolio-wrap">
                         <img src="<?php echo base_url(); ?>assets/front/assets/img/portfolio/portfolio-5.jpg"
                             class="img-fluid" alt="">
                         <div class="portfolio-info">
                             <h4>Web 2</h4>
                             <p>Web</p>
                             <div class="portfolio-links">
                                 <a href="<?php echo base_url(); ?>assets/front/assets/img/portfolio/portfolio-5.jpg"
                                     data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i
                                         class="bx bx-plus"></i></a>
                                 <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                             </div>
                         </div>
                     </div>
                 </div>

                 <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                     <div class="portfolio-wrap">
                         <img src="<?php echo base_url(); ?>assets/front/assets/img/portfolio/portfolio-6.jpg"
                             class="img-fluid" alt="">
                         <div class="portfolio-info">
                             <h4>App 3</h4>
                             <p>App</p>
                             <div class="portfolio-links">
                                 <a href="<?php echo base_url(); ?>assets/front/assets/img/portfolio/portfolio-6.jpg"
                                     data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i
                                         class="bx bx-plus"></i></a>
                                 <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                             </div>
                         </div>
                     </div>
                 </div>

                 <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                     <div class="portfolio-wrap">
                         <img src="<?php echo base_url(); ?>assets/front/assets/img/portfolio/portfolio-7.jpg"
                             class="img-fluid" alt="">
                         <div class="portfolio-info">
                             <h4>Card 1</h4>
                             <p>Card</p>
                             <div class="portfolio-links">
                                 <a href="<?php echo base_url(); ?>assets/front/assets/img/portfolio/portfolio-7.jpg"
                                     data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i
                                         class="bx bx-plus"></i></a>
                                 <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                             </div>
                         </div>
                     </div>
                 </div>

                 <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                     <div class="portfolio-wrap">
                         <img src="<?php echo base_url(); ?>assets/front/assets/img/portfolio/portfolio-8.jpg"
                             class="img-fluid" alt="">
                         <div class="portfolio-info">
                             <h4>Card 3</h4>
                             <p>Card</p>
                             <div class="portfolio-links">
                                 <a href="<?php echo base_url(); ?>assets/front/assets/img/portfolio/portfolio-8.jpg"
                                     data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i
                                         class="bx bx-plus"></i></a>
                                 <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                             </div>
                         </div>
                     </div>
                 </div>

                 <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                     <div class="portfolio-wrap">
                         <img src="<?php echo base_url(); ?>assets/front/assets/img/portfolio/portfolio-9.jpg"
                             class="img-fluid" alt="">
                         <div class="portfolio-info">
                             <h4>Web 3</h4>
                             <p>Web</p>
                             <div class="portfolio-links">
                                 <a href="<?php echo base_url(); ?>assets/front/assets/img/portfolio/portfolio-9.jpg"
                                     data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i
                                         class="bx bx-plus"></i></a>
                                 <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                             </div>
                         </div>
                     </div>
                 </div>

             </div>

         </div>
     </section>End Portfolio Section -->

     <!-- ======= Team Section ======= -
     <section id="team" class="team">
         <div class="container">

             <div class="section-title">
                 <h2>Team</h2>
                 <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                     sint
                     consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                     fugiat sit
                     in iste officiis commodi quidem hic quas.</p>
             </div>

             <div class="row">

                 <div class="col-xl-3 col-lg-4 col-md-6">
                     <div class="member">
                         <img src="<?php echo base_url(); ?>assets/front/assets/img/team/team-1.jpg" class="img-fluid"
                             alt="">
                         <div class="member-info">
                             <div class="member-info-content">
                                 <h4>Walter White</h4>
                                 <span>Chief Executive Officer</span>
                                 <div class="social">
                                     <a href=""><i class="bi bi-twitter"></i></a>
                                     <a href=""><i class="bi bi-facebook"></i></a>
                                     <a href=""><i class="bi bi-instagram"></i></a>
                                     <a href=""><i class="bi bi-linkedin"></i></a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>

                 <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.1s">
                     <div class="member">
                         <img src="<?php echo base_url(); ?>assets/front/assets/img/team/team-2.jpg" class="img-fluid"
                             alt="">
                         <div class="member-info">
                             <div class="member-info-content">
                                 <h4>Sarah Jhonson</h4>
                                 <span>Product Manager</span>
                                 <div class="social">
                                     <a href=""><i class="bi bi-twitter"></i></a>
                                     <a href=""><i class="bi bi-facebook"></i></a>
                                     <a href=""><i class="bi bi-instagram"></i></a>
                                     <a href=""><i class="bi bi-linkedin"></i></a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>

                 <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.2s">
                     <div class="member">
                         <img src="<?php echo base_url(); ?>assets/front/assets/img/team/team-3.jpg" class="img-fluid"
                             alt="">
                         <div class="member-info">
                             <div class="member-info-content">
                                 <h4>William Anderson</h4>
                                 <span>CTO</span>
                                 <div class="social">
                                     <a href=""><i class="bi bi-twitter"></i></a>
                                     <a href=""><i class="bi bi-facebook"></i></a>
                                     <a href=""><i class="bi bi-instagram"></i></a>
                                     <a href=""><i class="bi bi-linkedin"></i></a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>

                 <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.3s">
                     <div class="member">
                         <img src="<?php echo base_url(); ?>assets/front/assets/img/team/team-4.jpg" class="img-fluid"
                             alt="">
                         <div class="member-info">
                             <div class="member-info-content">
                                 <h4>Amanda Jepson</h4>
                                 <span>Accountant</span>
                                 <div class="social">
                                     <a href=""><i class="bi bi-twitter"></i></a>
                                     <a href=""><i class="bi bi-facebook"></i></a>
                                     <a href=""><i class="bi bi-instagram"></i></a>
                                     <a href=""><i class="bi bi-linkedin"></i></a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>

             </div>

         </div>
     </section><!-- End Team Section -->


     <!-- ======= Frequently Asked Questions Section ======= -->
     <!-- End Frequently Asked Questions Section -->

     <!-- ======= Contact Section ======= -->

     <section id="contact" class="contact">
         <div class="container">

             <div class="section-title">
                 <h2>Contact</h2>
                 <!-- <p>.</p> -->
                 <hr>
             </div>

             <div class="row contact-info">

                 <div class="col-md-4">
                     <div class="contact-address">
                         <i class="bi bi-geo-alt"></i>
                         <a href="https://www.google.com/maps/place/SMP+Negeri+25+Pekanbaru/@0.442705,101.4354265,17z/data=!3m1!4b1!4m5!3m4!1s0x31d5af5653f67081:
                       0xb8c7452d0e428383!8m2!3d0.4426996!4d101.4376152">
                             <h3>Address</h3>
                         </a>
                         <address>Jl. Kartama, Maharatu, Kec. Marpoyan Damai, Kota Pekanbaru, Riau 96010
                         </address>
                     </div>
                 </div>

                 <div class="col-md-4">
                     <div class="contact-phone">
                         <i class="bi bi-phone"></i>
                         <h3>Phone Number</h3>
                         <p><a href="tel:+155895548855">+1 5589 55488 55</a></p>
                     </div>
                 </div>

                 <div class="col-md-4">
                     <div class="contact-email">
                         <i class="bi bi-envelope"></i>
                         <h3>Email</h3>
                         <p><a href="mailto:smpnn25pekanbaru.sch.id">smpnn25pekanbaru.sch.id</a></p>
                     </div>
                 </div>

             </div>
             <!-- 
             <div class="form">
                 <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                     <div class="row">
                         <div class="col-md-6 form-group">
                             <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                 data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                         </div>
                         <div class="col-md-6 form-group mt-3 mt-md-0">
                             <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                                 data-rule="email" data-msg="Please enter a valid email">
                         </div>
                     </div>
                     <div class="form-group mt-3">
                         <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                             required>
                     </div>
                     <div class="form-group mt-3">
                         <textarea class="form-control" name="message" rows="5" placeholder="Message"
                             required></textarea>
                     </div>
                     <div class="my-3">
                         <div class="loading">Loading</div>
                         <div class="error-message"></div>
                         <div class="sent-message">Your message has been sent. Thank you!</div>
                     </div>
                     <div class="text-center"><button type="submit">Send Message</button></div>
                 </form>
             </div> -->

         </div>
     </section><!-- End Contact Section -->

 </main><!-- End #main -->

 <!-- ======= Footer ======= -->
 <footer id="footer">
     <div class="footer-top">
         <div class="container">
             <div class="row">

                 <div class="col-lg-3 col-md-6">
                     <div class="footer-info">
                         <h3>SMPN 25 Pekanbaru</h3>
                         <p>

                             Jl. Kartama, Maharatu,<br>
                             Kec. Marpoyan Damai, Kota Pekanbaru, Riau<br><br>
                             Riau 96010,<br><br>
                             <strong>Phone:</strong> +1 5589 55488 55<br>
                             <strong>Email:</strong> info@example.com<br>
                         </p>
                         <div class="social-links mt-3">
                             <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                             <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                             <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                             <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                             <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                         </div>
                     </div>
                 </div>

                 <div class="col-lg-2 col-md-6 footer-links">
                     <h4>Useful Links</h4>
                     <ul>
                         <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                         <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                         <li><i class="bx bx-chevron-right"></i> <a href="#">NEWS</a></li>
                         <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                         <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                     </ul>
                 </div>

                 <div class="col-lg-3 col-md-6 footer-links">
                     <h4>Our NEWS</h4>
                     <ul>
                         <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                         <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                         <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                         <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                         <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                     </ul>
                 </div>

                 <!---  <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>-->

             </div>
         </div>
     </div>