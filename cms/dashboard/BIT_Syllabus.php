<?php include '../dashboard/include/head.php'; ?>

<script>
    // Extract query parameters
    const urlParams = new URLSearchParams(window.location.search);
    const status = urlParams.get('status');
    const message = urlParams.get('message');

    // If status and message exist, show a Toastify notification
        if (status=="error") {
            alert(decodeURIComponent(message)); // Decode the URL-encoded message
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
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">BIT Content</a></li>
              <li class="breadcrumb-item active">Syllabus</li>
            </ol>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
    </section>

    <section>
      <div class="d-table w-100" style="height: 150px;">
        <div class="d-table-cell align-middle text-center">
          <h1 class="font-bold text-gray-800">Manage BIT Syllabus</h1>
        </div>
      </div>
    </section>

    <!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-10 mx-auto">
        <div class="card">
          <div class="card-header bg-gray-100">
            <h3 class="card-title font-bold"> <b>BIT Syllabus Form</b></h3>
          </div>
          <!-- /.card-header -->

          <div class="card-body">
            <div class="table-responsive"> <!-- Added table-responsive class -->
              <form action="bit_syllabus_process.php" method="POST" class="row g-3 justify-content-center">
                <div class="col-md-6 mb-3">
    <label for="Document type" class="form-label">Select Semester</label>
    <select id="course-semester" class="form-control" name="course-semester" required>
      <optgroup label="BIT">
        <option value="BIT-Sem1">Semester 1</option>
        <option value="BIT-Sem2">Semester 2</option>
        <option value="BIT-Sem3">Semester 3</option>
        <option value="BIT-Sem4">Semester 4</option>
        <option value="BIT-Sem5">Semester 5</option>
        <option value="BIT-Sem6">Semester 6</option>
        <option value="BIT-Sem7">Semester 7</option>
        <option value="BIT-Sem8">Semester 8</option>
      </optgroup>
    </select>
  </div>

  <div class="col-md-6 mb-3">
    <label for="SubjectName" class="form-label">Subject Name</label>
    <input type="text" class="form-control" id="SubjectName" name="SubjectName" required>
  </div>

  <div class="col-md-6 mb-3">
    <label for="SubjectCode" class="form-label">Subject Code</label>
    <input type="text" class="form-control" id="SubjectCode" name="SubjectCode" required>
  </div>

  <div class="col-md-6 mb-3">
    <label for="CreditHour" class="form-label">Credit Hour</label>
    <input type="text" class="form-control" id="CreditHour" name="CreditHour" required>
  </div>

  <div class="col-md-12 text-center mb-3 ">
    <button class="btn btn-primary" type="submit">Submit</button>
  </div>
</form>
            </div> <!-- End table-responsive -->
          </div>
          <!-- /.card-body -->
        </div>
      </div>
    </div>
  </div>
  
</section>
    
    </div>

    <?php include '../dashboard/include/script.php'; ?>
</body>

