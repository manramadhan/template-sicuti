<?php
include __DIR__ . '/../../inc/header.php';
include __DIR__ . '/../../inc/sidebar.php';

// Handle the addition of devisi
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (tambah_devisi()) {
        echo "<script>
                alert('Devisi berhasil ditambahkan');
                window.location = 'devisi.php';
              </script>";
    } else {
        echo "<script>
                alert('Gagal tambah devisi');
                window.location = 'tambah_devisi.php';
              </script>";
    }
}
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Tambah Devisi</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>/pages/dashboard.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Tambah Devisi</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-plus"></i>
                    Tambah Devisi
                </div>
                <div class="card-body">
                    <form method="POST">
                        <div class="form-group">
                            <label for="devisi">Nama Devisi</label>
                            <input type="text" class="form-control" name="devisi" id="devisi" autofocus required>
                        </div>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-check-circle mr-1"></i>Submit
                        </button>
                        <a href="devisi.php" class="btn btn-link">
                            <i class="fas fa-arrow-left mr-1"></i>Kembali
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </main>
<?php include __DIR__ . '/../../inc/footer.php'; ?>
