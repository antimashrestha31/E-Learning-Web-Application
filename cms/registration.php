<?php
// Include database connection
include('includes/db.php');

// Initialize variables
$message = "";
$messageType = ""; // Track message type: 'success' or 'error'

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data    
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if email already exists
    $checkEmailQuery = "SELECT * FROM admin_tb WHERE email = ?";
    $stmtCheckEmail = $conn->prepare($checkEmailQuery);
    $stmtCheckEmail->bind_param("s", $email);
    $stmtCheckEmail->execute();
    $stmtCheckEmail->store_result();

    if ($stmtCheckEmail->num_rows > 0) {
        // Email already exists, display error message
        $message = "Email already registered. Please use a different email.";
        $messageType = "error";
    } else {
        // Hash the password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Prepare the SQL query to insert the new user
        $query = "INSERT INTO admin_tb (fullname, email, password) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($query);

        if ($stmt) {
            $stmt->bind_param("sss", $fullname, $email, $hashedPassword);
            if ($stmt->execute()) {
                // Data successfully inserted
                $message = "Registration successful!";
                $messageType = "success";
            } else {
                // Query execution failed
                $message = "Error occurred during registration. Please try again.";
                $messageType = "error";
            }
            // Close the statement
            $stmt->close();
        } else {
            // Statement preparation failed
            $message = "Failed to prepare the SQL statement.";
            $messageType = "error";
        }
    }

    // Close the check email statement
    $stmtCheckEmail->close();
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <div class="flex justify-center items-center min-h-screen">
        <div class="bg-white shadow-md rounded-lg p-8 w-96">
            <h2 class="text-2xl font-semibold text-center mb-6">Register</h2>
            <?php if ($message): ?>
                <p class="text-center <?php echo ($messageType == 'success') ? 'text-green-500' : 'text-red-500'; ?> mb-4">
                    <?php echo $message; ?>
                </p>
            <?php endif; ?>
            <form action="registration.php" method="POST" class="space-y-4">
                <div>
                    <label for="fullname" class="block text-sm font-medium text-gray-700">Full Name</label>
                    <input type="text" id="fullname" name="fullname" required class="mt-1 block w-full border border-gray-300 rounded-md p-2">
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="email" name="email" required class="mt-1 block w-full border border-gray-300 rounded-md p-2">
                </div>
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" id="password" name="password" required class="mt-1 block w-full border border-gray-300 rounded-md p-2">
                </div>
                <button type="submit" class="block w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 rounded-md">Sign Up</button>
            </form>
        </div>
    </div>
</body>
</html>

