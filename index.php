<?php
include 'config/config.php';
include 'classes/Database.php';
include 'classes/Mahasiswa.php';
include 'includes/header.php';

$db = new Database();
$mahasiswa = new Mahasiswa($db);

$result = $mahasiswa->read();
?>
  
<h2>Data Mahasiswa</h2>
<a href="create.php"><button type="button" class="btn primary">Tambah Data</button></a>

<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>NIM</th>
        <th>Jurusan</th>
        <th>Aksi</th>
    </tr>
    <?php while ($row = $result->fetch_assoc()) : ?>
        <tr>
            <td><?= $row['id']; ?></td>
            <td><?= $row['nama']; ?></td>
            <td><?= $row['nim']; ?></td>
            <td><?= $row['jurusan']; ?></td>
            <td>
                <a href="update.php?id=<?= $row['id']; ?>">Edit</a> | 
                <a href="delete.php?id=<?= $row['id']; ?>" onclick="return confirm('Yakin ingin menghapus?');">Hapus</a>
            </td>
        </tr>
    <?php endwhile; ?>
    <thead>
</table>

<?php include 'includes/footer.php'; ?>

