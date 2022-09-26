<!doctype html>
<html lang="en">

<head>
    <!-- Favicons -->
    <link href="<?php echo base_url(); ?>assets/front/assets/img/favicon.jpg" rel="icon">
    <title>Login Alumni</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/alumni/login/css/style.css">

</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Login Alumni</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="wrap d-md-flex">
                        <div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
                            <div class="text w-100">
                                <h2>Welcome to login</h2>
                                <p>Alumni SMPN 25 Pekanbaru</p>
                                Notice ! Gunakan Nama Depan Untuk Username Dan NISN Untuk Password.
                            </div>
                        </div>
                        <div class="login-wrap p-4 p-lg-5">
                            <div class="d-flex">
                                <div class="w-100">

                                    <!-- <?php
                                            $this->load->helper('form');
                                            $error = $this->session->flashdata('error_msg');
                                            if ($error) {
                                            ?>
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <?php echo $this->session->flashdata('error_msg'); ?>
                                    </div>
                                    <?php } ?>
                                    <?php
                                    $success = $this->session->flashdata('success_msg');
                                    if ($success) {
                                    ?>
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <?php echo $this->session->flashdata('success_msg'); ?>
                                    </div>
                                    <?php } ?> -->
                                    <h3 class="mb-4">Sign In</h3>
                                </div>

                            </div>
                            <form action="<?php echo base_url() ?>login/loginAlumni" method="POST" id="myform"
                                class="signin-form">
                                <div class="form-group mb-3">
                                    <label class="label" for="name">Username</label>
                                    <input type="text" name="username" id="username" class="form-control"
                                        placeholder="Username" required value="<?= set_value('username'); ?>">
                                    <?php echo form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="password">Password</label>
                                    <input type="password" name="password" id="password" class="form-control"
                                        placeholder="Password"
                                        required><?php echo form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-primary submit px-3">Sign
                                        In</button>
                                </div>

                                <div class="form-group d-md-flex">
                                    <div class="w-50 text-left">
                                        <label class="checkbox-wrap checkbox-primary mb-0">Remember Me
                                            <input type="checkbox" checked>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="w-50 text-md-right">
                                        <a href="#">Forgot Password</a>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <script src="<?= base_url(); ?>assets/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/alumni/login/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/alumni/login/js/popper.js"></script>
    <script src="<?php echo base_url(); ?>assets/alumni/login/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/alumni/login/js/main.js"></script>
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
</body>

</html>