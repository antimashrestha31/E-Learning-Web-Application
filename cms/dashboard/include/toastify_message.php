<?php
// Check if `status` and `message` are set in the URL
if (isset($_GET['status']) && isset($_GET['message'])) {
    $status = htmlspecialchars($_GET['status']);
    $message = htmlspecialchars($_GET['message']);
    echo "<script>
        document.addEventListener('DOMContentLoaded', function () {
            Toastify({
                text: \"$message\",
                duration: 3000,
                close: true,
                gravity: 'top', // Position on the screen: top or bottom
                position: 'right', // Align: left, center, right
                backgroundColor: '" . ($status === "success" ? "#28a745" : "#dc3545") . "',
            }).showToast();
        });
    </script>";
}
?>