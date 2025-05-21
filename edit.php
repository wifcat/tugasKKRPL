<?php
include 'koneksi.php';

// Jika form disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];

    try {
        $sql = "UPDATE buah SET nama='$nama', umur='$umur' WHERE id=$id";
        $koneksi->query($sql);
        header("Location: tampil_data.php?status=success");
        exit();
    } catch (Exception $e) {
        echo "Update data gagal: " . $e->getMessage();
    }
} else {
    // Ambil ID dari URL
    if (!isset($_GET['id'])) {
        echo "ID tidak ditemukan!";
        exit();
    }

    $id = $_GET['id'];
    $query = $koneksi->query("SELECT * FROM buah WHERE id = $id");
    $data = $query->fetch_assoc();

    if (!$data) {
        echo "Data tidak ditemukan!";
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Peserta</title>

    <!-- ✅ Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- ✅ Custom Style for Modern Look -->
    <style>
        body {
            background: url('https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=1350&q=80') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Segoe UI', sans-serif;
        }

        .blur-box {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
            color: #333;
        }

        .form-control, .btn {
            border-radius: 10px;
        }

        h2 {
            color: white;
            margin-bottom: 30px;
        }

        .alert {
            position: fixed;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 999;
            width: 80%;
            max-width: 400px;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .btn-secondary {
            background-color: #6c757d;
            border: none;
        }

        .btn-secondary:hover {
            background-color: #5a6268;
        }
    </style>
</head>
<body class="p-5">
    <div class="container blur-box">
        <h2>Edit Data Peserta</h2>

        <!-- Menampilkan pesan sukses/error jika ada -->
        <?php if (isset($_GET['status']) && $_GET['status'] == 'success'): ?>
            <div class="alert alert-success" role="alert">
                Data berhasil diperbarui!
            </div>
        <?php endif; ?>

        <form action="edit.php" method="POST" class="row g-3">
            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">

            <div class="col-md-12">
                <input type="text" name="nama" value="<?php echo $data['nama']; ?>" class="form-control" placeholder="Nama Peserta" required>
            </div>

            <div class="col-md-12">
                <input type="number" name="umur" value="<?php echo $data['umur']; ?>" class="form-control" placeholder="Umur" required>
            </div>

            <div class="col-md-12 mt-3">
                <button type="submit" class="btn btn-primary w-100">Simpan</button>
            </div>
            <div class="col-md-12 mt-2">
                <!-- Tombol Batal -->
                <a href="tampil_data.php" class="btn btn-secondary w-100">Batal</a>
            </div>
        </form>
    </div>

    <!-- ✅ Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
