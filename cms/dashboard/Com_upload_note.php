<?php
// Include database connection
include('./include/B_com_db_connection.php');

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $semester = $_POST['semester'];
    $subject_name = $_POST['subject_name'];

    // Handle file upload
    $uploadDir = '../../uploads/'; // Directory to save uploaded files

    if (isset($_FILES['documentFile']) && $_FILES['documentFile']['error'] === UPLOAD_ERR_OK) {
        $fileName = basename($_FILES['documentFile']['name']);
        $file_path = $uploadDir . $fileName;

        // Validate if the file is a PDF
        $fileType = pathinfo($file_path, PATHINFO_EXTENSION); 
        if (strtolower($fileType) !== 'pdf') {
            // Redirect with an error message
            header("Location: Com_Note.php?status=error&message=Only+PDF+files+are+allowed");
            exit;
        }

        // Move uploaded file to the upload directory
        if (move_uploaded_file($_FILES['documentFile']['tmp_name'], $file_path)) {
            // Prepare SQL query to insert data
            $query = "INSERT INTO be_com_note (semester,subject_name, file_path) VALUES (?, ?, ?)";
            $stmt = $conn->prepare($query);

            if ($stmt) {
                $stmt->bind_param('sss', $semester, $subject_name, $file_path);
                if ($stmt->execute()) {
                    // Redirect with a success message
                    header("Location: Com_Note.php?status=success&message=Question+submitted+successfully");
                } else {
                    // Redirect with an error message
                    header("Location: Com_Note.php?status=error&message=Database+insertion+failed");
                }
                $stmt->close();
            } else {
                // Redirect with an error message
                header("Location: Com_Note.php?status=error&message=Failed+to+prepare+the+statement");
            }
        } else {
            // Redirect with an error message
            header("Location: Com_Note.php?status=error&message=File+upload+failed");
        }
    } else {
        // Redirect with an error message
        header("Location: Com_Note.php?status=error&message=No+file+uploaded+or+invalid+file");
    }
} else {
    // Redirect with an error message
    header("Location: Com_Note.php?status=error&message=Invalid+request");
}
exit; // Ensure no further execution occurs after redirection
?>
