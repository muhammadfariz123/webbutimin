<?php
$host = 'db';
$user = 'warungbakso';
$password = 'warungbakso';
$dbname = 'warungbakso';

$koneksi = new mysqli($host, $user, $password, $dbname);

if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
