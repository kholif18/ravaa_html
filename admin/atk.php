<?php
// Koneksi ke database
$koneksi = mysqli_connect("localhost", "username", "password", "nama_database");

// Cek koneksi
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal: " . mysqli_connect_error();
    exit();
}

// Jika form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $harga = $_POST['harga'];
    $nama_undangan = $_POST['nama_undangan'];
    $bahan = $_POST['bahan'];
    $ukuran_terbuka = $_POST['ukuran_terbuka'];
    $ukuran_tertutup = $_POST['ukuran_tertutup'];

    // Query untuk menyimpan data ke database
    $query = "INSERT INTO undangan (harga, nama_undangan, bahan, ukuran_terbuka, ukuran_tertutup) 
              VALUES ('$harga', '$nama_undangan', '$bahan', '$ukuran_terbuka', '$ukuran_tertutup')";

    // Eksekusi query
    if (mysqli_query($koneksi, $query)) {
        echo "Data berhasil disimpan.";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }

    // Tutup koneksi
    mysqli_close($koneksi);
}
?>

<!-- Form untuk input data -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <label for="harga">Harga:</label>
    <input type="text" name="harga" id="harga" required><br>

    <label for="nama_undangan">Nama Undangan:</label>
    <input type="text" name="nama_undangan" id="nama_undangan" required><br>

    <label for="bahan">Bahan:</label>
    <input type="text" name="bahan" id="bahan" required><br>

    <label for="ukuran_terbuka">Ukuran Terbuka:</label>
    <input type="text" name="ukuran_terbuka" id="ukuran_terbuka" required><br>

    <label for="ukuran_tertutup">Ukuran Tertutup:</label>
    <input type="text" name="ukuran_tertutup" id="ukuran_tertutup" required><br>

    <input type="submit" value="Simpan">
</form>