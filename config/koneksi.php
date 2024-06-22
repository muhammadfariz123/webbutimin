<?php
$db_name = "mysql:host=db;dbname=warungbakso";
$user_name = "warungbakso";
$user_password = "warungbakso";

$koneksi = new mysqli($db_name, $user_name, $user_password);


if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
