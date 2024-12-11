<?php

function login()
{
    global $db;
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    // Menggunakan LIMIT 1 untuk memastikan hanya satu hasil yang dikembalikan
    $sql_login = "SELECT * FROM users WHERE email = '$email' AND password = '$password' LIMIT 1";
    $eksekusi_login = $db->query($sql_login);

    if ($eksekusi_login->num_rows > 0) {
        $result = $eksekusi_login->fetch_assoc();
        $_SESSION['user'] = array(
            'id' => $result['id'],
            'first_name' => $result['first_name'],
            'last_name' => $result['last_name'],
            'username' => $result['username'],
            'phone' => $result['phone'],
            'email' => $result['email']
        );
        return true;
    } else {
        return false;
    }
}
