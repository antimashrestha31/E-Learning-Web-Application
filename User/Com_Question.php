<?php include 'include/head.php'; ?>
<?php include 'include/header.php'; ?>
<?php
include './include/B_com_db_connection.php';

// Query to fetch all data grouped by semester
$query = "SELECT semester, subject_name, file_path FROM be_com_question ORDER BY semester, subject_name";
$result = $conn->query($query);

if (!$result) {
    die("Error fetching data: " . $conn->error);
}

// Group data by semester
$semesterData = [];
while ($row = $result->fetch_assoc()) {
    $semester = $row['semester'];
    if (!isset($semesterData[$semester])) {
        $semesterData[$semester] = [];
    }
    $semesterData[$semester][] = $row;
}
?>

<main class="pages">
<section class="py-4 bg-light">
    <div class="container-md">

        <div class="row g-5 justify-content-around align-items-center">
            <!-- Course Title -->
            <div class="col-12">
                <h1 class="text-center text-secondary fw-semibold" style="font-size: 3rem; line-height: 1.2;">
                Bachelor in Computer Engineering
                </h1>
            </div>

            <!-- Image with Shadow and Animation -->
            <div class="col-12 col-lg-5 text-center">
                <img 
                    src="Assets/image/BIT.jpg" 
                    class="img-fluid rounded shadow Courseanimate-image" 
                    alt="Bachelor in IT" 
                    style="box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);"
                >
            </div>

            <!-- Accordion Section -->
            <div class="col-12 col-lg-6">
                <h2 class="text-justify leading-6">The Bachelor of Information Technology (BIT) program at Purbanchal University is a four-year undergraduate degree aimed at equipping students with a strong foundation in IT, computing, and modern technology. The curriculum balances theoretical knowledge with practical skills, covering core topics like programming, database systems, networking, web development, software engineering, and cybersecurity. Advanced topics include data science, artificial intelligence, mobile application development, and cloud computing.</h2>
                <div>
                <ol class="list-group list-group-numbered">
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Syllabus</div>
      Explore the detailed curriculum, course structures, and modules covered in the Bachelor in IT program.
    </div>
    
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Old Question</div>
      Access past exam papers to familiarize yourself with the type of questions asked in previous years.
    </div>
  
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Note</div>
      Access a repository of lecture notes, reference materials, and guides curated to support your learning journey.
    </div>

  </li>
</ol>
                </div>
            </div>
        </div>
    </div>

    <section class="p-5 bg-light">
    

    <!-- 8 Semesters Section -->
<div class="container mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
        
    <!-- Semester 1 -->
    <div class="semester-card p-4 border-4 border-[#0f3845] rounded-lg bg-white hover:bg-white transform transition-all max-w-xs mx-auto">
        <div class="text-center mb-4">
        <i class="bi bi-calendar-week text-3xl text-[#0f3845]"></i>
        </div>
        <h3 class="text-center text-lg font-semibold text-[#0f3845] mb-2">Semester 1</h3>
        <p class="text-center text-[#0f3845] text-sm">Fundamentals of IT, Technical COmmunication, society, etc</p>
    </div>




    <!-- Semester 2 -->
    <div class="semester-card p-4 border-4 border-[#0f3845] rounded-lg bg-white hover:bg-white transform transition-all max-w-xs mx-auto">
        <div class="text-center mb-4">
        <i class="bi bi-calendar-week text-3xl text-[#0f3845]"></i>
        </div>
        <h3 class="text-center text-lg font-semibold text-[#0f3845] mb-2">Semester 2</h3>
        <p class="text-center text-[#0f3845] text-sm">Digital Logic, Discrete Structure, Mathematics-|| etc.</p>
    </div>

    <!-- Semester 3 -->
    <div class="semester-card p-4 border-4 border-[#0f3845] rounded-lg bg-white hover:bg-white transform transition-all max-w-xs mx-auto">
        <div class="text-center mb-4">
        <i class="bi bi-calendar-week text-3xl text-[#0f3845]"></i>
        </div>
        <h3 class="text-center text-lg font-semibold text-[#0f3845] mb-2">Semester 3</h3>
        <p class="text-center text-[#0f3845] text-sm">Numerical Methods, Microcontroller, DSA, etc.</p>
    </div>

    <!-- Semester 4 -->
    <div class="semester-card p-4 border-4 border-[#0f3845] rounded-lg bg-white hover:bg-white transform transition-all max-w-xs mx-auto">
        <div class="text-center mb-4">
        <i class="bi bi-calendar-week text-3xl text-[#0f3845]"></i>
        </div>
        <h3 class="text-center text-lg font-semibold text-[#0f3845] mb-2">Semester 4</h3>
        <p class="text-center text-[#0f3845] text-sm">Probability and Statistics, Operating System, Programming in JAVA, etc.</p>
    </div>

    <!-- Semester 5 -->
    <div class="semester-card p-4 border-4 border-[#0f3845] rounded-lg bg-white hover:bg-white transform transition-all max-w-xs mx-auto">
        <div class="text-center mb-4">
        <i class="bi bi-calendar-week text-3xl text-[#0f3845]"></i>
        </div>
        <h3 class="text-center text-lg font-semibold text-[#0f3845] mb-2">Semester 5</h3>
        <p class="text-center text-[#0f3845] text-sm">Research Methodology, Computer Graphics, Web Technology, etc.</p>
    </div>

    <!-- Semester 6 -->
    <div class="semester-card p-4 border-4 border-[#0f3845] rounded-lg bg-white hover:bg-white transform transition-all max-w-xs mx-auto">
        <div class="text-center mb-4">
        <i class="bi bi-calendar-week text-3xl text-[#0f3845]"></i>
        </div>
        <h3 class="text-center text-lg font-semibold text-[#0f3845] mb-2">Semester 6</h3>
        <p class="text-center text-[#0f3845] text-sm">Artificial Intelligence, Data Mining, Software Engineering, etc.</p>
    </div>

    <!-- Semester 7 -->
    <div class="semester-card p-4 border-4 border-[#0f3845] rounded-lg bg-white hover:bg-white transform transition-all max-w-xs mx-auto">
        <div class="text-center mb-4">
        <i class="bi bi-calendar-week text-3xl text-[#0f3845]"></i>
        </div>
        <h3 class="text-center text-lg font-semibold text-[#0f3845] mb-2">Semester 7</h3>
        <p class="text-center text-[#0f3845] text-sm">Network Programming, Digital Governance, etc.</p>
    </div>

    <!-- Semester 8 -->
    <div class="semester-card p-4 border-4 border-[#0f3845] rounded-lg bg-white hover:bg-white transform transition-all max-w-xs mx-auto">
        <div class="text-center mb-4">
        <i class="bi bi-calendar-week text-3xl text-[#0f3845]"></i>
        </div>
        <h3 class="text-center text-lg font-semibold text-[#0f3845] mb-2">Semester 8</h3>
        <p class="text-center text-[#0f3845] text-sm">Principles of Managements, DIstributed and Cloud Computing, etc.</p>
    </div>
</div>

</section>

<section>
    <!-- Button Group (Syllabus, Old Questions, Notes) -->
    <div class="flex justify-center space-x-6 gap-24 mb-8" id="question-button">
        <!-- Syllabus Button -->
         
         <button 
            class="btn btn-lg btn-outline-primary px-6 py-3 rounded-full transition-transform duration-300 ease-in-out transform hover:scale-110 hover:shadow-xl"
            onclick="redirectTosyllabus()" 
            >
            <i class="bi bi-journal-bookmark-fill mr-2"></i> Syllabus
        </button>
         
        <script>
        function redirectTosyllabus(){
            window.location.href='Com_Syllabus.php#syllabus-button'
        }
    </script>

        <!-- Old Questions Button -->
         
         <button  
        class="btn btn-lg btn-outline-warning px-6 py-3 rounded-full transition-transform duration-300 ease-in-out transform hover:scale-110 hover:shadow-xl active" 
        >
        <i class="bi bi-patch-question"></i> Old Questions
    </button>
         
        

        <!-- Notes Button -->
         
        <button 
        onclick="redirectTonotes()"
            class="btn btn-lg btn-outline-success px-6 py-3 rounded-full transition-transform duration-300 ease-in-out transform hover:scale-110 hover:shadow-xl" 
            >
            <i class="bi bi-file-earmark-text mr-2"></i> Notes
        </button>

        <script>
            function redirectTonotes(){
                window.location.href='Com_Notes.php#notes-button'
            }
        </script>
        
    </div>

    <!-- Border & Shadow Line after Button Group -->
    <hr style="border: 1px solid rgba(0, 0, 0, 0.5); width: 80%; margin: 24px auto;"><br>
    <!-- <hr class="border-t-2 border-gray-400 mb-6"> -->

    <!-- question Cards Section in Tabular Layout -->
<section>
    <div class="container flex flex-wrap gap-6 items-center justify-center">
        <?php foreach ($semesterData as $semester => $subjects): ?>
            <!-- Semester Div -->
            <div>
                <div class="semester-card block items-center justify-center p-3 border-4 border-[#0f3845] rounded-lg bg-white hover:bg-white transform transition-all mb-2.5">
                    <h3 class="text-center text-lg font-semibold text-[#0f3845]"><?php echo htmlspecialchars($semester); ?></h3>
                </div>

                <!-- Cards Container -->
                <div>
                    <div class="card" style="width: 25rem;">
                        <ul class="list-group list-group-flush">
                            <?php foreach ($subjects as $subject): ?>
                                <li class="list-group-item flex justify-between items-center">
                                    <!-- Subject Name -->
                                    <span><?php echo htmlspecialchars($subject['subject_name']); ?></span>
                                    
                                    <!-- View Button -->
                                    <a href="<?php echo htmlspecialchars('/php/project-php/uploads/' . basename($subject['file_path'])); ?>" 
                                       class="btn btn-primary btn-sm" target="_blank">View</a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>


</section>

</main>
<?php include 'include/footer.php'; ?>
<?php include 'include/script.php'; ?>

<!-- Additional CSS -->
<style>
    /* Animation for the image */
    .Courseanimate-image {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .Courseanimate-image:hover {
        transform: scale(1.05);
        box-shadow: 0 12px 25px rgba(0, 0, 0, 0.3);
    }

    .semester-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }
</style>
