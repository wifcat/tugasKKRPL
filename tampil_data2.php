<?php
include 'koneksi.php';  // Pastikan koneksi database berhasil
$query = $koneksi->query("SELECT * FROM pegawai");  // Query untuk mengambil data dari tabel pegawai
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?= include_once 'navbar.php';?> <!-- Menyertakan navbar -->
    <meta charset="UTF-8">
    <title>Data Pegawai</title>
    <!-- ✅ Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- ✅ Custom Style for Blur Effect -->
    <style>
        body {
            background: url('https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=1350&q=80') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Segoe UI', sans-serif;
        }

        .blur-box {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
            color: #fff;
        }

        table {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(8px);
            border-radius: 10px;
            overflow: hidden;
        }

        th, td {
            color: #fff;
        }

        .btn-edit {
            background-color: #ffc107;
            border: none;
        }

        .btn-delete {
            background-color: #dc3545;
            border: none;
        }

        .form-control, .btn {
            border-radius: 10px;
        }

        h2 {
            color: white;
        }
    </style>
</head>
<body class="p-5">
    <div class="container blur-box">
        <h2 class="mb-4">Tambah Data Pegawai</h2>
        <form action="insert2.php" method="POST" class="row g-3 mb-5"> <!-- Form mengarah ke insert2.php -->
            <div class="col-md-5">
                <input type="text" name="nama" class="form-control" placeholder="Nama Pegawai" required>
            </div>
            <div class="col-md-5">
                <input type="number" name="umur" class="form-control" placeholder="Umur" required>
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-primary w-100">Simpan</button>
            </div>
        </form>

        <h2>Daftar Pegawai</h2>
        <table class="table table-bordered text-center text-white">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Pegawai</th>
                    <th>Umur</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($data = $query->fetch_assoc()): ?>
                <tr>
                    <td><?= $data['id'] ?></td>
                    <td><?= $data['nama'] ?></td>
                    <td><?= $data['umur'] ?></td>
                    <td>
                        <a href="edit2.php?id=<?= $data['id'] ?>" class="btn btn-sm btn-edit text-dark">Edit</a>
                        <a href="delete2.php?id=<?= $data['id'] ?>" class="btn btn-sm btn-delete text-white" onclick="return confirm('Yakin mau hapus data ini?')">Delete</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

    <!-- ✅ Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
