<?php
require 'database.php';

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
    $no_ndkeluar = htmlspecialchars($data["no_ndkeluar"]);
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

// backupdata 
function backupData()
{
    global $conn;

    // Copy smua data mahasiswa & pindahkan ke table backup
    $queryCopy = "INSERT INTO backup SELECT * FROM mahasiswa";
    mysqli_query($conn, $queryCopy);

    // cek, jika pindah data berhasil
    if (mysqli_affected_rows($conn) > 0) {
        // hapus data di table mahasiswa
        $queryDelete = "DELETE FROM mahasiswa";
        mysqli_query($conn, $queryDelete);

        // cek, jika hapus data berhasil
        if (mysqli_affected_rows($conn) > 0) {
            return true;
        }
    }
    return false;
}
