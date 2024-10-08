<?php
include 'config/config.php';
include 'classes/Database.php';
include 'classes/Mahasiswa.php';
include 'includes/header.php';

$db = new Database();
$mahasiswa = new Mahasiswa($db);

$id = $_GET['id'];
$data = $db->query("SELECT * FROM mahasiswa WHERE id=$id")->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $jurusan = $_POST['jurusan'];

    $mahasiswa->update($id, $nama, $nim, $jurusan);
    header("Location: index.php");
}
?>

<h2>Edit Data Mahasiswa</h2>

<div class="container">
    <form method="POST">
        <div class="row">
            <div class="row">
                <div class="col-25">
                    <label for="nama">Nama:</label>
                </div>
                <div class="col-75">
                    <input type="text" name="nama" value="<?= $data['nama']; ?>" required>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="nim">NIM:</label>
                </div>
                <div class="col-75">
                    <input type="text" name="nim" value="<?= $data['nim']; ?>" required>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="jurusan">Jurusan:</label>
                </div>
                <div class="col-75">
                    <input type="text" name="jurusan" value="<?= $data['jurusan']; ?>" required>
                </div>
            </div>

        </div>
        <br>
        <div class="row">
            <input type="submit" value="Update">
        </div>
    </form>
</div>

<?php include 'includes/footer.php'; ?>
