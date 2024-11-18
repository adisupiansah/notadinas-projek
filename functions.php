<?php
$host = 'junction.proxy.rlwy.net';
$port = 28645;
$username = 'root';
$password = 'YxKlNJHYvaJBMQpwTmFEvzVItGYywLCz';
$database = 'railway';
// koneksi ke database
$conn = mysqli_connect($host, $username, $password, $database, $port);

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $conn;

    $tanggal = htmlspecialchars($data["tanggal"]);
    $kepada = htmlspecialchars($data["kepada"]);
    $no_ndkeluar= htmlspecialchars($data["no_ndkeluar"]);
    $perihal = htmlspecialchars($data["perihal"]);


    $query = "INSERT INTO mahasiswa (kepada, perihal, no_ndkeluar, tanggal)
          VALUES ('$kepada', '$perihal', '$no_ndkeluar', '$tanggal')";


    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");

    return mysqli_affected_rows($conn);
}


function ubah($data)
{

    global $conn;

    $id = $data["id"];
    $tanggal = htmlspecialchars($data["tanggal"]);
    $kepada = htmlspecialchars($data["kepada"]);
    $no_ndkeluar = htmlspecialchars($data["no_ndkeluar"]);
    $perihal = htmlspecialchars($data["perihal"]);


    $query = "UPDATE mahasiswa SET 
                kepada = '$kepada',
                perihal = '$perihal',
                no_ndkeluar = '$no_ndkeluar',
                tanggal = '$tanggal'
            WHERE id = $id
                ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function cari($keyword)
{
    $query = "SELECT * FROM mahasiswa 
                WHERE 
               kepada LIKE '%$keyword%' OR 
               perihal LIKE '%$keyword%' OR
               tanggal LIKE '%$keyword%'
                ";
    // pada retunr query saya memanfaatkan function query di atas,sehingga saya tidak membuat ulang untuk tampil mahasiswa
    return query($query);
}


function registrasi ($data) {
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

    if ( mysqli_fetch_assoc($result) ) {
        echo "
            <script>
                alert('username sudah terdaftar');
            </script>";

        return false;
    }

    // cek konsfirmasi password
    if( $password !== $password2 ) {
        echo "
            <script>
                alert('password tidak sesuai');
            </script>
        ";

        return false;
    } 

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);
    

    // tambahkan user baru ke database
    mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");

    return mysqli_affected_rows($conn);


}
