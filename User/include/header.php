<header>
    <a href="index.php" class="logo">PUgyancenter</a>
    <nav>
        <ul class="relative flex items-center justify-center">
            <li class="relative list-none"><a href="index.php">Home</a></li>
            <li class="relative list-none">
                <div class="dropdown">
                <a href="#">Course</a>
                <div class="dropdown-content">
                    <a href="BIT_Syllabus.php">BIT</a>
                    <a href="Com_Syllabus.php">BE.Computer</a>
                </div>
                </div>
                
            </li>
            <li class="relative list-none"><a href="about.php">About Us</a></li>
            <li class="relative list-none"><a href="contribute.php">Contribute</a></li>
        </ul>
    </nav>
</header>

<style>

    .dropdown {
    position: relative;
}

.dropdown-content {
    display: none;
    position: absolute;
    border-radius: 4px;
    background-color: #e3f0f2;
    border: 1px solid #ddd;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    border-radius: 4px;
}

.dropdown:hover .dropdown-content {
    display: block;
}

</style>