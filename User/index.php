  <?php include 'include/head.php';?>
  <!-- this section is for nav bar -->
  
  <?php include 'include/header.php';?>

    <!-- this section is for background image -->
    <section class="banner">
      <div class="slogan">
        <b>"Ace your PU exams with insightful resources from us!"</b>
      </div>
    </section>

    <!-- this is featured section -->
    <section id="featured-courses" class="featured" placeholder="course">
      <h1 class="text-center p-10 text-4xl font-BOLD">
        <b>OUR FEATURED COURSES</b>
      </h1>
      <!-- this section of code is for cards -->

      <div class="container">

        <div class="card">
          <img src="../User/Assets/image/BIT.jpg" alt="Sample Image 2" class="card-image" />
          <div class="card-content">
            <h2><b>BIT</b></h2>
            <p>
              The Bachelor of Information Technology is an academic program of
              Purbanchal University comprising of core unit and advanced unit.
              The core unit of Bachelor of Information Technology (BIT) is to
              provide students with knowledge and skills in programming, systems
              design an dothers.
            </p>
            <a href="BIT_Syllabus.php">
            <button type="button" class="btn btn-outline-secondary ml-44 mt-4">
              Read more
            </button>
            </a>
          </div>
        </div>

        <div class="card">
          <img
            src="../User/Assets/image/BE.Computer.jpg"
            alt="Sample Image 1"
            class="card-image"
          />
          <div class="card-content">
            <h2><b>BE.Computer</b></h2>
            <p>
              The Bachelor of Computer Engineering (BE Computer) at Purbanchal University focuses on the design and application of computer system with integration of Computer Science and Electronics Engineering.It prepares students to solve real world problems.
            </p>
            <a href="Com_Syllabus.php">
            <button type="button" class="btn btn-outline-secondary ml-44 mt-4">
              Read more
            </button>
            </a>
            
          </div>
        </div>
        
        </div>
      </div>
    </section>

    <!-- this is about us section -->

    <section class="container my-5">
  <div class="row g-4 ml-14">
    <!-- About Us Section -->
    <div class="col-lg-6">
      <div class="contribute-indexdiv">
        <h1 class="text-center text-4xl font-bold mb-4">
          ABOUT US
        </h1>
        <p class="text-justify">
          Welcome to PUgyancenter, a platform by students, for students, dedicated to simplifying your study experience at Purbanchal University. Created by three students from Himalayan Whitehouse International College, PUgyancenter offers a streamlined collection of notes, question papers, and resources across various streams. Dive in, explore, and find everything you need to succeed – all in one place!
          <a href="about.php" class="text-primary text-decoration-underline">Read more</a>
        </p>
      </div>
    </div>

    <!-- Contribute Section -->
    <div class="col-lg-6">
      <div class="contribute-indexdiv">
        <h1 class="text-center text-4xl font-bold mb-4">
          CONTRIBUTE YOUR ASSETS
        </h1>
        <p class="text-justify">
          Help us build a stronger academic community! Share your notes, question papers, and study resources to support students at Purbanchal University. By contributing, you’ll make learning easier for everyone.
        </p>
        <div class="text-center mt-4">
          <button type="button" class="btn btn-success px-4 py-2">
            <a href="contribute.php" class="text-white text-decoration-none">Contribute</a>
          </button>
        </div>
      </div>
    </div>
  </div>
</section>

    
<!-- Footer Section -->

<?php include 'include/footer.php';?>
<?php include 'include/script.php';?>



