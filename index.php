<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Homepage</title>
        <link rel="stylesheet" href="./styles/css/main.css">
        <STyle>
            .result {
    position: absolute;
    background-color: #fff;
    border: 1px solid #ccc;
    max-height: 200px;
    overflow-y: auto;
    z-index: 1000;
    width: 100%;
}

/* CSS for suggestion links */
.result a {
    display: block;
    padding: 10px;
    color: #333;
    text-decoration: none;
    transition: background-color 0.3s ease;
}
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

/* Hover effect for suggestion links */
.result a:hover {
    background-color: #f4f4f4;
}
        </STyle>
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
        <script>
        // Function to check if the welcome alert has been shown before
        function hasWelcomeAlertShown() {
            return localStorage.getItem('welcomeAlertShown') === 'true';
        }

        // Function to set that the welcome alert has been shown
        function setWelcomeAlertShown() {
            localStorage.setItem('welcomeAlertShown', 'true');
        }

        // Check if the welcome alert has not been shown before
        if (!hasWelcomeAlertShown()) {
            // Display a welcome alert
            alert("Welcome!");

            // Set that the welcome alert has been shown
            setWelcomeAlertShown();
        }
    </script>

        </script>
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
                        <a href="./web-dev.php">Web Dev</a>
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
            <div class="banner-top "> 
                <div class="background-image" style="background-image:
                    url('./images/xl.jpg');"></div>
                <div class="banner-content container">
                    <div class="banner-inner-container">
                        <h2>Where Talent Meets Opportunity</h2>
                        <h2>WebWorks</h2>
                        <p>WebWorks expertly connects professionals and agencies
                            to businesses seeking specialized talent.</p>
                        <div class="btn-container">
                            <a href="#" id="downloadButton" class="primary-button">Download Report</a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="find-talent-agencies">
                <div class="find-talent-agencies-container container">
                    <h3>Find quality talent or agencies</h3>
                    <div class="find-talent-agencies-container-list">
                        <a href="web-dev.php"><img src="./images/dev.svg" alt="nema slike">
                            <p>Web, Mobile & Software Dev</p> </a>
                        <a href="#"><img
                                src="./images/design-creative@2x.109353b3474a.svg"
                                alt="nema slike"><p>Design
                                & Creative</p></a>
                        <a href="#"><img
                                src="./images/writing@2x.1b7ea27c96c3.svg"
                                alt="nema slike"><p>Writing</p></a>
                        <a href="#"><img
                                src="./images/marketing-sales@2x.ebb7dd9ca8bc.svg"
                                alt="nema slike"><p>Sales
                                & Marketing</p></a>
                        <a href="#"><img
                                src="./images/admin-support@2x.ff2e0d4dc35d.svg"
                                alt="nema slike"><p>Admin
                                Supports</p></a>
                        <a href="#"><img
                                src="./images/customer-service@2x.22b35df5315c.svg"
                                alt="nema slike"><p>Customer
                                Service</p></a>
                        <a href="#"><img
                                src="./images/data-science@2x.b4305128dde6.svg"
                                alt="nema slike"><p>Data
                                Science & Analytics</p></a>
                        <a href="#"><img
                                src="./images/engineering-architecture@2x.85b023c99e9f.svg"
                                alt="nema slike"><p>Engineering
                                & Architecture</p></a>
                    </div>
                    <p>Don’t see what you’re looking for? <a href="#">See all
                            categories</a> </p>
                </div>

            </div>


            <div class="blank-container-gray">
                <div class="blank-width-container container">
                    <div class="left-container">
                        <h4>Hire for any scope</h4>
                    </div>
                    <div class="right-container">
                        <div class="blank-container"><div class="blank-cont">
                                <div class="green-cont"></div>
                                <h3>Complex project</h3>
                                <p>Find specialized experts and agencies for
                                    large projects.</p>
                            </div></div>
                        <div class="blank-container"><div class="blank-cont">
                                <div class="green-cont"></div>
                                <h3>Longer-term contract</h3>
                                <p>Expand your team with a skilled resource.</p>
                            </div></div>
                        <div class="blank-container"><div class="blank-cont">
                                <div class="green-cont"></div>
                                <h3>Short term</h3>
                                <p>Build a pool of diverse experts for one-off
                                    tasks.</p>
                            </div></div>
                    </div>

                </div>

            </div>

            <div class="how-it-work-white">
                <div class="how-it-work-size container">
                    <div class="text-how-it-work">
                        <a style="text-decoration: none; " href="how-it-work.php"><h2>How it works</h2></a>
                    </div>
                    <div class="img-how-it-work">

                        <div class="image-text-container">
                            <div class="img-container">
                                <img src="./images/find.svg" alt="find">
                            </div>
                            <div class="tex-cont-mobile"><h4>Post a job (it’s
                                    free)</h4>
                                <p>Tell us about your project. WebWorks connects
                                    you
                                    with top talent and agencies around the
                                    world,
                                    or near you.</p></div>
                        </div>
                        <div class="image-text-container">
                            <div class="img-container">
                                <img src="./images/hire.svg" alt="hire">
                            </div>
                            <div class="tex-cont-mobile">
                                <h4>Bids come to you</h4>
                                <p>Get qualified proposals within 24 hours.
                                    Compare
                                    bids, reviews, and prior work. Interview
                                    favorites and hire the best fit.</p>
                            </div>
                            <div class="line"></div>
                        </div>
                        <div class="image-text-container">
                            <div class="img-container">
                                <img src="./images/work.svg" alt="work">
                            </div>
                            <div class="tex-cont-mobile"><h4>Payment simplified</h4>
                                <p>Pay hourly or fixed-price and receive
                                    invoices
                                    through WebWorks. Pay for work you authorize.</p></div>
                        </div>

                        <div class="image-text-container">
                            <div class="img-container">
                                <img src="./images/pay.svg" alt="pay">

                            </div>
                            <div class="tex-cont-mobile"><h4>Collaborate easily</h4>
                                <p>Use WebWorks to chat or video call, share
                                    files,
                                    and track project milestones from your
                                    desktop
                                    or mobile.</p></div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="blank-choose-offering-work-gray">
                <div class="blank-width-container container">
                    <div class="text-choose-ofers-work">
                        <h2>Choose the offering that works best for you</h2>
                    </div>
                    <div class="blank-border">
                        <div class="blank-border-container">
                            <div class="top-container">
                                <h3>Basic</h3>
                                <div class="btn-container">
                                    <a href="./payment.html" class="primary-button">Select
                                        Basic</a>
                                </div>
                                <p><span>100₹</span>/month*</p>

                            </div>
                            <div class="bottom-container">
                                <ul>
                                    <li>Verified work history and reviews</li>
                                    <li>Unlimited proposals</li>
                                    <li>Built-in collaboration tools and easy
                                        payments</li>
                                </ul>

                            </div>

                        </div>
                        <div class="blank-border-container">
                            <div class="top-container">
                                <h3>Plus</h3>
                                <div class="btn-container">
                                    <a href="./payment.html" class="primary-button">Select
                                        Plus</a>
                                </div>
                                <p><span>200₹</span>/month*</p>

                            </div>
                            <div class="bottom-container">
                                <p>Everything in <span> Basic</span>, and:</p>
                                <ul>
                                    <li>Dedicated account managers to help you
                                        find and hire quality talent fast</li>
                                    <li>Project tracking and collaboration tools
                                        for teams</li>
                                    <li>Tailored search results featuring Top
                                        Rated and Rising Talent</li>
                                </ul>
                            

                            </div>

                        </div>
        

                    </div>
                    <div >
                        <p>*3% payment processing and administration fee on all
                            payments to freelancers and agencies.</p>
                        <p>**10% service fee on all payments. Includes payment
                            processing and administration fees.</p>
                    </div>
                </div>


            </div>

            <div class="blank-top-skills-container">

                <div class="width-top-skills-container container">
                    <div class="text-container">
                        <h3>Top Skills</h3>
                    </div>

                    <div class="skills-content">
                        <div class="border-box">
                            <div class="text-skills-border">

                                <div class="text-skills">
                                    <a href="#">Android Developer</a>
                                    <a href="#">Customer Service Representative</a>
                                    <a href="#">Front-End Developer</a>
                                    <a href="#">iOS Developer</a>
                                    <a href="#">Mobile App Developer</a>
                                    <a href="#">Sales Consultant</a>
                                    <a href="#">Software Engineer</a>
                                    <a href="#">Virtual Assistant</a>
                                </div>
                                <div class="text-skills">
                                    <a href="#">Bookkeeper</a>
                                    <a href="#">Database Administrator</a>
                                    <a href="#">Game Developer</a>
                                    <a href="#">Java Developer</a>
                                    <a href="#">PHP Developer</a>
                                    <a href="#">SEO Expert</a>
                                    <a href="#">Technical Writer</a>
                                    <a href="#">Web Designer</a>
                                </div>
                                <div class="text-skills">
                                    <a href="#">Content Writer</a>
                                    <a href="#">Data Scientist</a>
                                    <a href="#">Graphic Designer</a>
                                    <a href="#">JavaScript Developer</a>
                                    <a href="#">Python Developer</a>
                                    <a href="#">Social Media Manager</a>
                                    <a href="#">UI Designer</a>
                                    <a href="#">Wordpress Developer </a>
                                </div>
                                <div class="text-skills">
                                    <a href="#">Copywriter</a>
                                    <a href="#">Facebook Developer</a>
                                    <a href="#">Information Security Analyst</a>
                                    <a href="#">Logo Designer</a>
                                    <a href="#">Resume Writer</a>
                                    <a href="#">Software Developer</a>
                                    <a href="#">UX Designer</a>
                                    <a href="#">Writer</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="blank-trening-skils-container">
                <div class="width-blank-container container">
                    <div class="text-container">
                        <h3>Trending skills</h3>
                    </div>
                    <div class="blank-border">
                        <div class="blank-text-container">
                            <a href="#">Apple UIKit</a>
                            <a href="#">Blockchain</a>
                            <a href="#">GitLab</a>
                            <a href="#">Node.js</a>
                            <a href="#">Scala development</a>
                            <a href="#">Dropbox API</a>
                            <a href="#">Social customer service</a>
                            <a href="#">Proposal writing</a>
                        </div>
                        <div class="blank-text-container">
                            <a href="#">Apple Xcode</a>
                            <a href="#">Customer retention</a>
                            <a href="#">Go development</a>
                            <a href="#">Product photography</a>
                            <a href="#">SCORM</a>
                            <a href="#">iPhone UI design</a>
                            <a href="#">HR consulting</a>
                            <a href="#">Vuforia</a>
                        </div>
                        <div class="blank-text-container">
                            <a href="#">Atlassian Confluence</a>
                            <a href="#">Enterprise architecture</a>
                            <a href="#">Google Cloud Platform</a>
                            <a href="#">Risk management</a>
                            <a href="#">Volusion</a>
                            <a href="#">Vue.js</a>
                            <a href="#">Microsoft Power BI</a>
                            <a href="#">React.js </a>
                        </div>
                        <div class="blank-text-container">
                            <a href="#">Articulate storyline</a>
                            <a href="#">eLearning</a>
                            <a href="#">Google App Engine API</a>
                            <a href="#">Rapid prototyping</a>
                            <a href="#">Tensorflow</a>
                            <a href="#">Genetic algorithms</a>
                            <a href="#">Oculus Rift</a>
                            <a href="#">Instructional design</a>
                        </div>
                    </div>
                </div>
                <div class="blank-btn-container">
                    <div class="btn"></div>
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