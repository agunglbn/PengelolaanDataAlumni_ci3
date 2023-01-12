<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
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
        </div>
    </div>
</body>

</html>