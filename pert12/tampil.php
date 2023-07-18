<?php
// Pastikan file ini berada di tempat yang sama dengan file "koneksi.php"
require 'koneksi.php';

// Query untuk mendapatkan data pendaftaran siswa
$sql = "SELECT * FROM data";
$result = $conn->query($sql);

// Mendapatkan jumlah total data
$total_data = $result->num_rows;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Pendaftaran Siswa</title>
</head>
<body>

<div>
    <h2>Data Pendaftaran Siswa</h2>

    <div>
        <!-- Tombol untuk tambah data baru -->
        <a href="tambah.php">
            Tambah Data Baru
        </a>
    </div>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Sekolah Asal</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                $no = 1;
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $no . "</td>";
                    echo "<td>" . $row['nama'] . "</td>";
                    echo "<td>" . $row['alamat'] . "</td>";
                    echo "<td>" . $row['jk'] . "</td>";
                    echo "<td>" . $row['agama'] . "</td>";
                    echo "<td>" . $row['sekolah_asal'] . "</td>";
                    echo "</tr>";
                    $no++;
                }
            } else {
                echo "<tr><td colspan='6'>Tidak ada data</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <p>Total data: <?php echo $total_data; ?></p>
</div>

</body>
</html>