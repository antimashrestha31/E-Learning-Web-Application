<?php include './include/Bit_db_connection.php'; ?>
<?php include '../dashboard/include/head.php'; ?>
<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch the record based on ID
    $query = "SELECT * FROM syllabus WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('i', $id); // 'i' for integer type
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
    } else {
        header("Location: bit_syllabus_view.php?status=error&message=" . urlencode("Record not found."));
        exit;
    }
} else {
    header("Location: bit_syllabus_view.php?status=error&message=" . urlencode("Invalid request."));
    exit;
}
?>

<?php
include './include/Bit_db_connection.php';
// Handle form submission
if (isset($_POST['update'])) {
    $id = $_POST['id']; // Get the ID from the hidden input
    $semester = $_POST['semester'];
    $subjectName = $_POST['subject_name'];
    $subjectCode = $_POST['subject_code'];
    $creditHour = $_POST['credit_hour'];

    // Update the record based on ID
    $updateQuery = "UPDATE syllabus SET semester = ?, subject_name = ?, subject_code = ?, credit_hour = ? WHERE id = ?";
    $updateStmt = $conn->prepare($updateQuery);
    $updateStmt->bind_param('ssssi', $semester, $subjectName, $subjectCode, $creditHour, $id); // 'i' for ID (integer type)
    
    if (!$updateStmt->execute()) {
        //bit_syllabus_view.php?semester=BIT-Sem6
        echo "Error updating record: " . $conn->error;
    } else {
        $updateQuery = "UPDATE syllabus SET semester = ?, subject_name = ?, subject_code = ?, credit_hour = ? WHERE id = ?";
        header("Location: bit_syllabus_view.php?semester=" . urlencode($semester));
    }

    $updateStmt->close();
    $conn->close();
    exit;
}
?>



<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<!-- Preloader -->
<div class="preloader flex-column justify-content-center align-items-center">
  <i class="bi bi-list"></i>
  <img class="animation__shake" src="../dashboard/admin-assets/image/icon.jpg" alt="AdminLogo" height="60" width="60">
</div>

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="bi bi-list"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="index.php" class="nav-link">Home</a>
    </li>
  </ul>

  <!-- Right navbar links -->
<ul class="navbar-nav ml-auto">

<!-- Logout -->
<li class="nav-item">
<a class="nav-link" href="Logout.php" role="button" title="Logout">
<i class="bi bi-box-arrow-right"></i> Logout
</a>
</li>
</ul>

</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index.php" class="brand-link">
    <img src="../dashboard/admin-assets/image/icon.jpg" alt=" Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">PUgyancenter</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="../dashboard/admin-assets/image/profile.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Antima Shrestha</a>
      </div>
    </div>

    <!-- SidebarSearch Form -->

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="index.php" class="nav-link">
          <i class="bi bi-house-add"></i>
            <p>
              Dashboard
              <!-- <i class="right fas fa-angle-left"></i> -->
            </p>
          </a>
        </li>


        <li class="nav-item menu-open">
          <a href="#" class="nav-link active">
          <i class="bi bi-card-text"></i>
            <p>
              BIT Content 
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="BIT_Syllabus.php" class="nav-link">
              <i class="bi bi-file-earmark-code-fill"></i>
                <p>Syllabus </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="BIT_Question.php" class="nav-link">
              <i class="bi bi-file-earmark-code-fill"></i>
                <p>Question</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="BIT_Note.php" class="nav-link">
              <i class="bi bi-file-earmark-code-fill"></i>
                <p>Note</p>
              </a>
            </li>
          </ul>
        </li>


        <li class="nav-item">
          <a href="#" class="nav-link">
          <i class="bi bi-card-text"></i>
            <p>
              BE.Computer Content 
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="Com_Syllabus.php" class="nav-link">
              <i class="bi bi-file-earmark-code-fill"></i>
                <p>Syllabus </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="Com_Question.php" class="nav-link">
              <i class="bi bi-file-earmark-code-fill"></i>
                <p>Question</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="Com_Note.php" class="nav-link">
              <i class="bi bi-file-earmark-code-fill"></i>
                <p>Note</p>
              </a>
            </li>
          </ul>
        </li>
      
        <li class="nav-item">
          <a href="#" class="nav-link">
          <i class="bi bi-file-bar-graph"></i>
            <p>
              User Interactions
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="feedback.php" class="nav-link">
              <i class="bi bi-chat-left-heart"></i>
              <p>User Feedback</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="contribution.php" class="nav-link">
              <i class="bi bi-person-raised-hand"></i>
              <p>User contribution</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link">
          <i class="bi bi-person-fill-gear"></i>
            <p>
              Admin settings
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="change_password.php" class="nav-link">
              <i class="bi bi-person-fill-lock"></i>
                <p>change password</p>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>

    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
</div>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div>
      <a href="bit_syllabus_view.php?semester=<?php echo urlencode($row['semester']); ?>" class="text-primary text-decoration-underline">Go Back</a>
      </div>
    </section>

    <section class="content">
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center ">
            <div class="col-md-6">
                <div class="card shadow-lg">
                    <div class="card-body p-5">
                        <h3 class="text-center mb-4">Update Subject Details</h3>
                        <form action="" method="POST">
                            <!-- Hidden input to pass the ID -->
                            <input type="hidden" name="id" value="<?php echo htmlspecialchars($row['id']); ?>">

                            <div class="form-group mb-3">
                                <label for="semester">Semester:</label>
                                <input type="text" id="semester" name="semester" class="form-control"
                                    value="<?php echo htmlspecialchars($row['semester']); ?>" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="subject_name">Subject Name:</label>
                                <input type="text" id="subject_name" name="subject_name" class="form-control"
                                    value="<?php echo htmlspecialchars($row['subject_name']); ?>" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="subject_code">Subject Code:</label>
                                <input type="text" id="subject_code" name="subject_code" class="form-control"
                                    value="<?php echo htmlspecialchars($row['subject_code']); ?>" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="credit_hour">Credit Hour:</label>
                                <input type="text" id="credit_hour" name="credit_hour" class="form-control"
                                    value="<?php echo htmlspecialchars($row['credit_hour']); ?>" required>
                            </div>

                            <div class="text-center">
                                <button type="submit" name="update" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


</div>
    
    
</body>


<?php
$stmt->close();
$conn->close();
?>


<?php include '../dashboard/include/script.php'; ?>