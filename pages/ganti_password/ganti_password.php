<?php
include __DIR__ . '/../../inc/header.php';
include __DIR__ . '/../../inc/sidebar.php';
?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Ganti password</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>/pages/dashboard.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Ganti password</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-key mr-1"></i>
                     Ganti password
                </div>
                <div class="card-body">
                    <form method="POST" action="<?php echo BASE_URL; ?>/pages/proses_tambah_User.php">
                        <!-- input password -->
                        <div class="form-group">
                            <label for="exampleInputPassword1">Masukan Password Baru</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <!-- input button -->
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-check-circle mr-1"></i>Simpan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <?php include __DIR__ . '/../../inc/footer.php'; ?>