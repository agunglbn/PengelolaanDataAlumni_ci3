<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-user" aria-hidden="true"></i> <?php echo $title; ?>
            <small>Control panel</small>
        </h1>

    </section>

    <section class="content">
        <?php
        $this->load->helper('form');
        $error = $this->session->flashdata('error_msg');
        if ($error) {
        ?>
        <div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <?php echo $this->session->flashdata('error_msg'); ?>
        </div>
        <?php } ?>
        <?php
        $success = $this->session->flashdata('success_msg');
        if ($success) {
        ?>
        <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <?php echo $this->session->flashdata('success_msg'); ?>
        </div>
        <?php } ?>
        <!--   <div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

</div>-->
        <form enctype="multipart/form-data" action="<?php echo base_url() ?>ChangePasswordAlumni" method="POST">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-6">
                        <label for="oldpassword">Password Lama</label>
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1"><i class="fa fa-key"></i></span>
                            <input type="password" name="oldpassword" id="oldpassword" value="" class="form-control"
                                placeholder="Your Password" aria-describedby="basic-addon1">
                        </div>
                        <?php echo form_error('oldpassword', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <label for="newpassword">Password Baru</label>
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1"><i class="fa fa-key"></i></span>
                            <input type="password" name="newpassword" id="newpassword" value="" class="form-control"
                                placeholder="Your Password" aria-describedby="basic-addon1">
                        </div>
                        <?php echo form_error('newpassword', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="col-md-6">
                        <label for="newpassword2">Confirm Password</label>
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1"><i class="fa fa-key"></i></span>
                            <input type="password" name="newpassword2" id="newpassword2" value="" class="form-control"
                                placeholder="Your Password" aria-describedby="basic-addon1">
                        </div>
                        <?php echo form_error('newpassword2', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>

            </div>
            <br>
            <div class="">
                <input type="submit" class="btn btn-primary" value="Save" name="submit" />
                <input value="Back" class="btn btn-primary" onclick="history.back(-1)" type="Button" value="Back ">
            </div>
        </form>






    </section>



</div>