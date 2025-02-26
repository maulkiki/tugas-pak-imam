<?php
header('Content-Type: application/json');
include "koneksi.php";

$id = $_POST['id'];
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$tplahir = $_POST['tplahir'];
$tglahir = $_POST['tglahir'];
$kelamin = $_POST['kelamin'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];

$stmt = $db->prepare("UPDATE sekolah SET nis = ?, nama = ?, tplahir = ?, tglahir = ?, kelamin = ?, agama = ?, alamat = ? WHERE id = ?");
$result = $stmt->execute([$nis, $nama, $tplahir, $tglahir, $kelamin, $agama, $alamat, $id]);

echo json_encode([
'success' => $result
]);
?>