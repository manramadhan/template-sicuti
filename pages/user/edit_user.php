<?php
include __DIR__ . '/../../inc/header.php';
include __DIR__ . '/../../inc/sidebar.php';

// Periksa jika ada ID pengguna di URL
if (isset($_GET['id'])) {
    $userId = $_GET['id'];
    // Ambil data user berdasarkan ID
    $user = ambil_edit_user($userId);

    // Periksa jika data user ditemukan
    if (!$user) {
        echo "<script>
                alert('User tidak ditemukan');
                window.location = 'user.php';
            </script>";
        exit;
    }
} else {
    echo "<script>
            alert('ID pengguna tidak ditemukan');
            window.location = 'user.php';
        </script>";
    exit;
}

// Proses pengeditan data user
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Panggil fungsi untuk memperbarui user dan periksa hasilnya
    if (update_user($userId)) {
        echo "<script>
                alert('Berhasil edit user');
                window.location = 'user.php';
            </script>";
    } else {
        echo "<script>
                alert('Gagal edit user');
                window.location = 'edit_user.php?id=" . $userId . "';
            </script>";
    }
}
?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Edit User</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>/pages/dashboard.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Edit User</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fa fa-edit mr-1"></i>
                    edit User
                </div>
                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data">
                        <!-- input text -->
                        <div class="form-group">
                            <label for="firstName">First Name</label>
                            <input type="text" class="form-control" id="firstName" name="first_name" value="<?php echo htmlspecialchars($user['first_name']); ?>" required>
                        </div>
                        <!-- Input text -->
                        <div class="form-group">
                            <label for="lastName">Last Name</label>
                            <input type="text" class="form-control" id="lastName" name="last_name" value="<?php echo htmlspecialchars($user['last_name']); ?>" required>
                        </div>
                        <!-- input text -->
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username" value="<?php echo htmlspecialchars($user['username']); ?>" required>
                        </div>
                        <!-- input password -->
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone" value="<?php echo htmlspecialchars($user['phone']); ?>" required>
                        </div>
                        <!-- input text -->
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" required>
                        </div>
                        <!-- input password -->
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Isi jika ingin mengubah password">
                        </div>
                        <!-- select -->
                        <div class="form-group">
                            <label for="active">Status User</label>
                            <select class="form-control" id="active" name="active">
                                <option selected disabled>Pilih Status User</option>
                                <option value="1" <?php echo ambil_edit_user()['active'] == '1' ? 'selected' : '' ?>>Aktif</option>
                                <option value="0" <?php echo ambil_edit_user()['active'] == '0' ? 'selected' : '' ?>>Tidak Aktif</option>
                            </select>
                        </div>
                        <!-- input file -->
                        <div class="form-group">
                            <label for="foto">Foto</label>
                            <?php if (!empty($user['foto'])): ?>
                                <!-- Tampilkan gambar jika ada -->
                                <div>
                                    <td><img src="<?php echo $user['foto']; ?>" alt="" height="50%"></td>
                                </div>
                            <?php endif; ?>
                            <input type="file" class="form-control-file" id="foto" name="foto">
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