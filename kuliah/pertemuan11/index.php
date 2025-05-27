<?php
//koneksi kedatabase
$conn = mysqli_connect("localhost", "root", "", "pw2024_243040064");

//ambil data dari tabel mahasiswa/query data mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// ambil data (fetch) mahasiswa dari object result
// mysqli_fetch_row() // mengembalikan array numerik
// mysqli_fetch_assoc()// mengembalikan array associative
// mysqli_fetch_array() // mengembalikan keduanya
// mysqli_fetch_object()// mengembalikan object

//while ($mhs = mysqli_fetch_assoc($result) ) {
    //var_dump($mhs);
    
//}
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    
<h1>Daftar Mahasiswa</h1>

<table border="1" cellpadding="10" cellspacing="0">
<tr>
    <th>No.</th>
    <th>Aksi</th>
    <th>Gambar</th>
    <th>NRP</th>
    <th>Name</th>
    <th>Email</th>
    <th>Jurusan</th>    
</tr>

<?php while ($row = mysqli_fetch_assoc($result) ) : ?>
<tr>
    <?php ?>
    <td> <?= $row["id"]; ?></td>

        <a href="">ubah</a>|
        <a href="">hapus</a>
    </td>
    <td><img src="img/nophoto.jpg?php echo $row ["gambar"]; ?></td>
    <td><?= $row["nim"]; ?></td>
    <td><?= $row["nama"]; ?> </td>
    <td><?= $row["email"]; ?></td>
    <td><?= $row["jurusan"]; ?></td>
    
</tr>
<?php endwhile; ?>

</body>
</html>