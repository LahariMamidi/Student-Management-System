<?php
session_start();

if (!isset($_SESSION['rollno'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System(About Page)</title>
    <link rel="stylesheet" href="about_page.css">
    
</head>
<body>
    <a href="#about-top"><button class="fixed-button">Go to Top</button></a>
    <div id="about-top">
        <nav class="nav-container">
            <div class="nav-ele-container">
                <div>
                    <img class="narayana-logo" src="narayana-logo.png" alt="NECN">
                </div>
                <div>
                    <ul class="nav-ele-list">
                        <li ><a class="nav-ele" href="home_page.php">Home</a></li>
                        <li><a class="nav-ele" href="notifi_page.php">Notifications</a></li>
                        <li><a class="nav-ele" href="dashboard_page.php">Dashboard</a></li>
                        <li><a class="nav-ele active" href="about_page.php">About</a></li>
                    </ul>
                </div> 
                <div class="dropdown">
                    <button onclick="toggleDropdown()" class="dropbtn">
                    <img src="profile6.png" style="width:40px; height:40px;margin-top:-10px;"/>
                    </button>
                    <div id="dropdownContent" class="dropdown-content">
                        <a href="index.php">Sign Out</a>
                        <a href="reset_pass.php">Reset Password</a>
                    </div>
                </div>
                <script src="login_page.js"></script>
                <!-- <div>
                    <button class="lg-btn"><a class="login-btn" href="login_page.html">Login</a></button>
                </div> -->
                <div>
                    <img class="narayana-achi" src="narayana-achieve.jpeg" alt="narayana-achievements">
                </div>
            </div>
            
        </nav>
        <div class="about-bg-container">
            <div class="about-container">
                <div>
                    <h1 class="about-head">About the College</h1>
                    <p class="about-desc">Narayana Educational Institutions are one of the best
                         education providers in India from the Pre-primary to professional post 
                         graduation. Narayana Educational Group was established by renowned 
                         educationalist Dr P Narayana, 44 years ago.  Today, the Narayana 
                         Educational Institutions stand tall and proud for setting path breaking 
                         benchmarks in academic excellence. Four decades of experience in 
                         fulfilling the aspirations of India's students has given us conviction 
                         and confidence to aim higher and bigger always. In promoting professional 
                         colleges from this group, Narayana Engineering College Nellore (NECN) 
                         was established in 1998. Now, ours is one of the premier Engineering 
                         Colleges in the self-financing category in Andhra Pradesh. College is
                          locating in Nellore city, which is famous for Paddy crop and is also
                           called city of Education. Institution has well equipped built up area 
                           with impressive infrastructure like state of art Laboratories, class 
                           rooms, tutorial rooms, library, drawing halls, seminar halls etc are 
                           available to provide conducive environment for academic activities.</p>
                </div>
                <img class="about-img1" src="about3.png" alt="narayana">
            </div>
            <div class="department-container">
                <h1 class="about-head">Departments</h1>
                <!-- <div class="department-cards-list">
                    <div class="department card">

                    </div>
                    
                </div> -->
                <div class="card-container">
                    <div class="card">
                        <img src="cse.png" alt="Card Image">
                        <h1 class="card-head">Computer Science and Engineering</h1>
                        <p class="card-desc">CSE in engineering fuels boundless innovation, 
                            turning dreams of tomorrow into the realities of today.</p>
                    </div>
                    <div class="card">
                        <img src="ece.png" alt="Card Image">
                        <h1 class="card-head">Electronics and Communication Engineering</h1>
                        <p class="card-desc">ECE engineers forge connections that transcend 
                            borders, enabling global communication and technological harmony
                        </p>
                    </div>
                    <div class="card">
                        <img src="eee.png" alt="Card Image">
                        <h1 class="card-head">Electrical and Electronics Engineering</h1>
                        <p class="card-desc">EEE sparks the electricity of progress, illuminating 
                            pathways to a brighter, smarter world.</p>
                    </div>
                    <div class="card">
                        <img src="civil.png" alt="Card Image">
                        <h1 class="card-head">Civil Engineering</h1>
                        <p class="card-desc">Civil Engineering constructs the foundations of civilization, 
                            shaping landscapes and building bridges to a sustainable future</p>
                    </div>
                    <div class="card">
                        <img src="mech.png" alt="Card Image">
                        <h1 class="card-head">Mechanical Engineering</h1>
                        <p class="card-desc">Mechanical Engineering fuels the engines of innovation,
                             turning concepts into machines that drive progress and prosperity.</p>
                    </div>
                    <!-- <div class="card">
                        <img src="https://via.placeholder.com/150" alt="Card Image">
                        <p>Card 6 Text</p>
                    </div> -->
                </div>
            </div>
            <!-- <div class="carousel-container">
                <h1 style="margin-bottom: 20px;" class="about-head">Clubs and Events</h1>
                
                <div class="carousel" id="myCarousel">
                  <div class="carousel-inner" id="carouselInner">
                      <div class="carousel-item">
                          <img src="event1.png" alt="Image 1">
                          <div class="carousel-caption">Caption 1</div>
                      </div>
                      <div class="carousel-item">
                          <img src="event2.png" alt="Image 2">
                          <div class="carousel-caption">Caption 2</div>
                      </div>
                      <div class="carousel-item">
                          <img src="event3.png" alt="Image 3">
                          <div class="carousel-caption">Caption 3</div>
                      </div>
                      <div class="carousel-item">
                          <img src="event4.png" alt="Image 4">
                          <div class="carousel-caption">Caption 4</div>
                      </div>
                  </div>
                  <div class="carousel-controls">
                      <button class="control-btn prev-btn" onclick="prevSlide()">Previous</button>
                      <button class="control-btn next-btn" onclick="nextSlide()">Next</button>
                  </div>
              </div>
            </div>    -->
        </div>
    </div>
</body>
</html>