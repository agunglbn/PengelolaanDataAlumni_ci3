<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard
            <small>Control panel</small>
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-lg-4 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3><?php echo $alumni ?></h3>
                        <p>Alumni</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="<?php echo base_url(); ?>alumni" class="small-box-footer">More info <i
                            class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div><!-- ./col -->

            <div class="col-lg-4 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3><?php echo $diskusi ?></h3>
                        <p>Aktivisasi Berita Alumni</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-ios-book "></i>
                    </div>
                    <a href="<?php echo base_url(); ?>BeritaAlumni" class="small-box-footer">More info <i
                            class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div><!-- ./col -->
            <div class="col-lg-4 col-xs-6">
                <!-- small box -->

                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3><?php echo $berita ?></h3>
                        <p>Data Berita Sekolah</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="<?php echo base_url(); ?>beritasekolah" class="small-box-footer">More info <i
                            class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div><!-- ./col -->

            <!--   <div class="col-lg-3 col-xs-6">
                <!-- small box --
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3>65</h3>
                        <p>Berita Sekolah</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div><!-- ./col -->
        </div>

    </section>



</div>