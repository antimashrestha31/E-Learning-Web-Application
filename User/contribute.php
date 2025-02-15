<?php include 'include/head.php'; ?>
<?php include 'include/header.php'; ?>

<script>
    // Extract query parameters
    const urlParams = new URLSearchParams(window.location.search);
    const status = urlParams.get('status');
    const message = urlParams.get('message');

    // If status and message exist, show a Toastify notification
    if (status && message) {
        Toastify({
            text: decodeURIComponent(message), // Decode URL-encoded message
            duration: 10000, // Show for 7 seconds
            gravity: "top", // Show at the top of the page
            position: "right", // Align on the right side
            style: {
                background: status === 'success' ? "green" : "red", // Green for success, red for error
                color: "white",
                fontSize: "16px",
            },
        }).showToast();

        // Remove query params from URL after displaying the message
        const url = new URL(window.location.href);
        url.searchParams.delete("status");
        url.searchParams.delete("message");
        window.history.replaceState({}, document.title, url.toString());
    }
</script>


<main class="pages">

      <div class="banner-card">
        <img src="../User/Assets/image/contribute.jpeg" alt="unable to support">
        <div class="banner-text">
          <h4>Alone we can do little, Together we can do so much!</h4>
          <h3>"Become a contributor"</h3>
          <button type="button" class="btn btn-outline-secondary ml-3">
            <a href="#Contribute-form">contribute</a>
          </button>
        </div>
      </div>
      
      
      <section class="alert-section">

      <!-- alerting section -->
        <div class="Alert-div">
          <h2>By sharing your resources, you’re helping hundreds of students succeed. Every note, tip, or question paper counts towards creating a better learning environment.</h2>
          <div class="alert alert-primary" role="alert">
            Before your contribution - check this out!
          </div>
        </div>

        <!-- Submission requirements -->

        <div class="submission">
          <div class="w-6/12 pt-10">
            <div class="Asset-info">
              <div>
                <img src="../User/Assets/image/aset.png" alt="image not supported" class="circular-image">
              </div>
              <div>
                <h2><b>Assets</b></h2>
              <p>Your assets must be related to our featured course and must be helpful.</p>
              </div>
            </div>
  
            <div class="Asset-info">
              <div>
                <img src="../User/Assets/image/image.png" alt="image not supported" class="circular-image">
              </div>
              <div>
                <h2><b>Image</b></h2>
              <p>You are not allowed to share images as we only accept pdfs for now.</p>
              </div>
            </div>
  
            <div class="Asset-info">
              <div>
                <img src="../User/Assets/image/pdf (1).png" alt="image not supported" class="circular-image">
              </div>
              <div>
                <h2><b>PDF</b></h2>
              <p>You are allowed to share PDF files as your contribution which will be useful to us.</p>
              </div>
            </div>
  
            <!-- <div class="Asset-info">
              <div>
                <img src="../User/Assets/image/mail (2).png" alt="image not supported" class="circular-image">
              </div>
              <div>
                <h2><b>Email</b></h2>
              <p>You will receive an email with your contributed assets links after confirmation.</p>
              </div>
            </div> -->
          </div>
          
          <!-- feedback mechanism -->
          <div class="w-6/12 feedback pl-6">
            <h2><b>Leave a feedback!</b></h2>
            <p class="justify-normal feedback-text">"Your feedback is invaluable to us. It helps us continually improve our system, making it even more useful for Purbanchal University students like you. Thank you for supporting a platform made by students, for students!"</p>

            <form action="save_feedback.php" method="POST">
    <div class="col-md-6">
        <label for="Name" class="form-label">Name</label>
        <input type="text" class="form-control" id="firstName" name="name" required>
    </div>
    <div class="col-md-6">
        <label for="Comment" class="form-label feedback-range">Comment</label>
        <input type="text" class="form-control" id="Comment" name="comment" required>
    </div>
    <label for="customRange1" class="form-label feedback-range">How much satisfied are you?</label>
    <input type="range" class="form-range" min="2" max="10" id="customRange1" name="satisfaction" onchange="fetch()">
    <input type="text" id="put" readonly>
    <div class="col-md-12 text-center">
        <button type="submit" class="btn btn-secondary feedback-button">Submit</button>
    </div>
</form>
      
          </div>
      </div>
      <script>
          function fetch(){
            var get =  document.getElementById("customRange1").value;
            document.getElementById("put").value = get;
          }
        </script>

        <!-- file submission form -->

      <div class="contribution-form" id="Contribute-form">
          <h3><b>Contribute Assets</b></h3>
      
          <form action="process_contribution.php" method="POST" enctype="multipart/form-data" class="row g-3 justify-content-center">
              <!-- First Name and Last Name Fields (Inline) -->
              <div class="col-md-6">
                  <label for="firstName" class="form-label">First name</label>
                  <input type="text" class="form-control" id="firstName" name="firstName" required>
              </div>
              <div class="col-md-6">
                  <label for="lastName" class="form-label">Last name</label>
                  <input type="text" class="form-control" id="lastName" name="lastName" required>
              </div>
      
              <!-- Email Address Field (Full Width) -->
              <div class="col-md-6">
                  <label for="emailAddress" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="emailAddress" placeholder="name@example.com" name="emailAddress" required>
              </div>

              <div class="col-md-6">
                <label for="Document type" class="form-label">Document type</label>
                <select id="course-semester" class="form-control" name="course-semester" required>
                  <optgroup label="BIT">
                      <option value="BIT-Sem1">BIT - Semester 1</option>
                      <option value="BIT-Sem2">BIT - Semester 2</option>
                      <option value="BIT-Sem3">BIT - Semester 3</option>
                      <option value="BIT-Sem4">BIT - Semester 4</option>
                      <option value="BIT-Sem5">BIT - Semester 5</option>
                      <option value="BIT-Sem6">BIT - Semester 6</option>
                      <option value="BIT-Sem7">BIT - Semester 7</option>
                      <option value="BIT-Sem8">BIT - Semester 8</option>
                  </optgroup>
                  <optgroup label="BE.Computer">
                      <option value="BE-Sem1">BE.Computer - Semester 1</option>
                      <option value="BE-Sem2">BE.Computer - Semester 2</option>
                      <option value="BE-Sem3">BE.Computer - Semester 3</option>
                      <option value="BE-Sem4">BE.Computer - Semester 4</option>
                      <option value="BE-Sem5">BE.Computer - Semester 5</option>
                      <option value="BE-Sem6">BE.Computer - Semester 6</option>
                      <option value="BE-Sem7">BE.Computer - Semester 7</option>
                      <option value="BE-Sem8">BE.Computer - Semester 8</option>
                  </optgroup>
                </select>
              </div>
              
            
              
              <!-- Title and Description Fields (Inline) -->
              <div class="col-md-6">
                  <label for="documentTitle" class="form-label">Title of the Document</label>
                  <input type="text" class="form-control" id="documentTitle" name="documentTitle" required>
              </div>
              <div class="col-md-6">
                  <label for="documentDescription" class="form-label">Description of the Document</label>
                  <input type="text" class="form-control" id="documentDescription" name="documentDescription" required>
              </div>
      
              <!-- Document Upload Field (Full Width) -->
              <div class="col-md-12">
                  <label for="documentFile" class="form-label">Please upload your document</label>
                  <input class="form-control form-control-lg" id="documentFile" name="documentFile" type="file" required>
              </div>
      
              <!-- Submit Button (Centered) -->
              <div class="col-md-12 text-center">
                  <button class="btn btn-primary" type="submit">Submit</button>
              </div>
          </form>
      </div>
      
    </section>

    </main>

<?php include 'include/footer.php'; ?>
<?php include 'include/script.php'; ?>