<?php 
require '../fungsi/functions.php';
    // deleteruh data
function deleteData() {
    global $conn;
    $query = mysqli_query($conn, "DELETE FROM ambilnomor");
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