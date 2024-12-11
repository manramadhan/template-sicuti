<?php
include __DIR__ . '/../../inc/header.php';
include __DIR__ . '/../../inc/sidebar.php';

// Fungsi untuk menghapus devisi
hapus_devisi();
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Devisi</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>/pages/dashboard.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Devisi</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-users mr-1"></i>
                    Tabel Data Devisi
                    <a href="tambah_devisi.php" class="btn btn-primary float-right">
                        <i class="fas fa-plus mr-2"></i> Tambah Devisi
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Devisi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                $tampil_devisi = tampil_devisi();  // Fetch data from the database
                                foreach ($tampil_devisi as $devisi) :
                                ?>
                                    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $devisi['devisi']; ?></td>
                                        <td>
                                        <a href="edit_devisi.php?id=<?php echo $devisi['id']; ?>" class="btn btn-warning btn-sm">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            &nbsp;
                                            <a href="devisi.php?id=<?php echo $devisi['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apa anda yakin ingin menghapus user ini?')">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                        </td>
                                    </tr>
                                <?php $no++; endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="<?php echo BASE_URL; ?>assets/demo/datatables-demo.js"></script>
<?php include __DIR__ . '/../../inc/footer.php'; ?>
