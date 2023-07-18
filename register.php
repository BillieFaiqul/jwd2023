<?php
$error = "";

// Mengecek apakah form telah dikirimkan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai input dari form
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirm_password"];

    // Validasi input
    if ($password !== $confirmPassword) {
        $error = "Konfirmasi password tidak cocok.";
    } else {
        // Lakukan pemrosesan data sesuai kebutuhan
        // ...

        // Contoh: Menyimpan data registrasi ke dalam database
        // $conn = new mysqli("localhost", "username", "password", "database");
        // $query = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
        // $conn->query($query);

        // Menampilkan pesan sukses registrasi
        echo "<div class='container'>";
        echo "<h3>Registrasi berhasil!</h3>";
        echo "<p>Selamat datang, $name! Akun Anda telah berhasil didaftarkan.</p>";
        echo "</div>";
    }
}
?>
