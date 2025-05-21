
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

        th,
        td {
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

        .form-control,
        .btn {
            border-radius: 10px;
        }

        h2 {
            color: white;
        }

        /* Navbar Styles */
        nav {
            background-color: rgba(0, 0, 0, 0.7);
        }

        nav a {
            color: #fff;
        }

        nav a:hover {
            color: #f8f9fa;
        }
    </style>

    <body class="p-5">
    <!-- Navbarr -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Wisata Gunung</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="form.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tampil_data.php">Tambah Peserta</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tampil_data2.php">Tambah Pegawai </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>