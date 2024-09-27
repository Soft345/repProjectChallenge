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

<div class="container">
    <form method="POST">
        <div class="row">
            <div class="row">
                <div class="col-25">
                    <label for="nama">Nama:</label>
                </div>
                <div class="col-75">
                    <input type="text" name="nama" required>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="nim">NIM:</label>
                </div>
                <div class="col-75">
                    <input type="text" name="nim" required>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="jurusan">Jurusan:</label>
                </div>
                <div class="col-75">
                    <input type="text" name="jurusan" required>
                </div>
            </div>

        </div>
        <br>
        <div class="row">
            <input type="submit" value="Simpan">
        </div>
    </form>
</div>


<?php include 'includes/footer.php'; ?>
