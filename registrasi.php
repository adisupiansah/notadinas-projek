<?php
    $koneksiLogin = mysqli_connect("localhost", "root", "", "if0_35735599_web_notadinas");
function registrasi ($data) {
    global $koneksiLogin;
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($koneksiLogin, $data["password"]);
    $password2 = mysqli_real_escape_string($koneksiLogin, $data["password2"]);

    // cek username sudah ada atau belum
    $result = mysqli_query($koneksiLogin, "SELECT username FROM user WHERE username = '$username'");

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
    // tambahkan user baru ke database
    $query = "INSERT INTO user (username, password) VALUES ( '$username', '$password')";
    mysqli_query($koneksiLogin, $query);


    return mysqli_affected_rows($koneksiLogin);


}

    if ( isset ($_POST["register"]) ) {

        if (registrasi($_POST) > 0) {
            echo "
                <script>
                    alert('user baru berhasil ditambahkan');
                </script>
            ";
        } else {
            echo mysqli_error($koneksiLogin);
        }
    }

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>


    <style>
        label {
            display: block;
        }
    </style>


</head>

<body>

    <h1>Halaman Registrasi</h1>

    <form action="" method="post">

        <ul>
            <li>
                <label for="username">Username : </label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password : </label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <label for="password2">Konfirmasi Password : </label>
                <input type="password" name="password2" id="password2">
            </li>
            <li>
                <button type="submit" name="register">Register : </button>
            </li>
        </ul>


    </form>

</body>

</html>