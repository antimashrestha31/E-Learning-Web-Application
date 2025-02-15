<?php
// Include the database connection
include('../includes/db.php');

// Start a session to check admin authentication
session_start();

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $newPassword = $_POST['newPassword'] ?? '';
    $confirmPassword = $_POST['confirmPassword'] ?? '';

    // Validate passwords
    if (empty($newPassword) || empty($confirmPassword)) {
        echo "Both password fields are required!";
    }

    if ($newPassword !== $confirmPassword) {
        echo "Passwords do not match!";
    }

    if (strlen($newPassword) < 6) {
        echo "Password must be at least 6 characters!";
    }

    // Hash the new password
    $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

    // Assume admin ID is stored in session
    $admin_id = $_SESSION['admin_id'] ?? null;

    if (!$admin_id) {
        echo "Admin not logged in!";
        exit;
    }

    // Update the password in the database
    $query = "UPDATE admin_tb SET password = ? WHERE id = ?";
    $stmt = $conn->prepare($query);

    if ($stmt) {
        $stmt->bind_param('si', $hashedPassword, $admin_id);

        if ($stmt->execute()) {
            echo "Password updated successfully!";
        } else {
            echo "Failed to update password!";
        }

        $stmt->close();
    } else {
        echo "Failed to prepare the statement!";
    }

    $conn->close();
}
?>
