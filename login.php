<?php
// jalankan session
session_start();
$koneksiLogin = mysqli_connect("localhost", "root", "", "if0_35735599_web_notadinas");

// cek cookie
// if (isset($_COOKIE['login'])) {
//     if($_COOKIE['login'] == 'true') {
//         $_SESSION['login'] = true;
//     }
// }
if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
  $id = $_COOKIE['id'];
  $key = $_COOKIE['key'];

  // ambil username berdasarkan id
  $result = mysqli_query($koneksiLogin, "SELECT username FROM user WHERE id = $id");
  $row = mysqli_fetch_assoc($result);

  // cek cookie dan username
  if ($key === hash('sha256', $row['username'])) {
    $_SESSION['login'] = true;
  }
}

if (isset($_SESSION["login"])) {
  header("Location: index.php");
  exit;
}

if (isset($_POST["login"])) {

  $username = $_POST["username"];
  $password = $_POST["password"];

  $result = mysqli_query($koneksiLogin, "SELECT * FROM user WHERE
                 username = '$username'");


  // cek username
  if (mysqli_num_rows($result) === 1) {

    // cek password
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row["password"])) {

      // set Sesiion-nya
      $_SESSION["login"] = true;

      // cek remember me
      if (isset($_POST['remember'])) {
        // buat cookie

        setcookie('id', $row['id'], time() + 60);
        setcookie('key', hash('sha256', $row['username']), time() + 60);


        // setcookie('login', 'true', time() + 60 );
      }

      header("Location: index.php");
      exit;
    }
  }

  $error = true;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Halaman Login</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <link rel="stylesheet" href="login.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
  <div class="container">
    <div class="vh-100 d-flex justify-content-center align-items-center">
      <div class="card col-md-4 col-sm-12">
        <div class="card-header text-center">

        </div>

        <div class="card-body mx-4">
          <?php if (isset($error)) : ?>
            <div class="alert alert-danger" role="alert">
              Username / password salah
            </div>
          <?php endif; ?>
          <h2>Login</h2>
          <form action="" method="post" class="mt-3">
            <div class="mb-3 input-with-icon">
              <span class="icon"><i class="bi bi-person"></i></span>
              <input type="text" class="form-control input" id="username" name="username" placeholder="Masukkan username" />
            </div>
            <div class="mb-3 input-with-icon">
              <span class="icon"><i class="bi bi-lock"></i></span>
              <input type="password" class="form-control input" id="username" name="password" placeholder="Masukkan username" />
            </div>

            <div class="d-flex flex-row mb-3">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="rememberMe" name="remember"/>
                <label class="form-check-label" for="rememberMe">
                  Ingat saya
                </label>
              </div>
              
            </div>

            <div class="d-flex justify-content-center align-items-center">
              <button type="submit" name="login" class="btn col-12 mb-3">
                Login
              </button>
            </div>

          </form>
        </div>

      </div>
    </div>
  </div>
</body>

</html>