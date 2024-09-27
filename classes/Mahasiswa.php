<?php
class Mahasiswa {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function create($nama, $nim, $jurusan) {
        $nama = $this->db->escape_string($nama);
        $nim = $this->db->escape_string($nim);
        $jurusan = $this->db->escape_string($jurusan);
        $sql = "INSERT INTO mahasiswa (nama, nim, jurusan) VALUES ('$nama', '$nim', '$jurusan')";
        return $this->db->query($sql);
    }

    public function read() {
        $sql = "SELECT * FROM mahasiswa";
        return $this->db->query($sql);
    }

    public function update($id, $nama, $nim, $jurusan) {
        $nama = $this->db->escape_string($nama);
        $nim = $this->db->escape_string($nim);
        $jurusan = $this->db->escape_string($jurusan);
        $sql = "UPDATE mahasiswa SET nama='$nama', nim='$nim', jurusan='$jurusan' WHERE id=$id";
        return $this->db->query($sql);
    }

    public function delete($id) {
        $sql = "DELETE FROM mahasiswa WHERE id=$id";
        return $this->db->query($sql);
    }
}
?>
