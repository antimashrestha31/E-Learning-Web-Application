<?php
include './include/B_com_db_connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['id']) && isset($_POST['semester'])) {
        $id = $_POST['id'];
        $semester = $_POST['semester'];

        // Delete the record based on ID
        $deleteQuery = "DELETE FROM syllabus WHERE id = ?";
        $stmt = $conn->prepare($deleteQuery);
        $stmt->bind_param('i', $id);

        if ($stmt->execute()) {
            // Redirect back to the view page for the same semester with a success message
            header("Location: Com_syllabus_view.php?semester=" . urlencode($semester) . "&status=success&message=" . urlencode("Record deleted successfully."));
        } else {
            // Redirect with an error message if deletion fails
            header("Location: Com_syllabus_view.php?semester=" . urlencode($semester) . "&status=error&message=" . urlencode("Failed to delete record."));
        }

        $stmt->close();
    } else {
        // Redirect if ID or semester is missing
        header("Location: Com_syllabus_view.php?status=error&message=" . urlencode("Invalid delete request."));
    }
} else {
    // Redirect if not a POST request
    header("Location: Com_syllabus_view.php?status=error&message=" . urlencode("Invalid request method."));
}
$conn->close();
exit;
?>
