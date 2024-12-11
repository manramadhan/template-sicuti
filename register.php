<?php
session_start();
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Validasi jika input kosong
    if (empty($_POST['first_name']) || empty($_POST['last_name']) || empty($_POST['username']) || empty($_POST['phone']) || empty($_POST['email']) || empty($_POST['password'])) {
        echo "<script>
                alert('Semua kolom harus diisi!');
                window.location='register.php';
              </script>";
        exit;
    }

    // Eksekusi fungsi registrasi dan cek hasilnya
    $register = register();
    if ($register === "berhasil") {
        echo "<script>
            alert('Registrasi berhasil, pesan terkirim');
            window.location='index.php';
            </script>";
    } elseif ($register === "berhasil, tidak terkirim") {
        echo "<script>
            alert('Registrasi berhasil, pesan tidak terkirim');
            window.location='index.php';
            </script>";
    } elseif ($register === "Email sudah terdaftar") {
        echo "<script>
            alert('Email sudah terdaftar, silakan gunakan email lain');
            window.location='register.php';
            </script>";
    } else {
        echo "<script>
            alert('Registrasi gagal');
            window.location='register.php';
            </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Register - SB Admin</title>
    <link href="<?php echo BASE_URL; ?>/css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <style>
                body {
            background-color: #ffffff;
        }
    </style>
</head>
<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Create Account</h3>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="register.php">
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="small mb-1" for="inputFirstName">First Name</label>
                                                    <input class="form-control py-4" id="inputFirstName" name="first_name" type="text" placeholder="Enter first name" required />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="small mb-1" for="inputLastName">Last Name</label>
                                                    <input class="form-control py-4" id="inputLastName" name="last_name" type="text" placeholder="Enter last name" required />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="small mb-1" for="inputUsername">Username</label>
                                                    <input class="form-control py-4" id="inputUsername" name="username" type="text" placeholder="Enter username" required />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="small mb-1" for="inputPhone">Phone Number</label>
                                                    <input class="form-control py-4" id="inputPhone" name="phone" type="tel" placeholder="Enter phone number" required />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputEmailAddress">Email</label>
                                            <input class="form-control py-4" id="inputEmailAddress" name="email" type="email" aria-describedby="emailHelp" placeholder="Enter email address" required />
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputPassword">Password</label>
                                            <input class="form-control py-4" id="inputPassword" name="password" type="password" placeholder="Enter password" style="width: 100%;" required />
                                        </div>
                                        <div class="form-group mt-4 mb-0">
                                            <button type="submit" class="btn btn-primary btn-block">Create Account</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center">
                                    <div class="small"><a href="index.php">Have an account? Go to login</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2021</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="<?php echo BASE_URL; ?>/js/scripts.js"></script>
</body>

</html>