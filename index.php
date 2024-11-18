<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa ORDER BY id DESC");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>

    <!-- css bootstrap v.5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- fonts google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;1,400&display=swap" rel="stylesheet">

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
    <!-- DataTables Buttons CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.bootstrap5.min.css">
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <!-- DataTables Bootstrap 5 JS -->
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <!-- DataTables Buttons JS -->
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <!-- Buttons Bootstrap 5 JS -->
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.bootstrap5.min.js"></script>
    <!-- JSZip for Excel export -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <!-- pdfmake for PDF export -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <!-- Buttons for Excel, PDF, and print -->
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>

    <!-- css Custom -->
    <link rel="stylesheet" href="style.css">

    <!-- icon font awesome -->
    <script src="https://kit.fontawesome.com/34b76d2e0a.js" crossorigin="anonymous"></script>

    <!-- logo title -->
    <link rel="icon" href="img/logo-title.png">

    <!-- icon bootstrap v.5 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>

<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm p-3 mb-3">
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
                        <a class="nav-link" href="logout.php">logout <i class="fa-solid fa-right-from-bracket"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- logo presisi -->
    <div class="container">
        <div class="card jumbotron p-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <h2 class="card-title">Nota Dinas Keluar</h2>
                        <p class="card-subtitle">Halaman arsip nota dinas keluar Tahun Anggaran 2024</p>
                    </div>
                    <div class="col-md-4">
                        <img src="img/logo_presisi.png" alt="" width="90%">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- dashboard jam hari tanggal -->
    <section>
        <div class="container mt-5">
            <div class="card kartu p-2 mb-3 rounded">
                <div class="card-body">
                    <h2 class="card-title">Dashboard</h2>
                    <div class="row p-3">
                        <div class="col-md-4">
                            <div class="card p-2 shadow-sm bg-body mt-3">
                                <div class="card-body">
                                    <h2 class="text-danger"><i class="bi bi-alarm"></i></h2>
                                    <h4 class="card-title">Jam</h4>
                                    <p class="card-text" id="clock">00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card p-2 shadow-sm bg-body mt-3">
                                <div class="card-body">
                                    <h2 class="text-success"><i class="bi bi-calendar3"></i></h2>
                                    <h4 class="card-title">Tanggal</h4>
                                    <p class="card-text" id="date">00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card p-2 shadow-sm bg-body mt-3">
                                <div class="card-body">
                                    <h2 class="text-warning"><i class="bi bi-calendar2-day"></i></h2>
                                    <h4 class="card-title">Hari</h4>
                                    <p class="card-text" id="day">00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <br>

    <!-- tombol search -->
    <!-- <div class="container">
        <div class="row custom-search">
            <div class="col-md-8">
                <form action="" method="post" class="d-flex">
                    <input type="text" class="form form-control me-2" name="keyword" size="50" autofocus placeholder="cari nomor disposisi" autocomplete="off">
                    <button class="btn btn-success" type="submit" name="cari">Cari</button>
                </form>

            </div>
        </div>
    </div> -->

    <br>

    <!-- navigasi -->
    <!-- <div class="container">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
            <?php if ($halamanAktif > 1) : ?>
                <li class="page-item"><a class="page-link" href="?halaman=<?= $halamanAktif - 1; ?>">previos</a></li>
            <?php endif; ?>


            <?php for ($i = 1; $i <= $jumlahHalaman; $i++) : ?>
                <?php if ($i == $halamanAktif) : ?>
                    <li class="page-itemm"><a class="page-link" href="?halaman=<?= $i; ?>" style="font-weight: bold; color:red;"><?= $i; ?></a></li>
                <?php else : ?>
                    <li class="page-item">
                        <a class="page-link" href="?halaman=<?= $i; ?>"><?= $i; ?></a>
                    </li>
                <?php endif; ?>

            <?php endfor; ?>

            <?php if ($halamanAktif < $jumlahHalaman) : ?>
                <li class="page-item">
                    <a class="page-link" href="?halaman=<?= $halamanAktif + 1; ?>">next</a>

                </li>

            <?php endif; ?>
            </ul>
        </nav>
    </div> -->

    <br>
    <!-- tombol download PDF -->
    <!-- <div class="container mb-3">
        <a class="btn btn-sm btn-warning" href="cetakPDF.php" target="_blank"><i class="bi bi-printer-fill mx-1"></i>Download pdf</a>
    </div> -->

    <!-- table -->
    <div class="container-fluid p-4">
        <div class="d-flex justify-content-center align-items-center py-4">
            <a href="tambah.php" class="btn btn-primary btn-sm "><i class="fa-solid fa-folder-plus"></i> input data</a>
            <a href="/view/view.php" class="btn btn-sm btn-warning ms-auto">View pengajuan</a>
        </div>
        <div class="table-responsive">
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tgl surat</th>
                        <th>Kepada</th>
                        <th>No ND keluar</th>
                        <th>Perihal</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1; ?>
                    <?php foreach($mahasiswa as $data) : ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td><?= $data['tanggal']; ?></td>
                        <td><?= $data['kepada']; ?></td>
                        <td><?= $data['no_ndkeluar']; ?></td>
                        <td><?= $data['perihal']; ?></td>
                        <td>
                            <a class="text-decoration-none text-warning" href="ubah.php?id=<?= $data["id"]; ?>"><i class="fa-solid fa-pen"></i></a>
                            <a class="text-decoration-none text-danger" href="hapus.php?id=<?= $data["id"];  ?>" onclick="return confirm('Yakin?');"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                dom: '<"row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"Bf>>' +
                    '<"row"<"col-sm-12"tr>>' +
                    '<"row"<"col-sm-12 col-md-5"i><"col-sm-12 col-md-7"p>>',
                buttons: [{
                        extend: 'excelHtml5',
                        text: 'Export to Excel',
                        className: 'btn btn-success btn-sm mx-1'
                    },
                    {
                        extend: 'pdfHtml5',
                        text: 'Export to PDF',
                        className: 'btn btn-danger btn-sm mx-1'
                    },
                    {
                        extend: 'print',
                        text: 'Print',
                        className: 'btn btn-primary btn-sm mx-1'
                    }
                ],
                language: {
                    paginate: {
                        next: '<i class="fas fa-circle-right"></i>',
                        previous: '<i class="fas fa-circle-left"></i>'
                    }
                }
            });
        });
    </script>

    <style>
        .dt-buttons {
            float: right;
            margin-left: 5px;
        }
        .jumbotron {
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .kartu {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border: none;
        }

        /* @media print {
            .navbar {
                display: none ;
            }
        } */
    </style>

    <!-- java script timer -->
    <script src="time.js"></script>

    <!-- Js Bootstrap v.5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>