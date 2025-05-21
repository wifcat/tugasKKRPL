<?php
include 'koneksi.php';
$query = $koneksi->query("SELECT * FROM buah");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home - Data Peserta</title>
    <?= include_once 'navbar.php'; ?>
</head>


<!--
    <div class="container blur-box mt-5">
        <h2 class="mb-4">Tambah Data Peserta 1</h2>
        <form action="insert.php" method="POST" class="row g-3 mb-5">
            <div class="col-md-5">
                <input type="text" name="nama" class="form-control" placeholder="Nama Peserta" required>
            </div>
            <div class="col-md-5">
                <input type="text" name="umur" class="form-control" placeholder="Rasa Peserta" required>
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-primary w-100">Simpan</button>
            </div>
        </form>

         <h2 class="mt-5 mb-4">Tambah Data Peserta 2</h2>
        <form action="insert2.php" method="POST" class="row g-3 mb-5">
            <div class="col-md-5">
                <input type="text" name="nama" class="form-control" placeholder="Nama Peserta" required>
            </div>
            <div class="col-md-5">
                <input type="text" name="umur" class="form-control" placeholder="Rasa Peserta" required>
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-primary w-100">Simpan</button>
            </div>
        </form> -->

        <h2>Daftar Peserta</h2>
        <table class="table table-bordered text-center text-white">
            <thead>
                <tr>
                    <th>ID Peserta</th>
                    <th>Nama Peserta</th>
                    <th>Umur</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($data = $query->fetch_assoc()): ?>
                <tr>
                    <td><?= $data['id'] ?></td>
                    <td><?= $data['nama'] ?></td>
                    <td><?= $data['umur'] ?></td>
                    
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

    <!-- ✅ Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
