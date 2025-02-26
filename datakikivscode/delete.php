<?php
header('Content-Type: application/json');
include "koneksi.php";

$id = (int) $_POST['id'];
$stmt = $db->prepare("DELETE FROM sekolah WHERE id = ?");
$result = $stmt->execute([$id]);

echo json_encode([
    'id' => $id,
    'succsess' => $result
]);
?>
