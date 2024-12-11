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
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-pen mr-1"></i>
                    Update Profil
                </div>
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label for="first_name">First Name</label>
                                <input type="text" class="form-control" value="Kevin" id="first_name" />
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="last_name">Last Name</label>
                                <input type="text" class="form-control" value="Adisurya" id="last_name" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" value="Kepin" id="username" />
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" value="kevin@gmail.com" id="email" />
                            </div>
                        </div>
                        <!-- input password -->
                        <div class="form-group">
                            <label for="examplePassword1">Password</label>
                            <input type="password" class="form-control" value="*" id="examplePassword1" />
                        </div>
                        <!-- input file -->
                        <div class="form-group">
                            <label for="exampleInputFile1">Foto</label>
                            <input type="file" class="form-control-file" id="exampleInputFile1" />
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="update_profil.php" class="btn btn-link">
                            <i class="fas fa-arrow-left mr-1"></i>
                            Kembali
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <?php include __DIR__ . '/../../inc/footer.php'; ?>