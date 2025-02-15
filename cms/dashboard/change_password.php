<?php include '../dashboard/include/head.php'; ?>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <i class="bi bi-list"></i>
      <img class="animation__shake" src="../dashboard/admin-assets/image/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
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
        <!-- <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contact</a>
        </li> -->
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


            <li class="nav-item">
              <a href="#" class="nav-link">
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

          
            <li class="nav-item ">
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

            <li class="nav-item menu-open ">
              <a href="#" class="nav-link active">
              <i class="bi bi-person-fill-gear"></i>
                <p>
                  Admin settings
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item ">
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
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Admin Setting</a></li>
                            <li class="breadcrumb-item active">Change Password</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
 

  <div class="container mt-5 place-content-center">
    <div class="card mx-auto" style="max-width: 400px;">
      <div class="card-header text-center">
        <h5>Change Password</h5>
      </div>
      <div class="card-body">
        <p class="small text-muted text-center">
          You are only one step away from your new password, recover your password now.
        </p>
        <form action="change_ps_action.php" method="POST">
        <!-- Password Field -->
        <div class="mb-3">
          <label for="newPassword" class="form-label">New Password</label>
          <div class="input-group">
            <input type="password" class="form-control" id="newPassword" name="newPassword" placeholder="Enter new password" required>
            <button class="btn btn-outline-secondary toggle-password" type="button" data-target="#newPassword" id="eyeicon" >
              <i class="bi bi-eye" ></i>
            </button>
          </div>
        </div>
        <!-- Confirm Password Field -->
        <div class="mb-3">
          <label for="confirmPassword" class="form-label">Confirm Password</label>
          <div class="input-group">
            <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Confirm new password" required>
            <button class="btn btn-outline-secondary toggle-password" type="button" data-target="#confirmPassword" id="eyeiconn">
              <i class="bi bi-eye" ></i>
            </button>
          </div>
        </div>
        <!-- Save Button -->
        <div class="d-flex justify-content-center">
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
        </form>
      </div>
    </div>
  </div>



    <?php include '../dashboard/include/script.php'; ?>
</body>

<script>

  document.querySelector("form").addEventListener("submit", function (e) {
    const newPassword = document.getElementById("newPassword").value;
    const confirmPassword = document.getElementById("confirmPassword").value;

    if (newPassword !== confirmPassword) {
      e.preventDefault(); // Prevent form submission
      alert("Passwords do not match!");
      return false;
    }

    if (newPassword.length < 6) {
      e.preventDefault(); // Prevent form submission
      alert("Password should be at least 6 characters long!");
      return false;
    }
  });

    // for new password
   let eyeicon = document.getElementById("eyeicon");
   let password = document.getElementById("newPassword"); 

  eyeicon.onclick = function () {
    if (password.type === "password") {
      password.type = "text";
    } else {
      password.type = "password";
    }
  };


  // for confirm password
  let eyeiconn = document.getElementById("eyeiconn");
  let Password = document.getElementById("confirmPassword"); 

  eyeiconn.onclick = function () {
    if (Password.type === "password") {
      Password.type = "text";
    } else {
      Password.type = "password";
    }
  };

</script>