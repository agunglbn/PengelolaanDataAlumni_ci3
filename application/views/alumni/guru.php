<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-users"></i> Kategori Berita Sekolah
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
                <a class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>
                    Add
                    New</a>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">List Berita</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table id="datatables" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">NIP</th>
                                    <th class="text-center">Nama Kategori</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">NOHP</th>
                                    <th class="text-center">Salary</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (!empty($guru)) {
                                    $no = 1;
                                    foreach ($guru as $record) {
                                ?>
                                <tr class="text-center">
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $record->nip ?></td>
                                    <td><?php echo $record->nama_pegawai ?></td>
                                    <td><?php echo $record->email ?></td>
                                    <td><?php echo $record->nohp ?></td>
                                    <td><?php echo $record->salary ?></td>

                                    <td width="150px">

                                        <a class="btn btn-sm btn-danger" href="#modalDelete"
                                            onclick="$('#modalDelete #formDelete')
                                        .attr('action','<?php echo base_url() . 'deleteKategoriSekolah/' . $record->id; ?>')" data-toggle="modal"><i
                                                class="fa fa-trash"></i></a>
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
    </section>
    <div class="modal fade" id="modalDelete">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-footer">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Yakin akan menghapus Data</h4>
                </div>
                <div class="modal-body">
                    <center>
                        <form id="formDelete" accept="" method="POST">
                            <button class="btn btn-default" data-dismiss="modal">Cancel</button>
                            <button class="btn btn-primary" type="submit">OK</button>
                        </form>
                    </center>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Pegawai</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo base_url() ?>TambahKategoriSekolah" method="POST">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Nama">NIP</label>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1"><i
                                                class="fa fa-sort-numeric-desc"></i></span>
                                        <input type="text" class="form-control required" id="nip" name="nip"
                                            maxlength="15"
                                            onkeypress="return event.charCode >= 48 && event.charCode <=58"
                                            placeholder="NIP" value="<?= set_value('nip') ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Nama">Nama Pegawai</label>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1"><i
                                                class="fa fa-user"></i></span>
                                        <input type="text" class="form-control required" id="nama_pegawai"
                                            name="nama_pegawai" placeholder="Nama Pegawai"
                                            value="<?= set_value('nama_pegawai') ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Nama">Email</label>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1"><i
                                                class="fa fa-envelope"></i></span>
                                        <input type="text" name="email" id="email" value="<?= set_value('email') ?>"
                                            pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" class="form-control required email"
                                            placeholder="Your Email" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Nama">Mobile</label>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1"><i
                                                class="fa fa-phone-square"></i></span>
                                        <input type="text" class="form-control required" id="nohp" name="nohp"
                                            maxlength="15" placeholder="Mobile" value="<?= set_value('nohp') ?>"
                                            onkeypress="return event.charCode >= 48 && event.charCode <=58">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Nama">Salary</label>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1"><i
                                                class="fa fa-money"></i></span>
                                        <input type="text" class="form-control required" id="salary" name="salary"
                                            placeholder="Salary" value="<?= set_value('salary') ?>">
                                    </div>
                                </div>
                            </div>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save
                        changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>

</div>