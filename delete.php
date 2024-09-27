<?php
include 'config/config.php';
include 'classes/Database.php';
include 'classes/Mahasiswa.php';

$db = new Database();
$mahasiswa = new Mahasiswa($db);

$id = $_GET['id'];
$mahasiswa->delete($id);

header("Location: index.php");
?>
