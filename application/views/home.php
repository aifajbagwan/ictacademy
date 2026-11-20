<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ICT Academy Pune</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="P A Inamdar Information Communications Technology Academy of Pune (ICTAP) is a not-for-profit organization which focuses on taking knowledge of information and communication technology to the young and talented students from deprived and financial weak backgrounds of our society." name="description">

    <!-- Favicon -->
    <link href="assets/img/favicon.png" rel="icon">


    <link rel="stylesheet" href="assets/lib/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/lib/owlcarousel/owl.theme.default.min.css">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="assets/css/style.css" rel="stylesheet">
    <style>
                .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 10000;
        }
  
        /* The popup content */
        .popup {
          /* background-color: #0; */
          /* padding-top: 1px; */
          margin-top: 50px;
          border-radius: 5px;
          max-width: 500px;
          text-align: center;
          position: relative;
      }
  
          /* Close button */
          .close-btn {
            position: absolute;
            top: -20px;
            right: 49px;
            font-size: 40px;
            cursor: pointer;
            color: #333;
        }
  
        /* Style for the image */
        .popup img {
            max-width: 80%;
            height: auto;
        }
  
        @media screen and (max-width: 500px) {
          .overlay {
              background-color: rgba(0, 0, 0, 1);
          }
      }
    </style>
</head>

<body>
    <!-- Spinner Start -->
    <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div> -->
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <!-- <div class="container-fluid bg-light p-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>2390-B, K.B, Hidayatulla Rd, Azam Campus, Pune Cantonment, Pune, Maharashtra 411001</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>Mon - Fri : 09.00 AM - 09.00 PM</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small>+910000000000</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn btn-sm-square rounded-circle bg-white text-primary me-1" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square rounded-circle bg-white text-primary me-1" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-sm-square rounded-circle bg-white text-primary me-1" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-sm-square rounded-circle bg-white text-primary me-0" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 wow fadeIn" data-wow-delay="0.1s">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-1">
        <img  src="assets/img/log.png" style="width: 290px; height: 80px;">

        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="home" class="nav-item nav-link active" style="margin-left: -2.7%;">Home</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">About Us</a>
                    <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                        <a href="about" class="dropdown-item">About Organisation</a>
                        <a href="President" class="dropdown-item">President Message</a>
                        <a href="vision-mission" class="dropdown-item">Vision & Mission</a>
                        <a href="our-team" class="dropdown-item">Our Team</a>
                        <a href="our-role" class="dropdown-item">Our Role</a>
                        <a href="activity-report" class="dropdown-item">Activity Report</a>
                        <a href="pai" class="dropdown-item">P.A.Inamdar Computer Centers Summery</a>
                        <a href="paia" class="dropdown-item">PAI Academy of Spoken English Teachers</a>
                        <a href="ss" class="dropdown-item">PAI ICT Academy, Student Strength</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">PAI ROBO CHAMP</a>
                    <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                        <a href="aboutpairobochamp" class="dropdown-item">About PAI ROBO CHAMP</a>
                        <a href="rr" class="dropdown-item">Rules & Regulations</a>
                        <a href="https://www.ictacademypune.com/pairobochamps/" class="dropdown-item">Registration Form</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Our Centers</a>
                    <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                        <a href="gop" class="dropdown-item">Glimpses of P.A.Inamdar Computer Centers</a>
                    </div>
                </div>
                <!--<div class="nav-item dropdown">-->
                <!--    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Schemes</a>-->
                <!--    <div class="dropdown-menu rounded-0 rounded-bottom m-0">-->
                <!--        <a href="icts" class="dropdown-item">ICT Schemes</a>-->
                <!--        <a href="el" class="dropdown-item">Eligiblity </a>-->
                <!--        <a href="ms" class="dropdown-item">Membership</a>-->
                <!--        <a href="cl" class="dropdown-item">Computer Loan</a>-->
                <!--    </div>-->
                <!--</div>-->
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Courses</a>
                    <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                        <a href="gft" class="dropdown-item">Google fast trackSyllabus</a>
                        <a href="sfe" class="dropdown-item">Syllabus For E seva level 2</a>
                        <a href="sfe2" class="dropdown-item">Syllabus for E seva Level 3</a>
                        <a href="hs" class="dropdown-item">Hardware Syllabus</a>
                        <a href="rsl" class="dropdown-item">RoboticsSyllabusLevel1</a>
                        <a href="rsl2" class="dropdown-item">RoboticsSyllabusLevel2</a>
                    </div>
                </div>
                <a href="gallery" class="nav-item nav-link active">Gallery</a>
                <a href="contact" class="nav-item nav-link">Contact Us</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Workshop</a>
                    <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                        <a href="cs" class="dropdown-item">Cyber Security</a>
                        <a href="hardware" class="dropdown-item">Hardware</a>
                    </div>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->
    
    
    
    
     <!-- popup -->
<!--     <div class="overlay" id="overlay"> -->
    <!-- onclick="window.location.href='/paiias/login.php';" -->
<!--    <div class="popup">-->
<!--        <span class="close-btn" onclick="closePopup()">&times;</span>-->
<!--        <img src="assets/img/popup.jpg" alt="Popup Image">-->
<!--    </div>-->
<!--</div>-->




<script>
    document.addEventListener("DOMContentLoaded", function() {
    // Show the overlay and popup
    document.getElementById('overlay').style.display = 'flex';
});

// Function to close the popup
function closePopup() {
    document.getElementById('overlay').style.display = 'none';
} 
</script>

<!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
<!--    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">-->
<!--    </script>-->
<!--    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">-->
<!--    </script>-->

<!-- close popup -->
    <!-- Header Start -->
    <div class="container-fluid header bg-primary p-0 mb-5">
        <div class="row g-0 align-items-center flex-column-reverse flex-lg-row">
            <div class="col-lg-6 p-5 wow fadeIn" data-wow-delay="0.1s">
                <h1 class="display-4 text-white mb-5">PAI ICT Academy <br> <p style="font-size: 28px;">Azam Campus,Pune</p></h1>
                <p style="font-size: 12px;">Azam Campus,Pune"</p></h1>
                <div class="row g-4">
                    <div class="col-sm-4">
                        <div class="border-start border-light ps-4">
                            <h2 class="text-white mb-1" data-toggle="counter-up">123</h2>
                            <p class="text-light mb-0">Expert Teachers</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="border-start border-light ps-4">
                            <h2 class="text-white mb-1" data-toggle="counter-up">1234</h2>
                            <p class="text-light mb-0">Available Stuff</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="border-start border-light ps-4">
                            <h2 class="text-white mb-1" data-toggle="counter-up">12345</h2>
                            <p class="text-light mb-0">Total Visitors</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
        <div class="owl-carousel header-carousel">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="assets/img/para29.jpg" alt="Hardware specialist" style="width: 800px; height: 500px;">
                <div class="owl-carousel-text">
                    <!-- <h1 class="display-1 text-white mb-0">IT Olympiad</h1> -->
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="assets/img/para24.jpg" alt="System upgrade specialist" style="width: 800px; height: 500px;">
                <div class="owl-carousel-text">
                    <!-- <h5 class="display-1 text-white mb-0">PAI ROBO CHAMP</h5> -->
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="assets/img/para26.jpg" alt="Tech support specialist" style="width: 800px; height: 500px;">
                <div class="owl-carousel-text">
                    <!-- <h1 class="display-1 text-white mb-0">Tech support specialist</h1> -->
                </div>
            </div>
        </div>
    </div>
</div>
</div>
    <!-- Header End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex flex-column">
                        <img class="img-fluid rounded w-75 align-self-end" src="assets/img/para4.jpg" alt="">
                        <img class="img-fluid rounded w-75 align-self-end" src="assets/img/para3.png" alt="" style="margin-right: 25%; margin-top: 1%; height: 280px">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <!-- <p class="d-inline-block border rounded-pill py-1 px-4">About Us</p> -->
                    <h1 class="mb-4" style="color: #800080;">PAI ICT Academy Pune</h1>
                    <p style="font-size: 18px; color: #333;"> 
                    <b>P A Inamdar Information Communications Technology Academy of Pune (ICTAP)</b> is a not-for-profit organization which focuses on taking knowledge of information and communication technology to the young and talented students from deprived and financial weak backgrounds of our society.
    </p>
    <br>
    <p class="mb-4" style="font-size: 18px; color: #333;">
    <b>P A Inamdar ICT AP</b> endeavours to expose students to the world of digital computing and internet to make them employable in the ICT industry with skills in designing, development, testing and the maintenance sectors of ICT.
    </p>
    <br>
    <p style="font-size: 18px; color: #333;">
    <b>P A Inamdar ICT AP</b> supports & empowers various government and needy private schools by setting up free computer labs at their schools, conducting trainings for computer instructors and providing free syllabus to empower children to stand on their feet and join the mainstream.
    </p></br>
                    <p style="font-size: 18px; color: #333;"><i class="far fa-check-circle text-primary me-3"></i>Empowering Students</p>
                    <p style="font-size: 18px; color: #333;"><i class="far fa-check-circle text-primary me-3"></i>Support for Schools</p>
                    <p style="font-size: 18px; color: #333;"><i class="far fa-check-circle text-primary me-3"></i>Skill Development</p>
                    <a class="btn btn-primary rounded-pill py-3 px-5 mt-3" href="about">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <!-- <p class="d-inline-block border rounded-pill py-1 px-4">Courses</p> -->
                <h1 style="color: #800080;">Training conducted</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                            <i class="fa fa-desktop text-primary fs-4"></i>
                        </div>
                        <h4 class="mb-3">Computer Hardware</h4>
                        <p class="mb-4" style="color: #333;">This course provides an introduction to computer hardware & networking concepts and highlights the use of hardware & also software as a tool, an aid to enhance teaching and learning computer networking and hardware fundamentals.</p>
                        <a class="btn" href="hardware"><i class="fa fa-plus text-primary me-3"></i>Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                            <i class="fa fa-mobile-alt text-primary fs-4"></i>
                        </div>
                        <h4 class="mb-3">Mobile reparing</h4>
                        <p class="mb-4">All our daily activities such as banking, shopping, entertainment, learning and communication can be done on a digital platform just by a click on our phone screen. </p>
                        <a class="btn" href=""><i class="fa fa-plus text-primary me-3"></i>Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                            <i class="fa fa-robot text-primary fs-4"></i>
                        </div>
                        <h4 class="mb-3">Robotics</h4>
                        <p class="mb-4">All our daily activities such as banking, shopping, entertainment, learning and communication can be done on a digital platform just by a click on our phone screen.</p>
                        <a class="btn" href=""><i class="fa fa-plus text-primary me-3"></i>Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                            <i class="fa fa-trophy text-primary fs-4"></i>
                            <!-- wheelchair -->
                        </div>
                        <h4 class="mb-3">IT olampiad</h4>
                        <p class="mb-4">All our daily activities such as banking, shopping, entertainment, learning and communication can be done on a digital platform just by a click on our phone screen.</p>
                        <a class="btn" href=""><i class="fa fa-plus text-primary me-3"></i>Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                        <i class="fa fa-cogs text-primary fs-4"></i>

                            <!-- tooth -->
                        </div>
                        <h4 class="mb-3">Drone</h4>
                        <p class="mb-4">All our daily activities such as banking, shopping, entertainment, learning and communication can be done on a digital platform just by a click on our phone screen.</p>
                        <a class="btn" href=""><i class="fa fa-plus text-primary me-3"></i>Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                            <i class="fa fa-vials text-primary fs-4"></i>
                        </div>
                        <h4 class="mb-3">Sample</h4>
                        <p class="mb-4">All our daily activities such as banking, shopping, entertainment, learning and communication can be done on a digital platform just by a click on our phone screen.</p>
                        <a class="btn" href=""><i class="fa fa-plus text-primary me-3"></i>Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Feature Start -->
    <div class="container-fluid bg-primary overflow-hidden my-5 px-lg-0">
        <div class="container feature px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 feature-text py-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="p-lg-5 ps-lg-0">
                        <p class="d-inline-block border rounded-pill text-light py-1 px-4">Features</p>
                        <h1 class="text-white mb-4">Why Choose Us</h1>
                        <p class="text-white mb-4 pb-2">All our daily activities such as banking, shopping, entertainment, learning and communication can be done on a digital platform just by a click on our phone screen.</p>
                        <div class="row g-4">
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 55px; height: 55px;">
                                        <i class="fa fa-user-md text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="text-white mb-2">Experience</p>
                                        <h5 class="text-white mb-0">Hardware specialist</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 55px; height: 55px;">
                                        <i class="fa fa-check text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="text-white mb-2">Quality</p>
                                        <h5 class="text-white mb-0">Services</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 55px; height: 55px;">
                                        <i class="fa fa-comment-medical text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="text-white mb-2">Positive</p>
                                        <h5 class="text-white mb-0">Consultation</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 55px; height: 55px;">
                                        <i class="fa fa-headphones text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="text-white mb-2">24 Hours</p>
                                        <h5 class="text-white mb-0">Support</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="assets/img/students.jpg" style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <!-- <p class="d-inline-block border rounded-pill py-1 px-4">Students</p> -->
                <h1 style="color: #800080;">Our Dignitaries</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                        <img class="img-fluid" src="assets/img/P.A.Inamdar-Copy.jpg" alt="" style="width: 340px; height: 340px;">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>Shri Dr. P. A. Inamdar</h5>
                            <p class="text-primary">Chancellor Dr. P. A.Inamdar University,Pune </p>
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="assets/img/AbedaMaam.jpg" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>Mrs. Abeda Inamdar</h5>
                            <p class="text-primary">President : The Deccan Muslim Institute, Pune</p>
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="assets/img/team-3.jpgx" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>Name</h5>
                            <p class="text-primary">Department</p>
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="assets/img/team-4.jpgx" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>Name</h5>
                            <p class="text-primary">Department</p>
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Appointment Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="d-inline-block border rounded-pill py-1 px-4">Appointment</p>
                    <h1 class="mb-4">Make An Appointment To Visit Our Academy</h1>
                    <p class="mb-4">All our daily activities such as banking, shopping, entertainment, learning and communication can be done on a digital platform just by a click on our phone screen.</p>
                    <div class="bg-light rounded d-flex align-items-center p-5 mb-4">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white" style="width: 55px; height: 55px;">
                            <i class="fa fa-phone-alt text-primary"></i>
                        </div>
                        <div class="ms-4">
                            <p class="mb-2">Call Us Now</p>
                            <h5 class="mb-0">+91 7887443634</h5>
                        </div>
                    </div>
                    <div class="bg-light rounded d-flex align-items-center p-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white" style="width: 55px; height: 55px;">
                            <i class="fa fa-envelope-open text-primary"></i>
                        </div>
                        <div class="ms-4">
                            <p class="mb-2">Mail Us Now</p>
                            <h5 class="mb-0">pai-ictacademy@azamcampus.org</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="bg-light rounded h-100 d-flex align-items-center p-5">
                        <form>
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Your Name" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control border-0" placeholder="Your Email" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Your Mobile" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select class="form-select border-0" style="height: 55px;">
                                        <option selected>Choose Doctor</option>
                                        <option value="1">Doctor 1</option>
                                        <option value="2">Doctor 2</option>
                                        <option value="3">Doctor 3</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="date" id="date" data-target-input="nearest">
                                        <input type="text"
                                            class="form-control border-0 datetimepicker-input"
                                            placeholder="Choose Date" data-target="#date" data-toggle="datetimepicker" style="height: 55px;">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="time" id="time" data-target-input="nearest">
                                        <input type="text"
                                            class="form-control border-0 datetimepicker-input"
                                            placeholder="Choose Date" data-target="#time" data-toggle="datetimepicker" style="height: 55px;">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control border-0" rows="5" placeholder="Describe your problem"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Book Appointment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded-pill py-1 px-4">Testimonial</p>
                <h1>What Say Our Students!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="assets/img/musab-sayyed.jpg" style="width: 100px; height: 100px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>I am Musab Sayyed, Student at PAI ICT Academy since 2013. As a student here, my experience has been great. I’ve learned computer skills here, and I’ve gained practical knowledge that has boosted my understanding of technology. I also appreciate the supportive learning environment.</p>
                        <h5 class="mb-1">Musab Sayyed</h5>
                        <span class="fst-italic">Student</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="assets/img/Abuturaab-shaikh.jpg" style="width: 100px; height: 100px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>I've gained skills in Mobile Repairing, Robotics, MBlock programming, 3D printing, 3D designing, and even making projects from waste materials. Additionally, I've learned about Drone Making and Flying. I really appreciate all the knowledge and hands-on experience I've gained!</p>
                        <h5 class="mb-1">Abuturaab Shaikh</h5>
                        <span class="fst-italic">Student</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="assets/img/khadija-akbar.jpg" style="width: 100px; height: 100px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>I am a student of PAI ICT Academy since 2nd std. I have knowledge about Computer Hardware and Mobile repairing. I have learned so many things. This knowledge really improves my confident, body language, skills and power of thinking mentally and physically</p>
                        <h5 class="mb-1">Shaikh Khadija Akbar</h5>
                        <span class="fst-italic">Student</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Address</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i> PAI-ICT Academy, ICT-Building, Azam Campus, Pune-411001, Maharashtra.</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+91 7887443634</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>pai-ictacademy@azamcampus.org</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social rounded-circle" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social rounded-circle" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Courses offered</h5>
                    <a class="btn btn-link" href="https://www.ictacademypune.com/hardware">Computer Hardware</a>
                    <a class="btn btn-link" href="">Electronics</a>
                    <a class="btn btn-link" href="">Robotics</a>
                    <a class="btn btn-link" href="">IT olampiad</a>
                    <a class="btn btn-link" href="">Drone</a>
                    <a class="btn btn-link" href="">Scratch</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Quick Links</h5>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Python</a>
                    <a class="btn btn-link" href="">AI IOT ML</a>
                    <a class="btn btn-link" href="https://www.ictacademypune.com/cs">Cyber Security</a>
                </div>
                <div class="col-lg-3 col-md-6">
                        <iframe 
                         src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3783.5083024154815!2d73.87383237501271!3d18.505918382584813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c040a0e98563%3A0x9dd3ef6ef8904dbd!2sAzam%20Campus!5e0!3m2!1sen!2sin!4v1724841600234!5m2!1sen!2sin" 
                         width="100%" 
                         height="250" 
                         style="border:0; margin-top: -30px; margin-left: 50px;" 
                         allowfullscreen="" 
                         loading="lazy">
                     </iframe>
                        <img src="https://counter2.optistats.ovh/private/freecounterstat.php?c=ylsh42fd2pz9prbfba22gatzplrw16ac" style="border:0; margin-top: -10px; margin-left: 62px;" title="web page counters" alt="web page counters">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">PAI ICT Academy</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Developed By Azam IT 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/lib/easing/easing.min.js"></script>
    <script src="assets/lib/wow/wow.min.js"></script>
    <script src="assets/lib/waypoints/waypoints.min.js"></script>
    <script src="assets/lib/counterup/counterup.min.js"></script>
    <script src="assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="assets/lib/tempusdominus/js/moment.min.js"></script>
    <script src="assets/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="assets/js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <!-- Custom JS -->
    <script src="assets/js/custom.js"></script>
</body>

</html>