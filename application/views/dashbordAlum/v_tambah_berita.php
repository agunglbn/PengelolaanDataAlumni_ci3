<script src="<?php echo base_url(); ?>assets/bower_components/ckeditor/ckeditor.js"></script>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Tambah Berita Alumni
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li> <a href="<?php echo base_url(); ?>dashboardAlum"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"> Berita</a></li>
            <li class="active">Diskusi</li>
        </ol>
    </section>

    <!-- Main content -->
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
            <div class="col-md-12">
                <div class="box box-info">
                    <div class="box-header">
                        <h3 class="box-title">Tambah Berita
                            <small>Advanced and full of features</small>
                        </h3>
                        <!-- tools box -->
                        <div class="pull-right box-tools">
                            <button type="button" class="btn btn-info btn-sm" data-widget="collapse"
                                data-toggle="tooltip" title="Collapse">
                                <i class="fa fa-minus"></i></button>
                            <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                                title="Remove">
                                <i class="fa fa-times"></i></button>
                        </div>
                        <!-- /. tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body pad">
                        <form enctype="multipart/form-data" id="" action="<?php echo base_url() ?>tambahdiskusi"
                            method="POST">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="hidden" name="id_alumni" value="<?= $user['id_alumni'] ?>" />
                                <input type="text" name="username" id="username" value="<?= $user['username'] ?>"
                                    readonly class="form-control" placeholder="Masukkan Judul Diskusi ...">
                            </div>
                            <div class="form-group">
                                <label>Judul Berita</label>
                                <input type="text" class="form-control" name="judul"
                                    placeholder="Masukkan Judul Diskusi ..." value="<?= set_value('judul'); ?>">
                                <?php echo form_error('judul', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>

                            <div class="form-group">
                                <label>Kategori</label>
                                <select class="form-control" name="kategori" data-placeholder="Select a State">
                                    <option value="0" disabled selected hidden>--Select Kategori--</option>
                                    <?php foreach ($kategori as $row) : ?>
                                    <option value="<?php echo $row->nama_kategori; ?>">
                                        <?php echo $row->nama_kategori; ?>
                                    </option>
                                    <?php endforeach; ?>
                                </select>
                                <?php echo form_error('kategori', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <textarea id="editor1" name="isi" rows="10" cols="80">
                                          Masukkan Isi Berita ...
                                </textarea>
                            <?php echo form_error('isi', '<small class="text-danger pl-3">', '</small>'); ?>

                            <input type="hidden" class="form-control required image" id="img" name="img"
                                value="<?php echo $user['img']; ?>" accept="image/*">

                            <div class="box-footer">
                                <input type="submit" class="btn btn-primary" value="Save" name="submit" />
                                <input value="Back" class="btn btn-primary" onclick="history.back(-1)" type="Button"
                                    value="Back ">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script>
$(function() {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
})
</script>