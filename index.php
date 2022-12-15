<?php
//include app
require('core/app.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'includes/head.php'; ?>
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Mentopace</title>
</head>

<body>
    <main id="whole">
        <div class="boxPsition">
            <!-- <nav>
                <div id="navbar">
                    <a href="./index.html"> <img src="assets/images/logo.png" alt="logo.png" id="logo"></a>
                    <label for="checkbox" id="checkbtn">
                        <i class="fa-sharp fa-solid fa-bars"></i>
                    </label>
                    <input type="checkbox" name="checkbox" id="checkbox">
                    <div id="sidebar">

                        <ul id="list">
                            <a href="#">
                                <li class="items active">home</li>
                            </a>
                            <a href="#">
                                <li class="items ">about</li>
                            </a>
                            <a href="#">
                            </a>
                        </ul>

                        <a href="./signUp.html"><button id="navbtn">go premium</button></a>
                    </div>

                </div>

            </nav> -->

            <?php include 'includes/navbar.php'; ?>
            <header>
                <div id="hero">
                    <div id="bg-color"></div>
                    <div id="headText">
                        <h1 id="cap">Get Access To Skilled Mentorship</h1>
                        <a class="btn btn-light p-3 mt-3" href="choose-path">Get Started <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div id="three-box">
                    <div class="skil-box two">
                        <div class="round-skill"><i class="fa-solid fa-briefcase fa-2x"></i></div>
                        <h5 class="skill-head">prepare your self for job</h5>
                        <p class="skill-set">gain knowledge and expert guildiance to you help get job ready</p>
                    </div>
                    <div class="skil-box one">
                        <div class="round-skill"><i class="fa-solid fa-gears fa-2x"></i></div>
                        <h5 class="skill-head"> skill to skill matching</h5>
                        <p class="skill-set">Using our high-tech matchup technology, Get connected to top mentors for your desired skillset.</p>
                    </div>

                    <div class="skil-box three">
                        <div class="round-skill"><i class="fa-solid fa-handshake fa-2x"></i></div>
                        <h5 class="skill-head"> collaborations within teams</h5>
                        <p class="skill-set">Gain knowledge and expert guidiance to help you get job ready.</p>
                    </div>
                </div>
            </header>
            <div>
                <section id="section-one">
                    <div id="mentee-text">
                        <div class="rounded-icon">
                            <i class="fa-solid fa-rocket"></i>
                        </div>

                        <h4 class="mt-3">Ready to launch your career to the next level</h4>

                        <p class="m-0">With Mentopace, you easily get matched to any mentor of your choice, ask relevant
                            questions
                            related to skills you wish to gain clarity on and get ready for bigger opportunities. Sign
                            up
                            for free and get mentored.</p>
                    </div>

                    <div id="mentee-img">
                        <div class="img-bg"></div>
                        <img src="assets/images/mentee.png" id="mentee" alt="mentee.png">
                        <div id="btn-bg">
                            <a href="./signUp.html" class="btn btn-outline-light mt-2">Get Started</a>
                        </div>
                    </div>
                </section>
                <section id="section-two">
                    <div id="mentor-text">
                        <div class="rounded-icon">
                            <i class="fa-solid fa-chalkboard-user"></i>
                        </div>

                        <h4 class="mt-3">Ready to share what you know?</h4>
                        <p class="m-0">Connect to mentees who need your skills and experience to improve their career.
                            Provide guidiance
                            and encourgae them to set and reach career goals.</p>
                    </div>

                    <div id="mentor-img">
                        <div class="img-bg"></div>
                        <img src="assets/images/mentor.png" id="mentor" alt="mentor.png">
                        <div id="btn-bg">
                            <a href="./signUp.html" class="btn btn-outline-light mt-2">Get Started</a>
                        </div>
                    </div>
                </section>
                <section id="section-three">
                    <h3 id="pick">pick a plan that's right for you</h3>
                    <div id="plan">
                        <div class="plans monthly">monthly</div>
                        <div class="plans yearly">yearly</div>
                        <div class="plans save">save 20%</div>
                    </div>
                    <div class="parent">
                        <div class=" card-box card ">
                            <div class="oval-lay">
                                <h3 class="tech">basic</h3>
                                <div class="amt-sect">
                                    <div class="per">
                                        <i class="fa-solid fa-naira-sign">0</i>
                                        <p>per month</p>
                                    </div>
                                    <div class="per">
                                        <i class="fa-solid fa-naira-sign">0</i>
                                        <p>per year</p>
                                    </div>
                                </div>
                            </div>

                            <div class="access">
                                <p><i class="fa-solid fa-circle-check"></i> <span>Access to mentors weekly</span></p>
                                <p><i class="fa-solid fa-circle-check"></i> <span>Mentorship once everyday</span></p>
                                <p><i class="fa-solid fa-circle-check"></i> <span>1 Mentor + 1 Skillset</span></p>
                                <p><i class="fa-solid fa-circle-check"></i> <span>Text Communication only</span></p>
                                <p><i class="fa-solid fa-circle-xmark"></i> <span>No Hackathons</span></p>
                                <p><i class="fa-solid fa-circle-xmark"></i> <span>No Access to Communities</span></p>
                            </div>
                            <div class="cardBtn">
                                <button class="card-btn">Start free 7-day Trial</button>
                            </div>
                        </div>
                        <div class="card-box">
                            <div class="oval-lay">
                                <h3 class="tech standard">standard</h3>
                                <!-- <p id="stand">For both Newbies and Intermediates in tech who wants to improve in their skill with guidiance and mentorship</p> -->
                                <div class="amt-sect">
                                    <div class="per">
                                        <i class="fa-solid fa-naira-sign">3,000</i>
                                        <p>per month</p>
                                    </div>
                                    <div class="per">
                                        <i class="fa-solid fa-naira-sign">30,000</i>
                                        <p>per year</p>
                                    </div>
                                </div>
                            </div>

                            <div class="access">
                                <p><i class="fa-solid fa-circle-check"></i> <span>Access to mentors weekly</span></p>
                                <p><i class="fa-solid fa-circle-check"></i> <span>Mentorship thrice everyday</span></p>
                                <p><i class="fa-solid fa-circle-check"></i> <span>2 Mentor + 2 Skillset</span></p>
                                <p><i class="fa-solid fa-circle-check"></i> <span>Text, video Communication </span></p>
                                <p><i class="fa-solid fa-circle-check"></i> <span>job alerts</span></p>
                                <p><i class="fa-solid fa-circle-check"></i> <span>resume builder</span></p>
                                <p><i class="fa-solid fa-circle-check"></i> <span>Access to Communities</span></p>
                                <p><i class="fa-solid fa-circle-xmark"></i> <span>No Hackathons</span></p>
                            </div>
                            <div class="cardBtn">
                                <button class="card-btn">Start free 7-day Trial</button>
                            </div>
                        </div>
                        <div class="card card-box">
                            <div class="oval-lay premium">
                                <h3 class="tech premium">premium</h3>
                                <!-- <p id="stand standard">For both Newbies and Intermediates in tech who wants to improve in their skill with guidiance and mentorship</p> -->
                                <div class="amt-sect standard">
                                    <div class="per standard">
                                        <i class="fa-solid fa-naira-sign">5,000</i>
                                        <p>per month</p>
                                    </div>
                                    <div class="per standard">
                                        <i class="fa-solid fa-naira-sign">52,000</i>
                                        <p>per year</p>
                                    </div>
                                </div>
                            </div>

                            <div class="access premium">
                                <p><i class="fa-solid fa-circle-check"></i> <span>Access to mentors weekly</span></p>
                                <p><i class="fa-solid fa-circle-check"></i> <span>Mentorship 5 days everyweek</span></p>
                                <p><i class="fa-solid fa-circle-check"></i> <span>2 Mentor + 2 Skillset</span></p>
                                <p><i class="fa-solid fa-circle-check"></i> <span>Text, call, video Communication
                                    </span></p>
                                <p><i class="fa-solid fa-circle-check"></i> <span>job alerts</span></p>
                                <p><i class="fa-solid fa-circle-check"></i> <span>job recommendation</span></p>
                                <p><i class="fa-solid fa-circle-check"></i> <span>premium resume builder</span></p>
                                <p><i class="fa-solid fa-circle-check"></i> <span>Access to Communities</span></p>
                                <p><i class="fa-solid fa-circle-xmark"></i> <span>access to Hackathons</span></p>
                                <p><i class="fa-solid fa-circle-xmark"></i> <span>weekly challenges with prizes</span>
                                </p>
                            </div>
                            <div class="cardBtn premium">
                                <button class="card-btn">Start free 14-day Trial</button>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <footer id="footer">
                <div class="footer-logo">
                    <img src="assets/images/logo.png" id="footer-lg" alt="logo.png">
                </div>
                <div class="footer-links">
                    <div class="footer-link">
                        <h4>useful links</h4>
                        <p class="bg-color">about us</p>
                        <p class="bg-color">blog</p>
                        <p class="bg-color">our team</p>
                    </div>
                    <!-- <div class="footer-link">
                        <h4>our teams</h4>
                        <p class="border-color">developers team</p>
                        <p class="border-color">designers team</p>
                    <p class="border-color">content team</p>
                        <p class="border-color">social media team</p>
                </di    v> -->

                    <div class="footer-link">
                        <h4>our service</h4>
                        <p class="bg-color">hire a mentor</p>
                        <p class="bg-color">P2P</p>
                        <p class="bg-color">mentopoint</p>
                    </div>
                    <!--  <div class="footer-link">
                       <h4> our partners</h4>
                        <p class="text-shadow">IG hub</p>
                        <p class="text-shadow">GDG aba </p>
                        <p class="text-shadow"> cousera </p>
                        <p class="text-shadow">figma</p>
                    </div> -->
                </div>
                <div class="text-center">
                    <ul class="list-unstyled list-inline">
                        <li class="list-inline-item"><a title="Follow me on Twitter" class="btn btn-outline-light"
                                href="https://twitter.com/" role="button"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="list-inline-item"><a title="Follow me on Instagram" class="btn btn-outline-light"
                                href="https://instagram.com/" role="button"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a title="Connect with me on Facebook" class="btn btn-outline-light"
                                href="https://facebook.com/" role="button"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a title="Connect with me on Linkedin" class="btn btn-outline-light"
                                href="https://www.linkedin.com/in/" role="button"><i class="fab fa-linkedin-in"></i></a>
                        </li>
                    </ul>
                </div>
                <p class="copyright"><i class="fa-regular fa-copyright"></i> copyright mentopace corp.</p>
            </footer>
        </div>
    </main>
    <?php include 'includes/foot.php'; ?>
</body>