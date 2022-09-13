<!-- CONTROLLER USER -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-users"></i> Data Alumni
            <small>Profile</small>
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

        <div class="row">
            <div class="col-xs-12 text-right">


                <div class="form-group">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Alumni List</h3>

                    </div><!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table id="datatables" class="table table-bordered table-striped">
                            <thead>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>NISN</th>
                                    <th>Name</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th width="10px">Gender</th>
                                    <th>Tahun Masuk</th>
                                    <th>Tahun Tamat</th>
                                    <th>Pekerjaan</th>
                                    <th>Nama Instansi</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (!empty($x)) {
                                    $no = 1;
                                    foreach ($x as $record) {
                                ?>
                                <tr class="text-center">
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $record->nisn ?></td>
                                    <td><?php echo $record->nama ?></td>
                                    <td><?php echo $record->username ?></td>
                                    <td><?php echo substr($record->email, 0, 12) ?></td>
                                    <td><?php echo $record->mobile ?></td>
                                    <td><?php echo $record->jenis_kelamin ?></td>
                                    <td><?php echo $record->t_msk ?></td>
                                    <td><?php echo $record->t_tmt ?></td>
                                    <td><?php echo $record->pekerjaan ?></td>
                                    <td><?php echo $record->nama_instansi ?></td>
                                    <td width="150px">
                                        <a class="btn btn-sm btn-success"
                                            href="<?php echo base_url() . 'detailProfilAlumni/' . $record->id_alumni ?>"><i
                                                class=" fa fa-search-plus"></i></a>


                                    </td>
                                </tr>
                                <?php
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div><!-- /.box-body -->

                </div><!-- /.box -->
            </div>
        </div>

</div>