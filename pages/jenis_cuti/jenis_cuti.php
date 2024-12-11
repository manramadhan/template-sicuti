<?php
include __DIR__ . '/../../inc/header.php';
include __DIR__ . '/../../inc/sidebar.php';
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Data Jenis cuti</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>/pages/dashboard.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Jenis cuti</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-calendar-alt mr-1"></i>
                    Tabel Data Jenis cuti
                    <a href="tambah_jenis_cuti.php" class="btn btn-primary float-right">
                        <i class="fas fa-plus mr-2"></i> Tambah Jenis Cuti
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Jenis cuti</th>
                                    <th>Jumlah Hari</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Cuti Tahunan</td>
                                    <td>14 Hari</td>
                                    <td>
                                            <a href="edit_jenis_cuti.php" class="btn btn-outline-warning btn-sm">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            &nbsp;
                                            <a href="#" class="btn btn-outline-danger btn-sm" title="Hapus">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Cuti Melahirkan</td>
                                    <td>96 Hari</td>
                                    <td>
                                            <a href="edit_jenis_cuti.php" class="btn btn-outline-warning btn-sm">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            &nbsp;
                                            <a href="#" class="btn btn-outline-danger btn-sm" title="Hapus">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
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