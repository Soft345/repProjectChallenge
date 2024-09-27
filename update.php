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
<form method="POST">
    <label for="nama">Nama:</label>
    <input type="text" name="nama" value="<?= $data['nama']; ?>" required>
    <br>
    <label for="nim">NIM:</label>
    <input type="text" name="nim" value="<?= $data['nim']; ?>" required>
    <br>
    <label for="jurusan">Jurusan:</label>
    <input type="text" name="jurusan" value="<?= $data['jurusan']; ?>" required>
    <br>
    <input type="submit" value="Update">
</form>

<?php include 'includes/footer.php'; ?>
