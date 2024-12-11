<?php
function get_ip_address() {
    $get_ip_address = $_SERVER['REMOTE_ADDR'];

    if($get_ip_address == '::1') {
        $set_ip_address = '127.0.0.1';
    } else {
        $set_ip_address = $get_ip_address;
    }
    
    return $set_ip_address;
}

function kirim_pesan($nomor_wa, $username)
{
    $curl = curl_init();

    $pesan = [
        "messageType" => "text",
        "to" => $nomor_wa,
        "body" => "Selamat Datang di Aplikasi Salman, $username",
    ];

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.starsender.online/api/send',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => json_encode($pesan),
        CURLOPT_HTTPHEADER => array(
            'Content-Type:application/json',
            "Authorization: 4f9e8cc0-6b80-4c2f-aad5-e754fffa47af"
        ),

    ));
    $response = curl_exec($curl);
    curl_close($curl);
    return json_decode($response, true);
}

function register()
{
    global $db;

    // Mengambil input dengan filter sanitasi dasar
    $ip_address = get_ip_address();
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $username = $_POST['username'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $active = $_POST['active'];

    // Cek apakah email sudah terdaftar menggunakan prepared statements
    $sql_check = "SELECT * FROM users WHERE email = ?";
    $stmt_check = $db->prepare($sql_check);
    $stmt_check->bind_param("s", $email);
    $stmt_check->execute();
    $result_check = $stmt_check->get_result();
    
    if ($result_check->num_rows > 0) {
        // Jika email sudah ada
        return "Email sudah terdaftar";
    } else {
        // Jika email belum terdaftar, masukkan data ke tabel users
        $sql_register = "INSERT INTO users (ip_address, first_name, last_name, username, phone, email, password, active) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt_register = $db->prepare($sql_register);
        $stmt_register->bind_param("sssssssi", $ip_address, $first_name, $last_name, $username, $phone, $email, $password, $active);
        
        if ($stmt_register->execute()) {
            $response = kirim_pesan($phone, $username);

            if($response['success'] === true) {
                return "berhasil";
            } else {
                return "berhasil, tidak terkirim";
            }
        } else {
            return "gagal";
        }
    }
}