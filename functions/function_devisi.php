<?php
// Fungsi untuk mengambil semua data devisi
function tampil_devisi() {
    global $db;  // Use $db instead of $conn

    // Check if the connection is valid
    if ($db === null) {
        die("Database connection not established.");
    }

    $query = "SELECT * FROM devisi";  // Make sure the table name is 'devisi'
    $result = $db->query($query);  // Use $db instead of $conn

    if (!$result) {
        die("Query failed: " . $db->error);
    }

    return $result;
}

// Fungsi untuk menambah data devisi
function tambah_devisi()
{
    global $db;

    // Cek apakah data sudah terkirim melalui POST
    if (isset($_POST['devisi'])) {
        $devisi = $_POST['devisi'];

        // Persiapkan query untuk insert
        $query = "INSERT INTO devisi (devisi) VALUES (?)";  // Table and column names should match
        $stmt = $db->prepare($query);
        
        // Cek apakah statement berhasil dipersiapkan
        if ($stmt === false) {
            return false;  // Return false on error
        }

        // Bind parameter
        $stmt->bind_param("s", $devisi);  // "s" for string type

        // Eksekusi query
        if ($stmt->execute()) {
            return true;  // Return true if successfully inserted
        } else {
            return false;  // Return false if execution failed
        }
    }
    return false;  // Return false if no data was sent
}

// Fungsi untuk mengambil data devisi berdasarkan ID
function ambil_devisi()
{
    global $db;

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $query = "SELECT * FROM devisi WHERE id = ?";  // Correct table and column names
        $stmt = $db->prepare($query);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_assoc();
    } else {
        echo "ID tidak ditemukan!";
        return null;
    }
}

// Fungsi untuk mengupdate data devisi
function update_devisi()
{
    global $db;

    if (isset($_POST['id']) && isset($_POST['devisi'])) {
        $id = $_POST['id'];
        $devisi = $_POST['devisi'];

        $query = "UPDATE devisi SET devisi = ? WHERE id = ?";  // Correct table and column names
        $stmt = $db->prepare($query);
        $stmt->bind_param("si", $devisi, $id);  // "si" for string and integer types

        if ($stmt->execute()) {
            return true;  // Return true if successfully updated
        } else {
            return false;  // Return false if execution failed
        }
    }
    return false;  // Return false if missing ID or devisi
}

// Fungsi untuk menghapus data devisi
function hapus_devisi()
{
    global $db;

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $query = "DELETE FROM devisi WHERE id = ?";  // Correct table and column names
        $stmt = $db->prepare($query);
        $stmt->bind_param("i", $id);  // "i" for integer type

        if ($stmt->execute()) {
            echo "<script>
            alert('Devisi berhasil dihapus');
            window.location = 'devisi.php';
            </script>";
        } else {
            echo "Error: " . $db->error;
        }
    }
}

function getTotaldevisi()
{
    global $db;

    $query = "SELECT COUNT(*) AS total_devisi FROM devisi";
    $result = $db->query($query);

    return $result->fetch_assoc();
}