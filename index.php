<?php
session_start();

include 'config.php';

if (isset($_SESSION['user']['id'])) {
    echo "<script>
        alert('Anda sudah login');
        window.location.href='" . BASE_URL . "pages/dashboard.php';
        </script>";
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (login() === true) {
        echo "<script>
                alert('Berhasil Login');
                window.location='" . BASE_URL . "pages/dashboard.php';
              </script>";
    } else {
        echo "<script>
                alert('Gagal Login');
                window.location='" . BASE_URL . "index.php';
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
    <title>Page Title - SB Admin</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <style>
        body {
            background-color: #ffffff;
        }
    </style>
</head>

<body>
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Login</h3>
                                </div>
                                <div class="card-body">
                                <form method="POST">
                                        <div class="form-group">
                                            <!-- input text -->
                                            <label class="small mb-1">Email</label>
                                            <input class="form-control py-4" name="email" type="email" placeholder="Enter email address" required />
                                        </div>
                                        <!-- input email -->
                                        <div class="form-group">
                                            <label class="small mb-1" >Password</label>
                                            <input class="form-control py-4" name="password" type="password" placeholder="Enter password" required />
                                        </div>
                                        <!-- Select -->
                                        <div class="form-group">
                                            <label for="selectOption">Level</label>
                                            <select class="form-control" id="selectOption">
                                                <option>Admin</option>
                                                <option>HR Department</option>
                                                <option>Leader/Head/Manager</option>
                                                <option>Staff</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" />
                                                <label class="custom-control-label" for="rememberPasswordCheck">Remember password</label>
                                            </div>
                                        </div>
                                        <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <a class="small" href="password.php">Forgot Password?</a>
                                            <a class="btn btn-primary" href="./pages/dashboard.php">Login</a>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center">
                                    <div class="small"><a href="register.php">Need an account? Sign up!</a></div>
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
    <script src="js/scripts.js"></script>
</body>

</html>