<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-users"></i> Data Berita Alumni
            <small>Berita Alumni</small>
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
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Username</th>
                                    <th>Judul Berita</th>
                                    <th>Kategori</th>
                                    <th>Isi Berita</th>
                                    <th>Status</th>
                                    <th class="text-center">Actions</th>



                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (!empty($berita)) {
                                    $no = 1;
                                    foreach ($berita as $record) {
                                ?>
                                <tr class="text-center">
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $record->username ?></td>
                                    <td><?php echo $record->judul ?></td>
                                    <td><?php echo $record->kategori ?></td>
                                    <td><?php echo word_limiter($record->isi, 5, '...') ?></td>
                                    <td>
                                        <?php
                                                $status = $record->status;
                                                if ($status == 0) {
                                                ?>
                                        <span class="label label-danger">Non-Active</span>
                                        <?php
                                                } else { ?>
                                        <span class="label label-success">Active</span>
                                        <?php
                                                }
                                                ?>

                                    </td>
                                    <td colspan="2" width="150px">

                                        <a class="btn btn-sm btn-info"
                                            href="<?php echo base_url() . 'editBerita/' . $record->id; ?>"><i
                                                class="fa fa-pencil"></i></a>

                                        <!--  <a class="btn btn-sm btn-danger"
                                            href="<?php echo base_url() . 'deleteBeritaAlumni/' . $record->id; ?>"><i
                                                class="fa fa-trash"></i></a>-->
                                        <a class="btn btn-sm btn-danger" href="#modalDelete"
                                            onclick="$('#modalDelete #formDelete')
                                        .attr('action','<?php echo base_url() . 'deleteBeritaAlumni/' . $record->id; ?>')" data-toggle="modal"><i
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

</div>