<?php
// sambungan ke database ("nama host", "username", "password", "nama database")
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data(query) dari jadual mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// ambil data(fetch) dari object result
// 4 cara fetch data: 

// mysqli_fetch_row() = mengembalikan array numerik
// contoh cara melihat hasil yang dikembalikan: var_dump($mhs[1]);

// mysqli_fetch_assoc() = mengembalikan array associative
// contoh cara melihat hasil yang dikembalikan: var_dump($mhs["jurusan"]);

// mysqli_fetch_array() = mengembalikan array numerik & associative, kekurangan: data yang ditampilkan double (lebih berat)

// mysqli_fetch_object() = memanggil dengan cara objek iaitu anak panah
// contoh cara melihat hasil yang dikembalikan: var_dump($mhs->email);

// while ($mhs = mysqli_fetch_assoc($result)) {
//     var_dump($mhs);
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>

        <?php $i = 1; ?>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="">Tukar</a> |
                    <a href="">Padam</a>
                </td>

                <td><img src="img/<?= $row["gambar"] ?>" width="50"></td> <?php  ?>
                <td><?= $row["nrp"]; ?></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["email"]; ?></td>
                <td><?= $row["jurusan"]; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endwhile; ?>

    </table>

</body>

</html>