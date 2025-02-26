<?php
header('Content-Type: application/json');

try {
    include "koneksi.php";  // Make sure koneksi.php is properly set up for DB connection
    
    // Prepare the SQL statement
    $stmt = $db->prepare("SELECT * FROM sekolah");

    // Execute the query
    $stmt->execute(); 

    // Fetch all results
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Check if data was found
    if ($result) {
        echo json_encode($result);
    } else {
        echo json_encode(['message' => 'No data found']);
    }

    // Optionally close the statement to free resources
    $stmt = null;
} catch (PDOException $e) {
    // Handle any errors
    echo json_encode(['error' => $e->getMessage()]);
}
?>
