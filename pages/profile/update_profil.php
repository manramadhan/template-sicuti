<?php
include_once  __DIR__ . '/../../inc/header.php';
include_once  __DIR__ . '/../../inc/sidebar.php';
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Update Profil</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item">
                    <a href="<?php echo BASE_URL; ?>dashboard.php">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Update Profil</li>
            </ol>

            <!-- Profil Detail -->
            <div class="row mt-4">
                <div class="col-xl-3 col-md-6">
                    <div class="card mb-4">
                        <div class="card-header text-center">
                            <img src="<?php echo BASE_URL; ?>/assets/img/error-404-monochrome.svg" alt="admin avatar" class="img-fluid rounded-circle" style="width: 100px; height: 100px;">
                            <h5 class="mt-2">Admin Saya</h5>
                            <p>082272242022</p>
                            <a href="edit_profil.php" class="btn btn-primary btn-sm">Edit Profil</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9">
                    <div class="card mb-4" id="profileDetail">
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
    </main>
    <?php include __DIR__ . '/../../inc/footer.php';
