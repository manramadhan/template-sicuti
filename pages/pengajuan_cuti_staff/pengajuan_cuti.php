<?php
include __DIR__ . '/../../inc/header.php';
include __DIR__ . '/../../inc/sidebar.php';
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Pengajuan Cuti Staff</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>/pages/dashboard.php">Home</a></li>
                <li class="breadcrumb-item active">Pengajuan Cuti Staff</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    Tabel Pengajuan Cuti Staff
                    <a href="tambah_pengajuan_cuti.php" class="btn btn-primary float-right">
                        <i class="fas fa-plus mr-2"></i> Tambah Cuti
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Staff</th>
                                    <th>Cuti</th>
                                    <th>Jumlah Cuti</th>
                                    <th>Status Saya</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <strong>Nama :</strong> Antoni Agus Ramhat<br>
                                        <strong>Divisi :</strong> Pemasaran
                                    </td>
                                    <td>
                                        <strong>Mulai :</strong> 05-06-2022<br>
                                        <strong>Akhir :</strong> 07-06-2022
                                    </td>
                                    <td>2 Hari</td>
                                    <td>Terima</td>
                                    <td>
                                    <a href="#" class="btn btn-outline-primary btn-sm" title="Print">
                                            <i class="fas fa-print"></i>
                                        </a>
                                        &nbsp;
                                        <a href="#" class="btn btn-outline-success btn-sm" title="Detail">
                                            <i class="fas fa-search"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>
                                        <strong>Nama :</strong> Marina Aliyah<br>
                                        <strong>Divisi :</strong> Pemasaran
                                    </td>
                                    <td>
                                        <strong>Mulai :</strong> 19-06-2023<br>
                                        <strong>Akhir :</strong> 23-06-2023
                                    </td>
                                    <td>4 Hari</td>
                                    <td>Terima</td>
                                    <td>
                                        <a href="#" class="btn btn-outline-primary btn-sm" title="Print">
                                            <i class="fas fa-print"></i>
                                        </a>
                                        &nbsp;
                                        <a href="#" class="btn btn-outline-success btn-sm" title="Detail">
                                            <i class="fas fa-search"></i>
                                        </a>
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