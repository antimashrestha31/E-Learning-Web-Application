<?php include '../dashboard/include/head.php'; ?>
<?php
include './include/Bit_db_connection.php';
include './include/toastify_message.php';
// Check if the semester is passed in the link
if (isset($_GET['semester'])) { 
    $semester = $_GET['semester'];

    // Query to fetch data for the given semester
    $query = "SELECT * FROM bit_note WHERE semester = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('s', $semester);
    $stmt->execute();
    $result = $stmt->get_result();
} else {
    header("Location: error_page.php?message=" . urlencode("Semester not specified."));
    exit;
}
?>
<script>
  function updateHiddenField(input, hiddenFieldId) {
    document.getElementById(hiddenFieldId).value = input.value;
}
</script>

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
    <!-- /.content-wrapper -->

    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div>
      <a href="BIT_Question.php" class="text-primary text-decoration-underline">Go Back</a>

      </div>
      <!-- /.container-fluid -->
    </section>

    <section>
      <div class="d-table w-100" style="height: 150px;">
        <div class="d-table-cell align-middle text-center">
          <h1 class="font-bold text-gray-800">Manage BIT Old Question Content</h1>
        </div>
      </div>
    </section>

    <!-- Main content -->
    <section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-10 mx-auto">
        <div class="card">
          <div class="card-body">
            <div class="table-responsive"> <!-- Added table-responsive class -->
              <table class="table table-bordered w-100 text-center">
                <thead class="bg-gray-200">
                  <tr>
                  <th style="width: 10%">Semester</th>
                    <th style="width: 25%">Subject Name</th>
                    <th style="width: 45%">File Path</th>
                    <th style="width: 10%">Action</th>
                    <th style="width: 10%">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php while ($row = $result->fetch_assoc()): ?>
<tr>
    <!-- Semester -->
    <td>
        <input type="text" name="semester_visible" 
               class="px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" 
               value="<?php echo htmlspecialchars($row['semester']); ?>" 
               readonly>
    </td>

    <!-- Subject Name -->
    <td>
        <input type="text" name="subject_name_visible" 
               class="px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" 
               value="<?php echo htmlspecialchars($row['subject_name']); ?>" 
               required
               oninput="updateHiddenField(this, 'subject_name_hidden_<?php echo $row['id']; ?>')">
    </td>

    <!-- File Path -->
    <td>
        <form action="BIT_note_updated.php" method="POST" enctype="multipart/form-data">
            <input type="file" class="form-control form-control-lg" id="documentFile_<?php echo $row['id']; ?>" 
                   name="documentFile">
            <a href="<?php echo htmlspecialchars('/php/project-php/uploads/' . basename($row['file_path'])); ?>" 
               target="_blank">
                <small>Current File: <?php echo htmlspecialchars($row['file_path']); ?></small>
            </a>
    </td>

    <!-- Update Button -->
    <td>
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <input type="hidden" id="subject_name_hidden_<?php echo $row['id']; ?>" 
               name="subject_name" 
               value="<?php echo htmlspecialchars($row['subject_name']); ?>">
        <input type="hidden" name="semester" value="<?php echo $row['semester']; ?>">
        <input type="hidden" name="old_file" value="<?php echo $row['file_path']; ?>">
        <button type="submit" class="btn btn-success">Update</button>
        </form>
    </td>

    <!-- Delete Button -->
<td>
    <form action="BIT_delete_note.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <input type="hidden" name="semester" value="<?php echo htmlspecialchars($row['semester']); ?>">
    <button type="submit" class="btn btn-danger" 
            onclick="return confirm('Are you sure you want to delete this record?');">
        Delete
    </button>
</form>
</td>
</tr>

                    <?php endwhile; ?>
                </tbody>
              </table>
            </div>
          </div>


        </div>
      </div>
    </div>
  </div>
  
</section>
</div>

    <?php include '../dashboard/include/script.php'; ?>
</body> <?php
include './include/Bit_db_connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $semester = $_POST['semester'];
    $subject_name = $_POST['subject_name'];
    $old_file = $_POST['old_file'] ?? '';

    // Handle file upload
    $file_path = $old_file; // Default to old file path
    if (isset($_FILES['documentFile']) && $_FILES['documentFile']['error'] === UPLOAD_ERR_OK) {
        $file_path = '../../uploads/' . basename($_FILES['documentFile']['name']);
        move_uploaded_file($_FILES['documentFile']['tmp_name'], $file_path);
    }

    // Debugging: Log inputs
    echo("ID: $id, Semester: $semester, Subject: $subject_name, File Path: $file_path");

    // Update query
    $query = "UPDATE bit_question SET semester = ?, subject_name = ?, file_path = ? WHERE id = ?";
    $stmt = $conn->prepare($query);

    if (!$stmt) {
        die("Error preparing statement: " . $conn->error);
    }

    $stmt->bind_param('sssi', $semester, $subject_name, $file_path, $id);

    if ($stmt->execute()) {
        error_log("Record updated successfully.");
        // header("Location: BIT_Question_view.php?semester=" . urlencode($semester) . "&status=success&message=" . urlencode("Record updated successfully."));
    } else {
        die("Error executing statement: " . $stmt->error);
    }

    $stmt->close();
    $conn->close();
    exit;
}
?>