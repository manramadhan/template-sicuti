<?php
include __DIR__ . '/../../inc/header.php';
include __DIR__ . '/../../inc/sidebar.php';
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Tambah Pengajuan Cuti</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>/pages/dashboard.php">Home</a></li>
                <li class="breadcrumb-item"><a href="pengajuan_cuti.php">Pengajuan Cuti</a></li>
                <li class="breadcrumb-item active">Tambah Pengajuan Cuti</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-plus mr-1"></i>
                    Form Tambah Pengajuan Cuti
                </div>
                <div class="card-body">
                    <form action="proses_tambah_pengajuan_cuti.php" method="POST">
                        <!-- input text -->
                        <div class="form-group">
                            <label for="karyawan">Nama Karyawan</label>
                            <input type="text" class="form-control" id="karyawan" name="karyawan" autofocus required>
                        </div>
                        <!-- input text -->
                        <div class="form-group">
                            <label for="divisi">Divisi</label>
                            <input type="text" class="form-control" id="divisi" name="divisi" required>
                        </div>
                        <!-- input password -->
                        <div class="form-group">
                            <label for="jumlah_cuti">Jumlah Cuti (dalam hari)</label>
                            <input type="number" class="form-control" id="jumlah_cuti" name="jumlah_cuti" min="1" required>
                        </div>

                       <!-- Select -->
                       <div class="form-group">
                            <label for="selectOption">Supervisor</label>
                            <select class="form-control" id="selectOption">
                                <option>Tidak Berkategori</option>
                                <option>Surat Keputusan</option>
                                <option>Surat Izin Pelaksanaan</option>
                                <option>Surat Perintah Kerja Proyek Jalan</option>
                                <option>Surat Kesehatan Pegawau</option>
                            </select>
                        </div>
                        <!-- Select -->
                        <div class="form-group">
                            <label for="selectOption">Manajer</label>
                            <select class="form-control" id="selectOption">
                                <option>Tidak Berkategori</option>
                                <option>Surat Keputusan</option>
                                <option>Surat Izin Pelaksanaan</option>
                                <option>Surat Perintah Kerja Proyek Jalan</option>
                                <option>Surat Kesehatan Pegawau</option>
                            </select>
                        </div>
                        <!-- input textarea -->
                        <div class="form-group">
                            <label for="kategoriDeskripsi">Alasan Cuti</label>
                            <textarea class="form-control" id="kategoriDeskripsi" name="kategori_deskripsi" rows="3" required></textarea>
                        </div>
                        <!-- input button -->
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-check-circle mr-1"></i>Submit
                        </button>
                        <a href="pengajuan_cuti.php" class="btn btn-link">
                            <i class="fas fa-arrow-left mr-1"></i>
                            Kembali
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <?php include __DIR__ . '/../../inc/footer.php'; ?>
</div>