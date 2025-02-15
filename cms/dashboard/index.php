<?php 

function Contribute_Asset()
    {
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "pugyancenter_db";
      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);
      // Check connection
      if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
      }   
      require "connection.php";   
      $sql = "SELECT COUNT(*) AS total FROM contribution_tb ";


      //preparing the statement

      $stm = $conn->prepare($sql);
      
      

      $stm->execute();

      // Getting the result
      $result = $stm->get_result();

      // Fetching the row
      if ($result) {
          $row = $result->fetch_assoc();
          $total = $row['total']; // Access the count
          echo  $total;
      } else {
          echo "Error: ";
      }

      // Closing the statement and connection
      $stm->close();
      $conn->close();

}


function Feedback_Assets()
    {
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "pugyancenter_db";
      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);
      // Check connection
      if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
      }   
      require "connection.php";   
      $sql = "SELECT COUNT(*) AS total FROM feedback_tb ";


      //preparing the statement

      $stm = $conn->prepare($sql);
      
      

      $stm->execute();

      // Getting the result
      $result = $stm->get_result();

      // Fetching the row
      if ($result) {
          $row = $result->fetch_assoc();
          $total = $row['total']; // Access the count
          echo  $total;
      } else {
          echo "Error: ";
      }

      // Closing the statement and connection
      $stm->close();
      $conn->close();

}




include '../dashboard/include/head.php'; ?>

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
w
        <!-- SidebarSearch Form -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="index.php" class="nav-link active">
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


        <!-- Main content -->
<section class="content-wrapper" style="padding: 20px;">
  <div class="container-fluid" style="margin-top: 100px;">
    <!-- Info boxes -->
    <div class="row" style="justify-content: center; gap: 80px;">
      <div>
        <div class="info-box" style="height: 200px; padding: 20px; width: 500px;">
          <span class="info-box-icon bg-info elevation-1" style="font-size: 3rem; width: 180px;"><i class="bi bi-people"></i></span>
          <div class="info-box-content">
            <span class="info-box-text" style="font-size: 1.5rem;">User Contribution</span>
            <span class="info-box-number" style="font-size: 2rem;"><?php Contribute_Asset(); ?></span>
          </div>
        </div>
      </div>

      <div>
        <div class="info-box" style="height: 200px; padding: 20px; width: 500px;">
          <span class="info-box-icon bg-danger elevation-1" style="font-size: 3rem; width: 180px;"><i class="bi bi-emoji-smile"></i></span>
          <div class="info-box-content">
            <span class="info-box-text" style="font-size: 1.25rem;">User Feedback</span>
            <span class="info-box-number" style="font-size: 2rem;"><?php Feedback_Assets(); ?></span>
          </div>
        </div>
      </div>
    </div>

    
  </div>
</section>


    <?php include '../dashboard/include/script.php'; ?>
</body>

