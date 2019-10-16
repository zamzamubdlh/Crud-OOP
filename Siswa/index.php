<?php 
// menambah / memanggil file database.php
include '../database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan CRUD - Read Data</title>
</head>
<body>
    <center>Data Siswa</center>
    <a href="create.php">Input Data Siswa</a>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nomor Induk Siswa</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th colspan="3">Aksi</th>
        </tr>
        <?php
            $no = 1;
            foreach($siswa->index() as $data) {
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['nis']; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['alamat']; ?></td>
            <td><a href="show.php?id=<?php echo $data['id']; ?>">Show</a></td>
            <td><a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a></td>
            <td><a href="proses.php?id=<?php echo $data['id']; ?>&aksi=delete">Delete</a></td>
        </tr>
        <?php }?>
    </table>
</body>
</html>