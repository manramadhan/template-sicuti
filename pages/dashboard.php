<?php
include __DIR__ . '../../inc/header.php';
include __DIR__ . '../../inc/sidebar.php';

// Periksa apakah koneksi `$db` tersedia dan valid
if (!$db) {
    die("Koneksi ke database gagal: " . $db->connect_error);
}
// Ambil data jumlah user
$queryUser = "SELECT COUNT(*) AS total_user FROM users";
$resultUser = $db->query($queryUser);

$totalUser = 0;
if ($resultUser) {
    $dataUser = $resultUser->fetch_assoc();
    $totalUser = $dataUser['total_user'];
}
// Ambil data jumlah devisi
$queryDevisi = "SELECT COUNT(*) AS total_devisi FROM devisi";
$resultDevisi = $db->query($queryDevisi);

$totalDevisi = 0;
if ($resultDevisi) {
    $dataDevisi = $resultDevisi->fetch_assoc();
    $totalDevisi = $dataDevisi['total_devisi'];
}
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>

            <div class="row">
                <!-- Card 1 -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card text-white" style="background-color: #3498db;">
                        <div class="card-body d-flex align-items-center">
                            <i class="fas fa-chart-pie fa-2x mr-3"></i>
                            <div>
                                <div>Total Devisi</div>
                                <div class="h4 font-weight-bold"><?php echo $totalDevisi ?></div>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="<?php echo BASE_URL; ?>/pages/petugas/petugas.php">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card text-white" style="background-color: #2ecc71;">
                        <div class="card-body d-flex align-items-center">
                            <i class="fas fa-calendar-alt fa-2x mr-3"></i>
                            <div>
                                <div>Jenis Cuti</div>
                                <div class="h4 font-weight-bold">5</div>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="<?php echo BASE_URL; ?>/pages/user/user.php">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card text-white" style="background-color: #f39c12;">
                        <div class="card-body d-flex align-items-center">
                            <i class="fas fa-user-tie fa-2x mr-3"></i>
                            <div>
                                <div>Supervisor</div>
                                <div class="h4 font-weight-bold">5</div>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="<?php echo BASE_URL; ?>/pages/user/user.php">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card text-white" style="background-color: #e74c3c;">
                        <div class="card-body d-flex align-items-center">
                            <i class="fas fa-users fa-2x mr-3"></i>
                            <div>
                                <div>Karyawan</div>
                                <div class="h4 font-weight-bold"><?php echo $totalUser ?></div>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="<?php echo BASE_URL; ?>/pages/user/user.php">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card text-white" style="background-color: #2ecc71;">
                        <div class="card-body d-flex align-items-center">
                            <i class="fas fa-check-circle fa-2x mr-3"></i>
                            <div>
                                <div>Cuti Diterima</div>
                                <div class="h4 font-weight-bold">5</div>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="<?php echo BASE_URL; ?>/pages/user/user.php">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>

                <!-- Card 6 -->
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card text-white" style="background-color: #e74c3c;">
                        <div class="card-body d-flex align-items-center">
                            <i class="fas fa-times-circle fa-2x mr-3"></i>
                            <div>
                                <div>Cuti Ditolak</div>
                                <div class="h4 font-weight-bold">5</div>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="<?php echo BASE_URL; ?>/pages/user/user.php">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>

                <!-- Card 7 -->
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card bg-primary text-white">
                        <div class="card-body d-flex align-items-center">
                            <i class="fas fa-file-alt fa-2x mr-3"></i>
                            <div>
                                <div>Total Pengajuan</div>
                                <div class="h4 font-weight-bold">5</div>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="<?php echo BASE_URL; ?>/pages/user/user.php">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Profil Pengguna -->
            <div class="row mt-4">
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card">
                        <div class="card-header text-center">
                            <img src="<?php echo BASE_URL; ?>/assets/img/error-404-monochrome.svg" alt="admin avatar" class="img-fluid rounded-circle" style="width: 100px; height: 100px;">
                            <h5 class="mt-2">Admin Saya</h5>
                            <p>082272242022</p>
                            <a href="<?php echo BASE_URL; ?>/pages/profile/update_profil.php" class="btn btn-primary btn-sm">Edit Profil</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5>Profil Detail</h5>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <tr>
                                    <th>Nama</th>
                                    <td>Admin Saya</td>
                                </tr>
                                <tr>
                                    <th>Kontak</th>
                                    <td>082272242022</td>
                                </tr>
                                <tr>
                                    <th>Username</th>
                                    <td>admin</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Akhir Profil Pengguna -->
        </div>
    </main>
    <?php include __DIR__ . '../../inc/footer.php'; ?>
