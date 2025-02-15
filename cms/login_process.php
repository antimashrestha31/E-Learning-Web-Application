<?php
// Start a secure session
session_start();
// Include database connection
include('includes/db.php');



// Ensure a secure session configuration
ini_set('session.cookie_httponly', 1); // Prevent JavaScript access to cookies
ini_set('session.cookie_secure', 1);  // Ensure cookies are sent over HTTPS
ini_set('session.use_strict_mode', 1); // Use strict mode for sessions

// Function to securely generate session tokens
function regenerateSecureSession() {
    if (session_status() == PHP_SESSION_ACTIVE) {
        session_regenerate_id(true); // Regenerate session ID and delete old one
    }
}

// Check if the form data is set
if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM admin_tb WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Verify the password (assumes passwords are hashed using password_hash())
        if (password_verify($password, $user['password'])) {
            // Regenerate session ID upon successful login
            regenerateSecureSession();

            // Store session variables
            $_SESSION['email'] = $email;
            $_SESSION['admin_id'] = $user['id'];

            // Bind session to IP and user agent
            $_SESSION['ip_address'] = $_SERVER['REMOTE_ADDR'];
            $_SESSION['user_agent'] = $_SERVER['HTTP_USER_AGENT'];

            // Redirect to dashboard
            header("Location: ./dashboard/index.php");
            exit();
        } else {
            // Invalid password
            header("Location: index.php?error=Invalid Credentials");
            exit();
        }
    } else {
        // User not found
        header("Location: index.php?error=Invalid Credentials");
        exit();
    }
} else {
    // Redirect if accessed without POST data
    header("Location: index.php?error=Please fill in the required fields");
    exit();
}
?>
