<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-users"></i> User Management
            <small>Add / Edit User</small>
        </h1>
    </section>

    <section class="content">

        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
                <!-- general form elements -->

                <div class="box box-primary">
                    <div class="box-body">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
                            Upload File
                        </button>

                        <div class="modal fade" id="modal-default">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title">Upload File Excel</h4>
                                    </div>
                                    <div class="modal-body">

                                        <form method="POST" enctype="multipart/form-data"
                                            action="<?php echo base_url() ?>User/import_excel">
                                            <div class="form-group">
                                                <label for="exampleInputFile">File input</label>
                                                <input type="file" accept=".xlsx" name="file" id="exampleInputFile">
                                                <p class="help-block">Masukkan File Dalam Bentuk Excel.</p>
                                            </div>


                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default pull-left"
                                                    data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Upload</button>
                                            </div>
                                    </div>
                                </div>
                                </form>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                        <h3 class="box-title">Enter User Details</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->

                    <form enctype="multipart/form-data" id="" action="<?php echo base_url() ?>User/newAlumni"
                        method="POST">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label for="mobile">NISN</label>
                                        <input type="text" class="form-control required digits" id="nisn" name="nisn"
                                            maxlength="13" value="<?= set_value('nisn') ?>">
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control required" id="username" name="username"
                                            maxlength="128" placeholder="agunglbn" value="<?= set_value('username') ?>">
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label for="mobile">Password</label>
                                        <input type="password" class="form-control required digits" id="password"
                                            placeholder="*****" name="password" maxlength="13"
                                            value="<?= set_value('password') ?>">
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label for="password">Confirm Password</label>
                                        <input type="password" class="form-control required" id="Password2"
                                            name="password2" maxlength="128" placeholder="*****"
                                            value="<?= set_value('password2') ?>">
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <select class="form-control " id="status" name="status">
                                            <option value="0" disabled selected hidden>--Select Role--</option>
                                            <option value="1">Active</option>
                                            <option value="0">Non-Active</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                        </div><!-- /.box-body -->

                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" value="Submit" name="submit" />
                            <input type="reset" class="btn btn-default" value="Reset" />
                        </div>

                    </form>
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
        </div>
    </section>

</div>
<script src="<?php echo base_url(); ?>assets/js/addUser.js" type="text/javascript"></script>