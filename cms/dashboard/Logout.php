<?php
session_start();
session_unset();
session_destroy();
?>

<script>
    // Display a message to the user
    alert("You have logged out successfully.");
    // Redirect to the login page after the user clicks "OK"
    window.location.href = "../index.php";
</script>
