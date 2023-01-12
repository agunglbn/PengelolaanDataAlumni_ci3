<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link href="<?php echo base_url(); ?>assets/alumni/register/vendor/mdi-font/css/material-design-iconic-font.min.css"
        rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>assets/alumni/register/vendor/font-awesome-4.7/css/font-awesome.min.css"
        rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="<?php echo base_url(); ?>assets/alumni/register/vendor/select2/select2.min.css" rel="stylesheet"
        media="all">
    <link href="<?php echo base_url(); ?>assets/alumni/register/vendor/datepicker/daterangepicker.css" rel="stylesheet"
        media="all">

    <!-- Main CSS-->

    <link href="<?php echo base_url(); ?>assets/alumni/register/css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Registration Alumni</h2>
                    <form class="form-detail" enctype="multipart/form-data" action="<?php echo base_url() ?>regisAlumni"
                        method="POST" id="myform">
                        <div class="input-group">
                            <label class="label">NISN</label>
                            <input class="input--style-4" type="text" name="nisn" placeholder="19312312424 "
                                maxlength="15" onkeypress="return event.charCode >= 48 && event.charCode <=58" required
                                value="<?= set_value('nisn'); ?>">
                            <?php echo form_error('nisn', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <!-- <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Birthday</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="text" name="birthday">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div> -->
                        <!-- <div class="col-2">
                            <div class="input-group">
                                <label class="label">Gender</label>
                                <div class="p-t-10">
                                    <label class="radio-container m-r-45">Male
                                        <input type="radio" checked="checked" name="gender">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radio-container">Female
                                        <input type="radio" name="gender">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                </div> -->

                        <div class="input-group">
                            <label class="label">Username</label>
                            <input class="input--style-4" type="text" name="username" placeholder="Agung"
                                value="<?= set_value('username'); ?>">
                            <?php echo form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Password</label>
                                    <input class="input--style-4" type="password" name="password"
                                        placeholder="*********">
                                </div>
                                <?php echo form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Confirm Password</label>
                                    <input class="input--style-4" type="password" name="password2"
                                        placeholder="*********">
                                </div>
                                <?php echo form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>

                        </div>
                        <div class="input-group">
                            <label class="label">Answer</label>

                            <input class="input--style-4" type="text" name="nama_pegawai"
                                value="<?= set_value('answer'); ?>">
                            <small>Masukkan Salah Satu Nama Pegawai Terlama SMPN 25 Pekanbaru</small>
                        </div>


                        <!-- <div class="input-group">
                            <label class="label">Subject</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="subject">
                                    <option disabled="disabled" selected="selected">Choose option</option>
                                    <option>Subject 1</option>
                                    <option>Subject 2</option>
                                    <option>Subject 3</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div> -->
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="<?php echo base_url(); ?>assets/alumni/register/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="<?php echo base_url(); ?>assets/alumni/register/vendor/select2/select2.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/alumni/register/vendor/datepicker/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/alumni/register/vendor/datepicker/daterangepicker.js"></script>
    <!-- Sweeat Alert -->
    <script src="<?= base_url(); ?>assets/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <!-- Main JS-->
    <script src="<?php echo base_url(); ?>assets/alumni/register/js/global.js"></script>
    <script>
    $(document).ready(function() {
        <?php if ($this->session->flashdata('error_msg')) { ?>
        Swal.fire({
            icon: 'error',
            title: 'Error ... !!!',
            text: '<?php echo $this->session->flashdata('error_msg'); ?>',
        })
        <?php } ?>
    })
    </script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->