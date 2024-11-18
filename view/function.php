<?php
// koneksi ke database
$host = 'junction.proxy.rlwy.net';
$port = 28645;
$username = 'root';
$password = 'YxKlNJHYvaJBMQpwTmFEvzVItGYywLCz';
$database = 'railway';

$koneksi = mysqli_connect($host, $username, $password, $database, $port);

function result($result) {
    global $koneksi;
    $query = mysqli_query($koneksi, $result);
    $rows = [];
    while ($row = mysqli_fetch_assoc($query)) {
        $rows[] = $row;
    }
    return $rows;
}
