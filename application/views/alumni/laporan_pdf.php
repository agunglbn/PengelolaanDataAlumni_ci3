<!DOCTYPE html>
<html>

<head>
    <title>Data Alumni SMPN 25 Pekanbaru</title>
    <style type="text/css">
    .table {
        width: 100%;
        border-spacing: 0;
    }

    .table tr th,
    .table tr td {
        border: 1px solid #000
    }

    .text-center {
        text-align: center;
    }
    </style>
</head>

<body>
    <h4 class="text-center"> Data Alumni SMPN 25 Pekanbaru</h4>
    <table class="table table-bordered">
        <tr>
            <th class="text-center">No</th>
            <th class="text-center">NISN</th>
            <th class="text-center">Username</th>
            <th class="text-center" width="60px">Name</th>
            <th class="text-center">Email</th>
            <th class="text-center">Mobile</th>
            <th class="text-center" width="100px">Alamat</th>
            <th class="text-center" width="5px">Gender</th>
            <th class="text-center">Tahun Masuk</th>
            <th class="text-center">Tahun Tamat</th>
            <th class="text-center">Pekerjaan</th>
            <th class="text-center" width="100px">Prestasi</th>
            <th class="text-center">Nama Instansi</th>
        </tr>
        </thead>
        <tbody>
            <?php
            if (!empty($detail)) {
                $no = 1;
                foreach ($detail as $record) {
            ?>
            <tr class="text-center">
                <td width="10px"><?php echo $no++; ?></td>
                <td><?php echo $record->nisn ?></td>
                <td><?php echo $record->username ?></td>
                <td><?php echo $record->nama ?></td>
                <td><?php echo $record->email ?></td>
                <td><?php echo $record->mobile ?></td>
                <td><?php echo $record->alamat ?></td>
                <td><?php echo $record->jenis_kelamin ?></td>
                <td><?php echo $record->t_msk ?></td>
                <td><?php echo $record->t_tmt ?></td>
                <td><?php echo $record->pekerjaan ?></td>
                <td><?php echo $record->prestasi ?></td>
                <td><?php echo $record->nama_instansi ?></td>
            </tr>
            <?php
                }
            }
            ?>
        </tbody>
    </table>

</body>

</html>