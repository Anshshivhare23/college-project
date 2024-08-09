<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>web-dev</title>
        <link rel="stylesheet" href="./styles/css/main.css">
<style>
.logout{
    position: relative;
    top: 18px;
    left: -130px;
    z-index: 3;
}
.username{
    position: relative;
    top: 18px;
    left: -129px;
    z-index: 3;
}

</style>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script>
            $(document).ready(function () {
                $('.search-container input[type="text"]').on("keyup input", function () {
                    var inputVal = $(this).val();
                    var resultDropdown = $(this).siblings(".result");
                    if (inputVal.length) {
                        $.get("backend-search.php", { term: inputVal }).done(function (data) {
                            resultDropdown.html(data);
                        });
                    } else {
                        resultDropdown.empty();
                    }
                });
        
                $(document.body).on("click", ".result a", function (e) {
            e.preventDefault(); // Prevent default link behavior
            var suggestionText = $(this).text().trim();
            // Construct the URL for redirection to medical_eme.html
            var redirectURL = './web-dev.php';
            // Redirect to the new page
            window.location.href = redirectURL;
        });
            });
        </script>
    </head>
    <body>

        <header>
            <div class="navbar">
                <div class="inner-navbar container">
                    <div class="left-bar">
                        <a href="./index.php">
                            <img src="./images/logo.png" style="max-width: 150px;max-height:80px;margin-left: -500px;" alt="img">
                        </a>
                    </div>
                    <div class="right-bar">
                        <div class="search-container">
                            <input style="color: black;" type="text" autocomplete="off" placeholder="Search..." />
                            <div  style="color:black; margin-right:300px; " class="result"> </div>
                        </div>
                        <div class="spacing"></div>
                        <div class="navigation-links">
                           <?php  if(isset($_SESSION['username'])){?>
                            
                            <a class="logout" href ="logout.php"./login.php">LOG OUT</a>
                            <a class="username" href="./SignUp.php"><?php echo$_SESSION['username']?></a>
                            <?php }else{?>
                                
                            <a href="./login.php">LOG IN</a>
                            <a href="./SignUp.php">SIGN UP</a>
                        </div>
                        <?php }?>
                        <div class="btn-container">
                            <a href="./form.html" class="primary-button">Contact-Us</a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="additional-links">
                <div class="link-bar container">
                    <div class="test">
                        <a href="#">Web Dev</a>
                        <a href="#">Mobile Dev</a>
                        <a href="#">Design</a>
                        <a href="#">Writing</a>
                        <a href="#">Admin support</a>
                        <a href="#">Customer Service</a>
                        <a href="#">Marketing</a>
                        <a href="#">Accounting</a>
                        <a href="#">See All Categories</a>
                    </div>
                </div>
            </div>


        </header>

        <main>
            <div class="banner-top">
                <div class="background-image" style="background-image:
                    url('./images/devlopments.jpg');"></div>
                <div class="banner-content container">
                    <div class="banner-inner-container">
                        <h1>Find quality freelancers and agencies for web
                            development</h1>
                        <div class="btn-container">
                            <a href="#" id="downloadButton" class="primary-button">Download Report</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hire-scope-work">
                <div class="border-width container">
                    <div class="left-container">
                        <h2>Hire for any scope of work:</h2>
                    </div>
                    <div class="right-container">
                        <div class="text-container">
                            <h3>Short-term tasks</h3>
                            <p>Build a pool of diverse experts for one-off tasks</p>
                        </div>
                        <div class="text-container">
                            <h3>Recurring projects</h3>
                            <p>Have a go-to team with specialized skills</p>
                        </div>
                        <div class="text-container">
                            <h3>Full-time contract work</h3>
                            <p>Expand your staff with a dedicated team</p>
                        </div>
                    </div>

                </div>

            </div>

            <div class="browse-higest-rated-devlopments">
                <div class="width-countainer countainer">
                    <div class="top-countainer">
                        <div class="text-container">
                            <h2>Browse our highest-rated developers</h2>
                        </div>
                    </div>
                    <div class="bottom-countainer">
                        <div class="inner-countainer">
                            <div class="top-content">
                                <div class="left-container">
                                    <img src="./images/ramonr.jpg" alt="ramonr">
                                    <span>300₹ <p>/hr</p> </span>
                                </div>
                                <div class="right-countainer">
                                    <a href="#">Ramon.R</a>
                                    <p> Arabic Copywriter /English to Arabic</p>
                                    <h4>Top rated</h4>
                                </div>
                            </div>
                            <div class="bottom-content">
                                <div class="span-countainer">
                                    <div class="span-content"><span>Translation
                                            English Arabic</span></div>
                                    <div class="span-content"><span>Article
                                            Writing</span></div>
                                    <div class="span-content"><span>C#</span></div>
                                </div>

                                <div class="btn-container">
                                    <a href="#" class="primary-button">View
                                        Profile</a>
                                </div>
                            </div>


                        </div>
                        <div class="inner-countainer">

                            <div class="top-content">
                                <div class="left-container">
                                    <img src="./images/alexander.jpg" alt="#">
                                    <span>400₹<p>/hr</p> </span>
                                </div>
                                <div class="right-countainer">
                                    <a href="#">Alexander.B</a>
                                    <p>Shopify Theme Developer | Front</p>
                                    <h4>Top rated</h4>
                                </div>
                            </div>
                            <div class="bottom-content">
                                <div class="span-countainer">
                                    <div class="span-content"><span>Ruby on
                                            Rails</span></div>
                                    <div class="span-content"><span>Shopify</span></div>
                                    <div class="span-content"><span>Shopify
                                            Templates</span></div>
                                    <div class="span-content"> <span>React</span></div>
                                </div>

                                <div class="btn-container">
                                    <a href="#" class="primary-button">View
                                        Profile</a>
                                </div>
                            </div>

                        </div>
                        <div class="inner-countainer">

                            <div class="top-content">
                                <div class="left-container">
                                    <img src="./images/arsavin.jpg"
                                        alt="arsavin">
                                    <span>500₹ <p>/hr</p> </span>
                                </div>
                                <div class="right-countainer">
                                    <a href="#">Arshavir.r</a>
                                    <p>Expert WordPress and PHP Developer</p>
                                    <h4>Top rated</h4>
                                </div>
                            </div>
                            <div class="bottom-content">
                                <div class="span-countainer">
                                    <div class="span-content"><span>WordPress</span></div>
                                    <div class="span-content"><span>HTML5</span></div>
                                    <div class="span-content"><span>CSS3</span></div>
                                    <div class="span-content"><span>Java Script</span></div>
                                    <div class="span-content"> <span>PHP</span></div>
                                </div>

                                <div class="btn-container">
                                    <a href="#" class="primary-button">View Profile</a>
                                </div>
                            </div>

                        </div>
                        <div class="inner-countainer">
                            <div class="top-content">
                                <div class="left-container">
                                    <img src="./images/konstantin.jpg"
                                        alt="Konstantin">
                                    <span>500₹<p>/hr</p> </span>
                                </div>
                                <div class="right-countainer">
                                    <a href="#">Konstantin.K</a>
                                    <p>JavaScript Developer (React, Angular,
                                        Vue)</p>
                                    <h4>Top rated</h4>
                                </div>
                            </div>
                            <div class="bottom-content">
                                <div class="span-countainer">
                                    <div class="span-content"><span>CSS3</span></div>
                                    <div class="span-content"><span>CSS</span></div>
                                    <div class="span-content"><span>HTML</span></div>
                                    <div class="span-content"><span>HTML5</span></div>
                                    <div class="span-content"><span>Twiter Bootstrap</span></div>
                                </div>

                                <div class="btn-container">
                                    <a href="#" class="primary-button">View Profile</a>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>


            <div class="upwork-buisnis">
                <div class="width-container countainer">
                    <div class="text-container">
                        <h4>WebWorks Business: We’ll help you find the perfect web developers. <a href="./how-it-work.php">Learn more.</a> </h4>
                    </div>
                </div>
            </div>

        </main>


        <footer>
            <div class="footer-body container">
                <div class="footer-body-lists">
                    <div class="footer-body-lists-item">
                        <h4>company</h4>
                        <a href="#">About Us</a>
                        <a href="#">Investor Relations</a>
                        <a href="#">Careers</a>
                        <a href="#">Trust & Safety</a>
                        <a href="#">Terms of Service</a>
                        <a href="#">Privacy Policy</a>
                        <a href="#">Accessibility</a>
                    </div>
                    <div class="footer-body-lists-item">
                        <h4>RESOURCES</h4>
                        <a href="#">Customer Support</a>
                     
                    </div>
                    <div class="footer-body-lists-item">
                        <h4>BROWSE</h4>
                        <a href="#">Freelancers by Skill</a>
                        <a href="#">Freelancers in India</a>
                        <a href="#">Freelancers in UK</a>
                        <a href="#">Freelancers in Canada</a>
                        <a href="#">Freelancers in Australia</a>
                        <a href="#">Jobs in USA</a>
                        <a href="#">Find Jobs</a>
                    </div>
                </div>
            </div>
        </footer>
<script src="download.js"></script>
    </body>
</html>