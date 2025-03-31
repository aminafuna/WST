<?php 
include "conn.php";
session_start();

$e=$_SESSION['email'];

$getname=mysqli_query($conn, "SELECT * FROM users WHERE Email_Address='$e' ");
while($row=mysqli_fetch_object($getname)){

    $name = $row -> FullName;

}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title><?php echo $name; ?> About User Page</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">Amina Princes Funa</span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img copy/2x2.png" alt="..." /></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#experience">School Projects</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education">Education</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">Skills</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#interests">Interests</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#awards">Awards</a></li>
                </ul>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container-fluid p-0">

        <nav>
    <center>
    <h1> <?php echo $name; ?>'s WEBSITE POST</h1>
    <a href="userhome.php"> HOME </a> |
    <a href="gallery.php"> GALLERY </a> |
    <a href="about.php"> ABOUT </a> |
    <a href="createpost.php"> CREATE POST </a> |
    <a href="update_profile.php"> UPDATE PROFILE </a> |
    <a href="index.php"> LOGOUT </a>
    </center>
</nav>
            <!-- About-->
            <section class="resume-section" id="about">
                <div class="resume-section-content">
                    <h1 class="mb-0">
                        Amina Princes A.
                        <span class="text-primary">Funa</span>
                    </h1>
                    <div class="subheading mb-5">
                        Sto. Nino Sur · Arevalo, Iloilo City, Iloilo, 5000 · +639553511086 ·
                        <a href="https://mail.google.com/">amad.funa.ui@phinmaed.com</a>
                    </div>
                    <p class="lead mb-5">A third-year BS Information Technology student majoring in Digital Arts, with experience in Graphic Arts, Animation, and System Development. Skilled in designing visually engaging content and developing functional web applications.</p>
                    <div class="social-icons">
                        <a class="social-icon" href="www.linkedin.com/in/amina-princes-funa-570200315"><i class="fab fa-linkedin-in"></i></a>
                        <a class="social-icon" href="https://github.com/aminafuna"><i class="fab fa-github"></i></a>
                        <a class="social-icon" href="https://www.youtube.com/@minchi_the_aoigirl"><i class="fa-brands fa-youtube"></i></a>
                        <a class="social-icon" href="https://web.facebook.com/kagamine.rin.90410/"><i class="fab fa-facebook-f"></i></a>
                        <a class="social-icon" href="https://www.instagram.com/minchi_23/"><i class="fa-brands fa-instagram"></i></a>
                        <a class="social-icon" href="https://ph.pinterest.com/aminaprincesf/"><i class="fa-brands fa-pinterest-p"></i></a>
                    </div>
                </div>
            </section>
            <hr class="m-0" />

            <!-- Experience-->
            <section class="resume-section" id="experience">
                <div class="resume-section-content">
                    <h2 class="mb-5">School Projects</h2>

                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Micro-Project for Front-End Presentation</h3>
                            <div class="subheading mb-3"> ITE 399 - Human and Computer Interaction 1 </div>
                            <p>Developed "Chicco's Closet", a front-end business website for baby clothing, inspired by Shopee and Lazada, showcasing product listings, user-friendly navigation, and responsive design.</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">March 2023 - May 2023</span></div>
                    </div>

                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Mini-Capstone 2023-2024, 2nd Semester</h3>
                            <div class="subheading mb-3"> ITE 400 - System Integration and Architecture 1 </div>
                            <p>Co-developed "MedTech Appointment", an online system that enables patients to book medical appointments based on available hospitals, specific medical needs, and nearby doctors. Built using Python Flask for backend development and XAMPP for database management, ensuring seamless data processing and system functionality. Designed to enhance accessibility and streamline the scheduling process for both patients and healthcare providers.</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">January 2024 - April 2024</span></div>
                    </div>

                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Mini-Capstone 2024, 1st Semester</h3>
                            <div class="subheading mb-3">ITE 298 - Information Management (Including Fundamentals of Database Systems)</div>
                            <p>Co-developed "MediCare", a clinic appointment system that allows patients to book consultations based on available doctors and specific medical needs. Built using XAMPP for database management and Python Flask for backend development, ensuring efficient data processing and user interaction. Designed to enhance scheduling efficiency and improve patient care within the clinic.</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">August 2024 - October 2024</span></div>
                    </div>

                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Micro-Project using Node.js</h3>
                            <div class="subheading mb-3"> ITE 314 - Advanced Database Systems </div>
                            <p>Co-developed "Enrollmate-Plan", an online appointment system designed to help students avoid long wait times by allowing them to schedule appointments conveniently via their phones or computers. Built using Node.js for backend development and XAMPP for database management, ensuring efficient scheduling and data processing. Designed to streamline student appointment booking and improve overall administrative efficiency.</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">October 2024</span></div>
                    </div>

                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Capstone Project - Digital Arts Major 2024-2025</h3>
                            <div class="subheading mb-3">ITE 309 - Capstone Project and Research 1</div>
                            <p>Currently developing "Iris", an animated capstone project blending cartoon and Western animation styles, created using Krita. This drama-fantasy film explores themes of bereavement, regret, depression, and acceptance, aiming to evoke deep emotional connections with the audience. Designed to deliver a compelling narrative that raises awareness of mental health through visually expressive storytelling.</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary"> November 2024 - present </span></div>
                    </div>

                </div>
            </section>
            <hr class="m-0" />

            <!-- Education-->
            <section class="resume-section" id="education">
                <div class="resume-section-content">
                    <h2 class="mb-5">Education</h2>

                    <div class="mt-5 d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">University of Iloilo - PHINMA</h3>
                            <div class="subheading mb-3">College</div>
                            <div>Course: Bachelor of Science of Information Technology, Track - Digital Arts</div>
                            <p>GPA: 1.53</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">June 2021 - present</span></div>
                    </div>

                    <div class="mt-5 d-flex flex-column flex-md-row justify-content-between">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">University of San Agustin</h3>
                            <div class="subheading mb-3">College</div>
                            <div>Course - Bachelor of Science in Chemistry</div>
                            <p>GPA: 2.25</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">June 2018 - December 2019</span></div>
                    </div>

                    <div class="mt-5 d-flex flex-column flex-md-row justify-content-between">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">University of Iloilo - PHINMA</h3>
                            <div class="subheading mb-3">Senior High School</div>
                            <p>GPA: 1.25</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">June 2016 - April 2018</span></div>
                    </div>

                    <div class="mt-5 d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">University of Iloilo - PHINMA</h3>
                            <div class="subheading mb-3">Junior High School</div>
                            <p>GPA: 1.30</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">June 2012 - April 2016</span></div>
                    </div>

                    <div class="mt-5 d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Iloilo Central Elementary School</h3>
                            <div class="subheading mb-3">Elementary</div>
                            <p>GPA: 1.85</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">June 2006 - March 2012</span></div>
                    </div>

                </div>
            </section>
            <hr class="m-0" />
            <!-- Skills-->
            <section class="resume-section" id="skills">
                <div class="resume-section-content">
                    <h2 class="mb-5">Skills</h2>
                    <div class="subheading mb-3">Programming Languages & Tools</div>
                    <ul class="list-inline dev-icons">
                        <li class="list-inline-item"><i class="fab fa-html5"></i></li>
                        <li class="list-inline-item"><i class="fab fa-css3-alt"></i></li>
                        <li class="list-inline-item"><i class="fa-brands fa-node"></i></li>
                        <li class="list-inline-item"><i class="fa-brands fa-java"></i></li>
                        <li class="list-inline-item"><i class="fab fa-node-js"></i></li>
                        <li class="list-inline-item"><i class="fa-brands fa-python"></i></li>
                        <li class="list-inline-item"><i class="fa-brands fa-linux"></i></li>
                        <li class="list-inline-item"><i class="fa-brands fa-bootstrap"></i></li>
                        <li class="list-inline-item"><i class="fab fa-wordpress"></i></li>
                        <li class="list-inline-item"><i class="fa-brands fa-figma"></i></li>
                        <li class="list-inline-item"><i class="fa-brands fa-researchgate"></i></li>
                        <li class="list-inline-item"><i class="fa-brands fa-artstation"></i></li>
                        <li class="list-inline-item"><i class="fa-brands fa-deviantart"></i></li>
                    </ul>
                    <div class="subheading mb-3">Workflow</div>
                    <ul class="fa-ul mb-0">
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Critical Thinker
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Creative and Expressive
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Innovative Problem-Solver
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Leadership
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Detail-Oriented
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Animation
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Graphic Designing
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Adaptable
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Purpose-Driven
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Technically Skilled
                        </li>
                    </ul>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Interests-->
            <section class="resume-section" id="interests">
                <div class="resume-section-content">
                    <h2 class="mb-5">Interests</h2>

                    <ul class="list-inline dev-icons">
                        <li class="list-inline-item"><i class="fa-solid fa-film"></i></li>
                        <div class="subheading mb-3">Avid Movie, Anime and Series Watcher</div>
                    </ul>   
                        
                        <p>An avid fan of movies, anime, and series, with a keen eye for compelling plots, trending titles, and top-rated productions. Enjoys exploring diverse genres and storytelling styles that spark creativity and inspire new ideas.</p>
                        <p class="mb-0">My favorite film, anime and series are:</p>
                        <ul class="fa-ul mb-0">
                            <li>
                                <span class="fa-li"><i class="fas fa-check"></i></span>
                                Arcane(2021-2024)
                            </li>
                            <li>
                                <span class="fa-li"><i class="fas fa-check"></i></span>
                                Parasite(2019)
                            </li>
                            <li>
                                <span class="fa-li"><i class="fas fa-check"></i></span>
                                Homeward Bound: The Incredible Journey(1993)
                            </li>
                            <li>
                                <span class="fa-li"><i class="fas fa-check"></i></span>
                                Brokeback Mountain(2005)
                            </li>
                            <li>
                                <span class="fa-li"><i class="fas fa-check"></i></span>
                                The Cure(1997)
                            </li>
                            <li>
                                <span class="fa-li"><i class="fas fa-check"></i></span>
                                Good Doctor(2017-present)
                            </li>
                            <li>
                                <span class="fa-li"><i class="fas fa-check"></i></span>
                                Classicaloid(2016-2018)
                            </li>
                            <li>
                                <span class="fa-li"><i class="fas fa-check"></i></span>
                                The Substance(2024)
                            </li>
                            <li>
                                <span class="fa-li"><i class="fas fa-check"></i></span>
                                Hellsing(2002-2006)
                            </li>
                            <li>
                                <span class="fa-li"><i class="fas fa-check"></i></span>
                                Wolfwalkers(2017)
                            </li>
                            <li>
                                <span class="fa-li"><i class="fas fa-check"></i></span>
                                Interstellar(2014)
                            </li>
                            <li>
                                <span class="fa-li"><i class="fas fa-check"></i></span>
                                Theory of Everything(2014)
                            </li>
                            <li>
                                <span class="fa-li"><i class="fas fa-check"></i></span>
                                One Cut of the Dead(2017)
                            </li>
                            <li>
                                <span class="fa-li"><i class="fas fa-check"></i></span>
                                The Imitation Game(2014)
                            </li>
                            <li>
                                <span class="fa-li"><i class="fas fa-check"></i></span>
                                Danish Girl(2015)
                            </li>
                        </ul>

                        <ul class="list-inline dev-icons">
                            <li class="list-inline-item"><i class="fa-solid fa-book"></i></li>
                            <div class="subheading mb-3">Bookworm</div>
                        </ul>   
                            
                            <p>Aside of media, being a bookworm has always been my favorite pastime, as it allows me to immerse myself in new worlds and gain fresh perspectives. The endless adventures and knowledge found in books fuel my imagination and inspire me to learn and grow.</p>
                            <p class="mb-0">My favorite books are:</p>
                            <ul class="fa-ul mb-0">
                                <li>
                                    <span class="fa-li"><i class="fas fa-check"></i></span>
                                    Selection by Kiera Cass(2012-2018)
                                </li>
                                <li>
                                    <span class="fa-li"><i class="fas fa-check"></i></span>
                                    The Story of My Life by Helen Keller(1903)
                                </li>
                                <li>
                                    <span class="fa-li"><i class="fas fa-check"></i></span>
                                    Divine Comedy by Dante Alighieri(1321)
                                </li>
                                <li>
                                    <span class="fa-li"><i class="fas fa-check"></i></span>
                                    Ruination by Anthony Reynolds(2022)
                                </li>
                                <li>
                                    <span class="fa-li"><i class="fas fa-check"></i></span>
                                    Throne of Glass by Sarah Maas(2012-2018)
                                </li>
                                <li>
                                    <span class="fa-li"><i class="fas fa-check"></i></span>
                                    Conclave by Robert Harris(2016)
                                </li>
                                <li>
                                    <span class="fa-li"><i class="fas fa-check"></i></span>
                                    Hunchback of Notre Dame by Victor Hugo(1831)
                                </li>
                                <li>
                                    <span class="fa-li"><i class="fas fa-check"></i></span>
                                    Itou Junji Collection: Fragments of Horror(2014)
                                </li>
                                <li>
                                    <span class="fa-li"><i class="fas fa-check"></i></span>
                                    Call Me by Your Name by Andrei Aciman(2007)
                                </li>
                                <li>
                                    <span class="fa-li"><i class="fas fa-check"></i></span>
                                    Frankenstein by Mary Shelley(1818)
                                </li>
                            </ul>
                            <ul class="list-inline dev-icons">
                                <li class="list-inline-item"><i class="fa-solid fa-music"></i></li>
                                <div class="subheading mb-3">Music Lover</div>
                            </ul>   
                                
                                <p>As a music lover, I find joy in exploring every genre, letting the rhythm and melody match my mood in the moment. Whether it’s soothing tunes or energetic beats, music always has a way of connecting me to my emotions and the world around me.</p>
                                <p class="mb-0">My favorite genres are usually pop, lofi, japanese rock and city pop, upbeat, gabber, and symphony</p>
                                
                    

                        
                </div>
            </section>
            <hr class="m-0" />
            <!-- Awards-->
            <section class="resume-section" id="awards">
                <div class="resume-section-content">
                    <h2 class="mb-5">Awards & Certifications</h2>
                    <ul class="fa-ul mb-0">
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            3<sup>rd</sup> Runner Up(Editorial Cartooning) - 2014 Golden Pen Regional Contest 
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            3<sup>rd</sup> Runner Up(Editorial Cartooning and Feature Writing) - 2015 Golden Pen Regional Contest
                        </li>
                        <li>
                            <span class="fa-li"><i class="fa-solid fa-medal text-warning"></i></span>
                            2015 Dinagyang Poster Making Competition - Participation Award
                        </li>
                        <li>
                            <span class="fa-li"><i class="fa-solid fa-medal text-warning"></i></span>
                            2016 Dinagyang Poster Making Competition - Participation Award
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-medal text-warning"></i></span>
                            55th National Students Art Competition - Certification
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            1
                            <sup>st</sup>
                            Place - University of Iloilo - PHINMA - CITEWEEK 2023 Poster Painting Contest
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            1
                            <sup>st</sup>
                            Place - University of Iloilo - PHINMA - CITEWEEK 2023 Banner Making Contest
                        </li>
                    </ul>
                </div>
            </section>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
