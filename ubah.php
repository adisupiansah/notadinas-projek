<?php

session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}


require './fungsi/functions.php';


// ambil data di url
$id  = $_GET["id"];

// query data mahasiswa berdasarkan id-nya
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css bootstrap v.5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- fonts google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;1,400&display=swap" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- css Custom -->
    <link rel="stylesheet" href="css/ubah.css">

    <!-- logo title -->
    <link rel="icon" href="img/logo-title.png">

    <!-- icon bootstrap v.5 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

    <title>Dashboard | edit</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm p-3 mb-3">
        <div class="container">
            <!-- Logo (Kiri) -->
            <a class="navbar-brand" href="#">
                <img src="img/logo.png" alt="Logo" height="40">
                Bagian Logistik
            </a>

            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navigasi (Kanan) -->
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">log out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- dashboard -->
    <section>
        <div class="container mb-4">
            <h2>Nota Dinas Keluar</h2>
            <p class="text-secondary">Dashboard | Nota Dinas | edit</p>
        </div>
    </section>

    <!-- form edit -->
    <section>
        <div class="container">
            <div class="card p-3 shadow-sm">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <form action="" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
                                <div class="mb-4 row">
                                    <label for="tanggal" class="col-sm-6 col-form-label">Tanggal</label>
                                    <div class="col-sm-6">
                                        <input type="date" class="form-control" id="tanggal" name="tanggal" required value="<?= $mhs['tanggal']; ?>">
                                    </div>
                                </div>
                                <div class="mb-4 row">
                                    <label for="kepada" class="col-sm-6 col-form-label">Kepada</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="kepada" name="kepada" required value="<?= $mhs['kepada']; ?>">
                                    </div>
                                </div>
                                <div class="mb-4 row">
                                    <label for="no_ndkeluar" class="col-sm-6 col-form-label">No Nd Keluar</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="no_ndkeluar" name="no_ndkeluar" required value="<?= $mhs['no_ndkeluar']; ?>">
                                    </div>
                                </div>
                                <div class="mb-4 row">
                                    <label for="perihal" class="col-sm-6 col-form-label">Perihal</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="perihal" name="perihal" required value="<?= $mhs['perihal']; ?>">
                                    </div>
                                </div>
                                <button class="btn btn-success text-end d-flex" type="submit" name="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>

    <!-- code php menangani sweetalert -->
    <?php
    // cek apakaah tombol submit sudah di tekan atau belum
    if (isset($_POST["submit"])) {

        // cek apakah data berhasil di ubah atau tidak
        if (ubah($_POST) > 0) {
            echo "
                <script>
                    Swal.fire({
                        title: 'Berhasil!',
                        text: 'Data berhasil di edit.',
                        icon: 'success',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = 'index.php'; // Pengalihan ke index.php
                        }
                    });
                </script>
        ";
        } else {
            echo "
                <script>
                    Swal.fire({
                        title: 'Gagal!',
                        text: 'Data gagal dihapus.',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = 'index.php'; // Pengalihan ke index.php
                        }
                    });
                </script>
        ";
        }
    }
    ?>

    <!-- java script bootstrap v5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>