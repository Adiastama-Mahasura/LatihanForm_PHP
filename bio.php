<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tampil Form</title>
</head>

<body>

    <h1>TABEL DATA INVENTARIS</h1>

    <table border="1">
        <tr>
            <th>NIS</th>
            <th>Nama Siswa</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Kompetensi keahlian</th>
            <th>Email</th>
            <th>Tinggi Badan</th>
            <th>Ekstrakulikuler</th>
            <th>Alamat</th>
        </tr>

        <tr>
            <td><?php echo $_GET['nis']; ?></td>
            <td><?php echo $_GET['nama']; ?></td>
            <td><?php echo $_GET['tgl_lahir']; ?></td>
            <td><?php echo $_GET['jk']; ?></td>
            <td><?php echo $_GET['kk']; ?></td>
            <td><?php echo $_GET['email']; ?></td>
            <td><?php echo $_GET['tinggi']; ?></td>
            <td><?php echo implode (',',(array) $_GET['ekskul']); ?></td>
            <td><?php echo $_GET['alamat']; ?></td>
        </tr>
    </table>

</body>
</html>