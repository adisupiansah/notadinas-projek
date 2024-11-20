<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require './fungsi/functions.php';

$id = $_GET["id"];

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus Data</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

<?php
if (hapus($id) > 0) {
    // Jika berhasil menghapus data
    echo "
    <script>
        Swal.fire({
            title: 'Berhasil!',
            text: 'Data berhasil dihapus.',
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
    // Jika gagal menghapus data
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
?>

</body>
</html>
