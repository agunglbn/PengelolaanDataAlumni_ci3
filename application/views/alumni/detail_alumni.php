<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-users"></i> User Management
            <small>Add / Detail Data</small>
        </h1>
    </section>

    <section class="content">

        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
                <!-- general form elements -->

                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Enter User Details</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->

                    <form enctype="multipart/form-data" id="" method="GET">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="mobile">NISN</label>
                                        <input type="text" class="form-control required digits" id="nisn" name="nisn"
                                            maxlength="13" readonly value="<?php echo $detail->nisn ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nama">Full Name</label>
                                        <input type="text" class="form-control required" id="nama" name="nama"
                                            maxlength="128" placeholder="Agung Ferdinan" readonly
                                            value="<?php echo $detail->nama ?>">
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email address</label>
                                        <input type="text" class="form-control required email" id="email" name="email"
                                            maxlength="128" placeholder="@gmai.com" readonly
                                            value="<?php echo $detail->email ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="mobile">Mobile Number</label>
                                        <input type="text" class="form-control required digits" id="mobile"
                                            name="mobile" maxlength="10" placeholder="08123456789" readonly
                                            value="<?php echo $detail->mobile ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="mobile">Nama Instansi</label>
                                        <input type="text" class="form-control required digits" id="ni" name="ni"
                                            maxlength="128" readonly readonly
                                            value="<?php echo $detail->nama_instansi ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="pekerjaan">Pekerjaan</label>
                                        <input type="text" class="form-control required digits" id="pekerjaan" readonly
                                            name="pekerjaan" maxlength="4" value="<?php echo $detail->pekerjaan ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="mobile">Tahun Masuk</label>
                                        <input type="text" class="form-control required digits" id="tmsk" name="tmsk"
                                            maxlength="4" placeholder="2019" readonly
                                            value="<?php echo $detail->t_msk ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="mobile">Tahun Tamat</label>
                                        <input type="text" class="form-control required digits" id="tklr" name="tklr"
                                            maxlength="4" readonly value="<?php echo $detail->t_tmt ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="jk">Jenis Kelamin</label>
                                        <input type="text" class="form-control required digits" id="jk" name="jk"
                                            maxlength="4" placeholder="2022" readonly
                                            value="<?php echo $detail->jenis_kelamin ?>">

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6 col-md-3">
                                        <a>
                                            <img width="150" height="190" class="card-img-top" alt="NOT FOUND"
                                                src="<?php echo base_url(); ?>assets/img/<?php echo $detail->img; ?>">
                                        </a>
                                    </div>

                                </div>

                            </div>
                        </div><!-- /.box-body -->
                        <div class="box-footer">
                            <a class="btn btn-primary" href="<?php echo base_url(); ?>alumni" name="submit">Back</a>

                        </div>
                    </form>

                </div>
            </div>
        </div>
        <div class="col-md-4">
            <?php
            $this->load->helper('form');
            $error = $this->session->flashdata('error');
            if ($error) {
            ?>
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <?php echo $this->session->flashdata('error'); ?>
            </div>
            <?php } ?>
            <?php
            $success = $this->session->flashdata('success');
            if ($success) {
            ?>
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <?php echo $this->session->flashdata('success'); ?>
            </div>
            <?php } ?>

            <div class="row">
                <div class="col-md-12">
                    <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
                </div>
            </div>
        </div>

    </section>
</div>