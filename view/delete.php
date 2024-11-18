<?php 
require 'function.php';
    // deleteruh data
function deleteData() {
    global $koneksi;
    $query = mysqli_query($koneksi, "DELETE FROM ambilnomor");
    return $query;
}

if (deleteData() > 0) {
    echo "
        <script>
            alert('berhasil')
        </script>
    ";
    header('Location: view.php');
} else {
    echo "
        <script>
            alert('delete data gagal')
        </script>
    ";
}




?>