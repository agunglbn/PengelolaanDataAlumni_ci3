<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <!-- Favicons -->
    <link href="<?php echo base_url(); ?>assets/front/assets/img/favicon.jpg" rel="icon">
    <title>Register Alumni</title>
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Font-->
    <link rel="stylesheet" type="text/css"
        href="<?php echo base_url(); ?>assets/alumni/register/css/montserrat-font.css">
    <link rel="stylesheet" type="text/css"
        href="<?php echo base_url(); ?>assets/alumni/register/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <!-- Main Style Css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/alumni/register/css/style.css" />
</head>

<body class="form-v10">
    <div class="page-content">
        <div class="form-v10-content">
            <form class="form-detail" enctype="multipart/form-data" action="<?php echo base_url() ?>login/regisAlumni"
                method="POST" id="myform">
                <div class="form-left">
                    <h2>Indentitas Diri</h2>
                    <div class="form-row">
                        <input maxlength="128" type="text" name="nama" class="company" id="nama"
                            placeholder="Nama Lengkap" required value="<?= set_value('nama'); ?>">
                        <?php echo form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-row">
                        <input type="text" name="email" id="email" class="input-text" required maxlength="128"
                            pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="Your Email"
                            value="<?= set_value('email'); ?>">
                        <?php echo form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-row form-row-2">
                        <input type="text" name="mobile" id="mobile" placeholder="Phone Number" maxlength="13"
                            onkeypress="return event.charCode >= 48 && event.charCode <=58" required
                            value="<?= set_value('mobile'); ?>">
                        <?php echo form_error('mopbile', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-row">
                        <select name="jk" id="jk" required>
                            <option required value="0" disabled selected hidden>--Jenis Kelamin--</option>
                            <option value="L">Laki-Laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                        <?php echo form_error('jk', '<small class="text-danger pl-3">', '</small>'); ?>
                        <span class="select-btn">
                            <i class="zmdi zmdi-chevron-down"></i>
                        </span>
                    </div>
                    <div class="form-row">
                        <input type="text" name="alamat" id="alamat" placeholder="Alamat Sekarang" maxlength="128"
                            required value="<?= set_value('alamat'); ?>">
                        <?php echo form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-row">
                        <input type="date" name="date" id="date" placeholder="mm/dd/yyyy" required>
                        <?php echo form_error('date', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <!--
					<div class="form-group">
						<div class="form-row form-row-3">
							<input type="text" name="business" class="business" id="business"
								placeholder="Business Arena" required>
						</div>
						<div class="form-row form-row-4">
							<select name="employees">
								<option value="employees">Employees</option>
								<option value="trainee">Trainee</option>
								<option value="colleague">Colleague</option>
								<option value="associate">Associate</option>
							</select>
							<span class="select-btn">
								<i class="zmdi zmdi-chevron-down"></i>
							</span>
						</div>
					</div>-->
                </div>
                <div class="form-right">
                    <h2>Identitas Lanjut</h2>
                    <div class="form-row">
                        <input type="text" name="nisn" class="nisn" id="nisn" placeholder="Masukkan NISN "
                            maxlength="13" onkeypress="return event.charCode >= 48 && event.charCode <=58" required
                            value="<?= set_value('nisn'); ?>">
                        <?php echo form_error('nisn', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <div class="form-row form-row-1">
                            <select name="pekerjaan" required>
                                <option value="0" disabled selected hidden>--Status--</option>
                                <option value="Mahasiswa">Mahasiswa</option>
                                <option value="Bekerja">Bekerja</option>
                            </select>
                            <?php echo form_error('pekerjaan', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-row form-row-2">
                            <input maxlength="128" type="text" name="ni" id="ni" placeholder="Nama Instansi" required
                                value="<?= set_value('ni'); ?>">
                            <?php echo form_error('ni', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                    </div>

                    <div class="form-group">
                        <div class="form-row form-row-3">
                            <input type="text" class="form-control required digits" id="tmsk" name="tmsk" maxlength="4"
                                placeholder="Tahun Masuk"
                                onkeypress="return event.charCode >= 48 && event.charCode <=58"
                                value="<?= set_value('tmsk'); ?>" required>
                            <span class="select-btn">
                                <i class="zmdi zmdi-calendar-note"></i>
                            </span>
                            <?php echo form_error('tmsk', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-row form-row-3">
                            <input type="text" class="form-control required digits" id="tklr" name="tklr" maxlength="4"
                                placeholder="Tahun Keluar" value="<?= set_value('tklr'); ?>"
                                onkeypress="return event.charCode >= 48 && event.charCode <=58" required>
                            <span class="select-btn">
                                <i class="zmdi zmdi-calendar-note"></i>
                            </span>
                            <?php echo form_error('tklr', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>


                    <div class="form-row form-row-2">
                        <input type="text" maxlength="64" name="username" id="username" placeholder="Username"
                            value="<?= set_value('username'); ?>" required>
                        <?php echo form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <div class="form-row form-row-2">

                        <input type="password" name="password" id="password" placeholder="Your Password" required>
                        <span class="select-btn">
                            <i class="zmdi zmdi-key"></i>
                        </span>

                        <?php echo form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>


                    </div>
                    <!--<div class="form-row">
                        <input type="password" name="password" id="password" placeholder="Masukkan Password" required>
                    </div>-->

                    <div class="form-row-last">
                        <input type="submit" name="submit" class="register" value="Register ">
                        <input value="Back" onclick="history.back(-1)" type="Button" name="register" class="register"
                            value="Back ">
                    </div>


                </div>
            </form>
        </div>
    </div>

</body>

</html>