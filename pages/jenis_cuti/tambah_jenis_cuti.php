<?php
include __DIR__ . '/../../inc/header.php';
include __DIR__ . '/../../inc/sidebar.php';
?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Tambah Jenis Cuti</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>/pages/dashboard.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Tambah Cuti</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-plus"></i>
                    Tambah Jenis Cuti
                </div>
                <div class="card-body">
                    <form method="POST">
                        <!-- input text -->
                        <div class="form-group">
                            <label for="exampleInputName1">Jenis Cuti</label>
                            <input type="text" class="form-control" id="exampleInputName1" autofocus>
                        </div>
                        <!-- input password -->
                        <div class="form-group">
                            <label for="jumlah_cuti">Jumlah Cuti (dalam hari)</label>
                            <input type="number" class="form-control" id="jumlah_cuti" name="jumlah_cuti" min="1" required>
                        </div>
                        <!-- input button -->
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-check-circle mr-1"></i>Submit
                        </button>
                        <a href="jenis_cuti.php" class="btn btn-link">
                            <i class="fas fa-arrow-left mr-1"></i>
                            Kembali
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <?php include __DIR__ . '/../../inc/footer.php'; ?>