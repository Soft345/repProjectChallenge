<?php
include 'config/config.php';
include 'classes/Database.php';
include 'classes/Mahasiswa.php';
include 'includes/header.php';

$db = new Database();
$mahasiswa = new Mahasiswa($db);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $jurusan = $_POST['jurusan'];

    $mahasiswa->create($nama, $nim, $jurusan);
    header("Location: index.php");
}
?>

<h2>Tambah Data Mahasiswa</h2>
<form method="POST">
    <label for="nama">Nama:</label>
    <input type="text" name="nama" required>
    <br>
    <label for="nim">NIM:</label>
    <input type="text" name="nim" required>
    <br>
    <label for="jurusan">Jurusan:</label>
    <input type="text" name="jurusan" required>
    <br>
    <input type="submit" value="Simpan">
</form>

<?php include 'includes/footer.php'; ?>
