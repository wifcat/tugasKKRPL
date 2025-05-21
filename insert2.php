<?php
include 'koneksi.php';
$query_pegawai = $koneksi->query("SELECT * FROM pegawai");

$nama = $_POST['nama'];
$umur = $_POST['umur'];

try {
    $sql = "INSERT INTO pegawai (nama, umur) VALUES ('$nama', '$umur')";
    $koneksi->query($sql);

    // ✅ Redirect setelah submit (PRG Pattern)
    header("Location: tampil_data.php");
    exit();
} catch (Exception $e) { 
    echo "Tambah data gagal: " . $e->getMessage();
}
?>
