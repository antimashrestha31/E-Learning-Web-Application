<?php include './include/Bit_db_connection.php'; ?>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $semester = $_POST['course-semester'];
    $subjectName = $_POST['SubjectName'];
    $subjectCode = $_POST['SubjectCode'];
    $creditHour = $_POST['CreditHour'];

    // Check if the record already exists
    $query = "SELECT * FROM syllabus WHERE semester = ? AND subject_name = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('ss', $semester, $subjectName);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        header("Location: bit_syllabus.php?status=error&message=Record+already+exists");
        // header("Location: bit_syllabus.php?status=error&message=" . urlencode("Record already exists!"));
    } else {
        // Insert the new record
        $insertQuery = "INSERT INTO syllabus (semester, subject_name, subject_code, credit_hour) VALUES (?, ?, ?, ?)";
        $insertStmt = $conn->prepare($insertQuery);
        $insertStmt->bind_param('ssss', $semester, $subjectName, $subjectCode, $creditHour);

        if ($insertStmt->execute()) {
            header("Location: bit_syllabus_view.php?semester=" . urlencode($semester));

        } else {
            header("Location: bit_syllabus.php?status=error&message=" . urlencode("Failed to insert record."));
        }
    }

    $stmt->close();
    $conn->close();
    exit;
}
?>
