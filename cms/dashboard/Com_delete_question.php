<?php
include './include/B_com_db_connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id']; // Get the ID of the record to delete
    $semester = isset($_POST['semester']) ? $_POST['semester'] : null; // Get semester

    // Check if semester is provided
    if (!$semester) {
        header("Location: error_page.php?message=" . urlencode("Semester not specified."));
        exit;
    }

    // Delete query
    $query = "DELETE FROM be_com_question WHERE id = ?";
    $stmt = $conn->prepare($query);

    if (!$stmt) {
        die("Error preparing statement: " . $conn->error);
    }

    $stmt->bind_param('i', $id);

    if ($stmt->execute()) {
        // Redirect to the desired page with the semester
        header("Location: Com_Question_view.php?semester=" . urlencode($semester) . "&status=success&message=" . urlencode("Record deleted successfully."));
    } else {
        // Redirect back with an error message
        header("Location: Com_Question_view.php?semester=" . urlencode($semester) . "&status=error&message=" . urlencode("Failed to delete the record."));
    }

    $stmt->close();
    $conn->close();
    exit;
}
?>
