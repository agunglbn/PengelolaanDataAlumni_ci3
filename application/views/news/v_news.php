<div id="wrapper">
    <header class="tech-header header">
        <div class="container-fluid">
            <div class="page-title lb single-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                            <h2><i class="fa fa-star bg-orange"></i> Berita Alumni <small
                                    class="hidden-xs-down hidden-sm-down">Berita Alumni SMPN 25 Pekanbaru
                                </small></h2>
                        </div><!-- end col -->
                        <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>front">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Form Diskusi</a></li>
                                <li class="breadcrumb-item active">Berita</li>
                            </ol>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end page-title -->

            <section class="section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                            <div class="page-wrapper">
                                <div class="blog-list clearfix">
                                    <?php
                                    if (!empty($berita)) {
                                        foreach ($berita as $row) { ?>
                                    <div class="blog-box row">
                                        <div class="col-md-4">
                                            <div class="post-media">
                                                <a href="tech-single.html" title="">
                                                    <img src="<?php echo base_url(); ?>assets/img/<?php echo $row->img; ?>"
                                                        alt="NOT FOUND" class="img-fluid">
                                                    <div class="hovereffect"></div>
                                                </a>
                                            </div><!-- end media -->
                                        </div><!-- end col -->

                                        <div class="blog-meta big-meta col-md-8">
                                            <h4><a href="<?php echo base_url() . 'DetailBeritaAlumni/' . $row->id; ?>"
                                                    title=""> <?php echo word_limiter($row->judul, 10, '....') ?></a>
                                            </h4>
                                            <p><?php echo word_limiter($row->isi, 45, '....') ?></p>
                                            <small class="firstsmall"><a class="bg-orange" href="#"
                                                    title=""><?php echo $row->kategori ?></a></small>
                                            <small><a href="tech-single.html"
                                                    title=""><?php echo $row->created ?></a></small>
                                            <small><a href="tech-author.html" title="">Posted
                                                    By : <?php echo $row->username ?></a></small>

                                        </div><!-- end meta -->
                                    </div><!-- end blog-box -->

                                    <hr class="invis">

                                    <?php }
                                    } ?>
                                </div><!-- end blog-list -->
                            </div><!-- end page-wrapper -->

                            <hr class="invis">

                            <div class="row">
                                <div class="col-md-12">
                                    <?php echo $pagination ?>
                                    <!--    <nav aria-label="Page navigation">
                                        <ul class="pagination justify-content-start">
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">Next</a>
                                            </li>
                                        </ul>
                                    </nav>-->
                                </div><!-- end col -->
                            </div><!-- end row -->
                        </div><!-- end col -->

                        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                            <div class="sidebar">
                                <div class="widget">
                                    <h2 class="widget-title">Follow Us</h2>

                                    <div class="row text-center">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                            <a href="#" class="social-button facebook-button">
                                                <i class="fa fa-facebook"></i>
                                                <p>27k</p>
                                            </a>
                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                            <a href="#" class="social-button twitter-button">
                                                <i class="fa fa-twitter"></i>
                                                <p>98k</p>
                                            </a>
                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                            <a href="#" class="social-button google-button">
                                                <i class="fa fa-google-plus"></i>
                                                <p>17k</p>
                                            </a>
                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                            <a href="#" class="social-button youtube-button">
                                                <i class="fa fa-youtube"></i>
                                                <p>22k</p>
                                            </a>
                                        </div>
                                    </div>
                                </div><!-- end widget -->


                                <!-- WIDGET GAMBAR
                                <div class="widget">
                                    <div class="banner-spot clearfix">
                                        <div class="banner-img">
                                            <img src="upload/banner_07.jpg" alt="" class="img-fluid">
                                        </div><!-- end banner-img --
                                    </div><!-- end banner --
                                </div><!-- end widget -->

                                <!-- WIDGET VIDEO
                                <div class="widget">
                                    <h2 class="widget-title">Trend Videos</h2>
                                    <div class="trend-videos">
                                        <div class="blog-box">
                                            <div class="post-media">
                                                <a href="tech-single.html" title="">
                                                    <img src="upload/tech_video_01.jpg" alt="" class="img-fluid">
                                                    <div class="hovereffect">
                                                        <span class="videohover"></span>
                                                    </div><!-- end hover --
                                </a>
                            </div>
                            <!-- end media --
                                            <div class="blog-meta">
                                                <h4><a href="tech-single.html" title="">We prepared the best 10
                                                        laptop
                                                        presentations for you</a></h4>
                                            </div><!-- end meta --
                        </div>
                        <!-- end blog-box --

                                        <hr class="invis">

                                        <div class="blog-box">
                                            <div class="post-media">
                                                <a href="tech-single.html" title="">
                                                    <img src="upload/tech_video_02.jpg" alt="" class="img-fluid">
                                                    <div class="hovereffect">
                                                        <span class="videohover"></span>
                                                    </div><!-- end hover --
                                                </a>
                                            </div><!-- end media --
                                            <div class="blog-meta">
                                                <h4><a href="tech-single.html" title="">We are guests of ABC Design
                                                        Studio -
                                                        Vlog</a></h4>
                                            </div><!-- end meta --
                                        </div><!-- end blog-box --

                                        <hr class="invis">

                                        <div class="blog-box">
                                            <div class="post-media">
                                                <a href="tech-single.html" title="">
                                                    <img src="upload/tech_video_03.jpg" alt="" class="img-fluid">
                                                    <div class="hovereffect">
                                                        <span class="videohover"></span>
                                                    </div><!-- end hover --
                                                </a>
                                            </div><!-- end media --
                                            <div class="blog-meta">
                                                <h4><a href="tech-single.html" title="">Both blood pressure monitor
                                                        and
                                                        intelligent clock</a></h4>
                                            </div><!-- end meta --
                                        </div><!-- end blog-box --
                                    </div><!-- end videos --
                                </div><!-- end widget -->

                                <div class="widget">
                                    <a href="<?php echo base_url(); ?>BeritaSekolah">
                                        <h2 class="widget-title">School News Post </h2>
                                    </a>
                                    <div class="blog-list-widget">
                                        <div class="list-group">
                                            <?php
                                            if (!empty($sekolah)) {
                                                foreach ($sekolah as $row) { ?>
                                            <a href="<?php echo base_url() . 'DetailBeritaSekolah/' . $row->id; ?>"
                                                class="list-group-item list-group-item-action flex-column align-items-start">
                                                <div class="w-100 justify-content-between">
                                                    <img src="<?php echo base_url(); ?>assets/img-berita/<?php echo $row->img; ?> "
                                                        alt="NOT FOUND" class="img-fluid float-left">
                                                    <h5 class="mb-1"><?php echo word_limiter($row->judul, 10, '....') ?>
                                                    </h5>
                                                    <small><?php echo $row->created ?></small>
                                                </div>
                                            </a>
                                            <?php }
                                            } ?>
                                        </div>
                                    </div><!-- end blog-list -->
                                </div><!-- end widget -->

                                <!--
                                <div class="widget">
                                    <h2 class="widget-title">Recent Reviews</h2>
                                    <div class="blog-list-widget">
                                        <div class="list-group">
                                            <a href="tech-single.html"
                                                class="list-group-item list-group-item-action flex-column align-items-start">
                                                <div class="w-100 justify-content-between">
                                                    <img src="upload/tech_blog_02.jpg" alt=""
                                                        class="img-fluid float-left">
                                                    <h5 class="mb-1">Banana-chip chocolate cake recipe..</h5>
                                                    <span class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                </div>
                                            </a>

                                            <a href="tech-single.html"
                                                class="list-group-item list-group-item-action flex-column align-items-start">
                                                <div class="w-100 justify-content-between">
                                                    <img src="upload/tech_blog_03.jpg" alt=""
                                                        class="img-fluid float-left">
                                                    <h5 class="mb-1">10 practical ways to choose organic..</h5>
                                                    <span class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                </div>
                                            </a>

                                            <a href="tech-single.html"
                                                class="list-group-item list-group-item-action flex-column align-items-start">
                                                <div class="w-100 last-item justify-content-between">
                                                    <img src="upload/tech_blog_07.jpg" alt=""
                                                        class="img-fluid float-left">
                                                    <h5 class="mb-1">We are making homemade ravioli..</h5>
                                                    <span class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                </div>
                                            </a>
                                        </div>
                                    </div><!-- end blog-list --
                                </div><!-- end widget --
                                <div class="widget">
                                    <div class="banner-spot clearfix">
                                        <div class="banner-img">
                                            <img src="upload/banner_03.jpg" alt="" class="img-fluid">
                                        </div><!-- end banner-img --
                                    </div><!-- end banner --
                                </div><!-- end widget -->
                            </div><!-- end sidebar -->
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end container -->
            </section>