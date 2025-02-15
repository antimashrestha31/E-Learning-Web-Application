<?php
// Include database connection
include('include/connect_db.php');

// Retrieve form data
$name = $_POST['name'];
$feedback = $_POST['comment']; 
$range = $_POST['satisfaction']; 

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO feedback_tb (name, feedback, `range`) VALUES (?, ?, ?)");
if ($stmt) {
    $stmt->bind_param("ssi", $name, $feedback, $range);
    if ($stmt->execute()) {
        // Redirect with a success message
        header("Location: contribute.php?status=success&message=Feedback+submitted+successfully");
    } else {
        // Redirect with an error message
        header("Location: contribute.php?status=error&message=Failed+to+submit+feedback");
    }
    $stmt->close();
} else {
    // Redirect with a preparation error message
    header("Location: contribute.php?status=error&message=Failed+to+prepare+the+statement");
}

$conn->close();
exit();
?>
