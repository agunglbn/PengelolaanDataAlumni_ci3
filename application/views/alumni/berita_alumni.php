<!-- LIST BERITA ALUMNI DASHBORD ADMIN DAN USER -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-users"></i> Berita Alumni
            <small>List Berita Alumni</small>
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
                <!--  -->
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
                                    <th class="text-center">No</th>
                                    <th class="text-center">Username</th>
                                    <th class="text-center">Judul Berita</th>
                                    <th class="text-center">Kategori</th>
                                    <th class="text-center">Isi Berita</th>
                                    <th class="text-center">Status</th>
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

                                        <span class="btn btn-sm btn-danger" data-toggle="modal"
                                            data-target="#exampleModal<?= $record->id; ?>">Non-Active</span>

                                        <div class="modal fade" id="exampleModal<?= $record->id; ?>" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-sm">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Aktivisasi Berita
                                                            Alumni</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="<?php echo base_url() ?>updateStatusBerita"
                                                            method="POST">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <input type="hidden" name="id"
                                                                        value="<?= $record->id; ?>" />
                                                                    <div class="form-group">
                                                                        <label for="status">Status</label>
                                                                        <select class="form-control required"
                                                                            id="status" name="status">
                                                                            <option value="1"
                                                                                <?php if ($record->status == "1") echo "selected='selected'" ?>>
                                                                                Active
                                                                            </option>
                                                                            <option value="0"
                                                                                <?php if ($record->status == "0") echo "selected='selected'" ?>>
                                                                                Non Active
                                                                            </option>

                                                                        </select>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary">Save
                                                                    changes</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                            <?php
                                                } else { ?>
                                            <span class="btn btn-sm btn-success" data-toggle="modal"
                                                data-target="#exampleModalactive<?= $record->id; ?>">Active</span>


                                            <div class="modal fade" id="exampleModalactive<?= $record->id; ?>"
                                                tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-sm">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Aktivisasi
                                                                Berita Alumni</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="<?php echo base_url() ?>updateStatusBerita"
                                                                method="POST">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <input type="hidden" name="id"
                                                                            value="<?= $record->id; ?>" />
                                                                        <div class="form-group">
                                                                            <label for="status">Status</label>
                                                                            <select class="form-control required"
                                                                                id="status" name="status">

                                                                                <option value="1"
                                                                                    <?php if ($record->status == "1") echo "selected='selected'" ?>>
                                                                                    Active
                                                                                </option>
                                                                                <option value="0"
                                                                                    <?php if ($record->status == "0") echo "selected='selected'" ?>>
                                                                                    Non Active
                                                                                </option>

                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-primary">Save
                                                                        changes</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>


                                                <?php
                                                    }
                                                        ?>

                                    </td>
                                    <td width="150px">
                                        <a class="btn btn-sm btn-success"
                                            href="<?php echo base_url() . 'DetailDataBeritaAlumni/' . $record->id ?>"><i
                                                class=" fa fa-search-plus"></i></a>

                                        <a class="btn btn-sm btn-danger" href="#modalDelete"
                                            onclick="$('#modalDelete #formDelete')
                                        .attr('action','<?php echo base_url() . 'DeleteBeritaAlumni/' . $record->id; ?>')" data-toggle="modal"><i
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