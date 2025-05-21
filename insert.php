<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$umur = $_POST['umur'];

try {
    $sql = "INSERT INTO buah (nama, umur) VALUES ('$nama', '$umur')";
    $koneksi->query($sql);

    // ✅ Redirect setelah submit (PRG Pattern)
    header("Location: tampil_data.php");
    exit();
} catch (Exception $e) { 
    echo "Tambah data gagal: " . $e->getMessage();
}
?>
