<?php
include './include/B_com_db_connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $semester = $_POST['semester'];
    $subject_name = $_POST['subject_name'];
    $old_file = $_POST['old_file'] ?? '';

    // Handle file upload
    $file_path = $old_file; // Default to old file path
    if (isset($_FILES['documentFile']) && $_FILES['documentFile']['error'] === UPLOAD_ERR_OK) {
        $file_path = '../../uploads/' . basename($_FILES['documentFile']['name']);
        move_uploaded_file($_FILES['documentFile']['tmp_name'], $file_path);
    }

    // Update query
    $query = "UPDATE be_com_note SET semester = ?, subject_name = ?, file_path = ? WHERE id = ?";
    $stmt = $conn->prepare($query);

    if (!$stmt) {
        die("Error preparing statement: " . $conn->error);
    }

    $stmt->bind_param('sssi', $semester, $subject_name, $file_path, $id);

    if ($stmt->execute()) {
        error_log("Record updated successfully.");
        header("Location: Com_Note_view.php?semester=" . urlencode($semester) . "&status=success&message=" . urlencode("Record updated successfully."));
    } else {
        die("Error executing statement: " . $stmt->error);
    }

    $stmt->close();
    $conn->close();
    exit;
}
?>
