<?php
function tampil_user()
{
    global $db;

    $query = "SELECT * FROM users";
    $tampil_user = $db->query($query);
    $result = array();
    while ($row = $tampil_user->fetch_assoc()) {
        $result[] = $row;
    }

    return $result;
}

function tambah_user()
{
    global $db;

    $ip_address = get_ip_address();
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $username = $_POST['username'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $active = $_POST['active'];

    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["foto"]["name"]);

    $check = getimagesize($_FILES["foto"]["tmp_name"]);
    if ($check !== false) {
        if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
            $foto = $target_file;

            $query = "INSERT INTO users (ip_address, first_name, last_name, username, phone, email, foto, password, active) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = $db->prepare($query);
            $stmt->bind_param("ssssssssi", $ip_address, $first_name, $last_name, $username, $phone, $email, $foto, $password, $active);
        }   
    }
    return $stmt->execute();
}


function update_user()
{
    global $db;
    $get_id = $_GET['id'];
    $ip_address = get_ip_address();
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $username = $_POST['username'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $foto = $_FILES['foto'];
    $password = md5($_POST['password']);
    $active = $_POST['active'];

    $query = "SELECT foto FROM users WHERE id = ?";
    $stmt = $db->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result()->fetch_assoc();
    $foto_lama = $result['foto'];

    $target_dir = "uploads/";
    $target_file = $target_dir . basename($foto["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $allowed_types = ["jpg", "jpeg", "png", "gif"];

    if (isset($foto) && $foto['error'] == 0 && in_array($imageFileType, $allowed_types)) {
        if (move_uploaded_file($foto["tmp_name"], $target_file)) {
            $foto = $target_file;

            if ($foto_lama && file_exists($foto_lama)) {
                unlink($foto_lama);
            }
        } else {
            return [
                "status" => "error", 
                "message" => "Gagal mengupload gambar"
            ];
        }
    } else {
        $foto = $foto_lama;
    }


    $query = "UPDATE users SET ip_address = ?, first_name = ?, last_name = ?, username = ?, phone = ?, email = ?, password = ?, active = ? WHERE id = ?";
    $stmt = $db->prepare($query);
    $stmt->bind_param("sssssssii", $ip_address, $first_name, $last_name, $username, $phone, $email, $password, $active, $get_id);
    return $stmt->execute();
}

function ambil_edit_user()
{
    global $db;
    $get_id = $_GET['id'];

    $query = "SELECT * FROM users WHERE id = ?";
    $stmt = $db->prepare($query);
    $stmt->bind_param("i", $get_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_assoc();

    return $data;
}

function hapus_user()
{

    global $db;
    if (isset($_GET['id'])) {
        $get_id = $_GET['id'];

        $query = "DELETE FROM users WHERE id = ?";
        $stmt = $db->prepare($query);
        $stmt->bind_param("i", $get_id);

        if ($stmt->execute()) {
            echo "<script>
            alert('User berhasil dihapus');
            window.location = 'user.php';
            </script>";
            exit();
        } else {
            echo "Error" . $db->error;
            exit;
        }
    }
}

function getTotaluser()
{
    global $db;

    $query = "SELECT COUNT(*) AS total_users FROM users";
    $result = $db->query($query);

    return $result->fetch_assoc();
}