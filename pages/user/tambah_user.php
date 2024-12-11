<?php
include __DIR__ . '/../../inc/header.php';
include __DIR__ . '/../../inc/sidebar.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Call the function to add user and check the result
    if (tambah_user()) {
        echo "<script>
                alert('Berhasil tambah user');
                window.location = 'user.php';
            </script>";
    } else {
        echo "<script>
                alert('Gagal tambah user');
                window.location = 'tambah_user.php';
            </script>";
    }
}
?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Tambah User</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>/pages/dashboard.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Tambah User</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-plus mr-1"></i>
                    Tambah User
                </div>
                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data">
                        <!-- input text -->
                        <div class="form-group">
                            <label for="firstName">First Name</label>
                            <input type="text" class="form-control" id="firstName" name="first_name" autofocus required>
                        </div>
                        <!-- Input text -->
                        <div class="form-group">
                            <label for="lastName">Last Name</label>
                            <input type="text" class="form-control" id="lastName" name="last_name" required>
                        </div>
                        <!-- input text -->
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                        <!-- input number -->
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone" required>
                        </div>
                        <!-- input text -->
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <!-- input password -->
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <!-- Select -->
                        <div class="form-group">
                            <label for="selectOption">Kategori User</label>
                            <select class="form-control" id="selectOption">
                                <option>Admin</option>
                                <option>Petugas</option>
                            </select>
                        </div>
                        <!-- input file -->
                        <div class="form-group">
                            <label for="foto">Foto</label>
                            <input type="file" class="form-control-file" id="foto" name="foto" required>
                        </div>
                        <!-- input button -->
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-check-circle mr-1"></i>Simpan
                        </button>
                        <a href="User.php" class="btn btn-link">
                            <i class="fas fa-arrow-left mr-1"></i>
                            Kembali
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <?php include __DIR__ . '/../../inc/footer.php'; ?>