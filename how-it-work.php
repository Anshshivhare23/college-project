<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>how it works</title>
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
        <div class="how-it-work-banner">
            <div class="background-img" style="background-image:
                    url('./images/hero.svg');"></div>
            <div class="jumbo-tron">
                <div class="how-it-work-text-conttainer container">
                    <div class="text-container">
                        <h2>How It Works</h2>
                        <p>An overview of how work happens on WebWorks.</p>
                        <div class="btn-container">
                            <a href="#" id="downloadButton" class="primary-button">Download Report</a>
                        </div>
                    </div>
                    <div class="nav-bottom">
                        <div class="btn-container"><a href="#">If you're
                                hiring</a></div>
                        <div class="btn-container"><a href="#">If you're
                                working</a></div>
                        <div class="btn-container"><a href="#">FAQs</a></div>
                    </div>
                </div>

            </div>

        </div>
        <div class="easily-quality-matches">
            <div class="width-container">
                <div class="top-container">
                    <div class="text-container">
                        <h2>Easily find quality matches</h2>
                    </div>
                </div>
                <div class="bottom-container">
                    <div class="left-container">
                        <p>On WebWorks you’ll find a range of top freelancers
                            and
                            agencies, from developers and development
                            agencies
                            to designers and creative agencies, copywriters,
                            campaign managers, marketing agencies and
                            marketers,
                            customer support reps, and more.</p>
                        <ul>
                            <li> <b>Start by posting a job.</b>Tell us about
                                your project and the specific skills
                                required.
                                <a href="#"> Learn how.</a>
                            </li>
                            <li><b>WebWorks analyzes your needs. </b> Our
                                search
                                functionality uses data science to highlight
                                the
                                best freelancers and agencies based on their
                                skills, helping you find talent that’s a
                                good
                                match.</li>
                            <li> <b>We send you a shortlist of likely
                                    candidates.</b>You can also search our
                                site
                                for specialized freelancers and professional
                                agencies who can view your job and submit
                                proposals too.</li>
                        </ul>
                        <div class="bottom-link">
                            <div class="btn-container"><a href="#">Will
                                    WebWorks screen the proposals I receive?</a>
                                <div class="rotate">
                                    <div class="border"></div>
                                </div>
                            </div>
                            <div class="btn-container"><a href="">Can WebWorks
                                    help find freelancers and agencies for
                                    me?</a>
                                <div class="rotate">
                                    <div class="border"></div>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="right-container">
                        <div class="img-container">
                            <img src="./images/find-CL.svg" alt="find-CL">
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="hire-the-best">
            <div class="width-container">
                <div class="left-container">
                    <div class="img-container"><img src="./images/hiree.svg" alt="hir"></div>
                </div>
                <div class="right-container">
                    <div class="top-container">
                        <h2>Hire the best</h2>
                    </div>
                    <div class="bottom-container">
                        <p>Invite favorite candidates to submit bids, then
                            review and hire your favorite.</p>
                        <ul>
                            <li><b>Browse profiles. </b>View finalists’
                                WebWorks profiles to see client ratings,
                                portfolios, Job Success scores, and more
                            </li>
                            <li><b>Review proposals.</b>Evaluate bids,
                                taking into account their qualifications,
                                thought process, timeline, and overall cost.
                                <a href="#">Learn how.
                                </a>
                            </li>
                            <li><b>Schedule a chat.</b>Ask specific
                                questions, determine who’s the best fit, and
                                contract. </li>
                        </ul>
                        <div class="bottom-link">
                            <div class="btn-container"> <a href="">What do I
                                    look for when hiring on WebWorks</a>
                                <div class="border-row"></div>
                            </div>
                            <div class="btn-container"><a href="#">How do I
                                    hire on WebWorks</a>
                                <div class="border-row"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="work">
            <div class="width-container">
                <div class="left-container">
                    <div class="top-container">
                        <h2>Work efficiently, effectively.</h2>
                    </div>
                    <div class="bottom-container">
                        <div class="text-containr">
                            <p>Each project includes an online workspace
                                shared by your team and your
                                freelancer or agency, allowing you to:</p>
                            <ul>
                                <li><b>Send and receive files. </b>Deliver
                                    digital assets in a secure environment.</li>
                                <li><b>Share feedback in real time. </b>Use
                                    WebWorks Messages
                                    to communicate via text, chat, or video.
                                    <a href="#"> Learn how.</a>
                                </li>
                                <li><b>Use our mobile app. </b>Many features
                                    can be accessed on your mobile phone
                                    when on the go.</li>
                            </ul>

                            <div class="link-bottom">
                                <a href="#">How do I know I am being billed
                                    accurately for my project?</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right-container">
                    <div class="img-container">
                        <img src="./images/worke.svg" alt="worke">
                    </div>

                </div>
            </div>

        </div>
        <div class="pay">
            <div class="width-container">
                <div class="left-container">
                    <div class="img-container">
                        <img src="./images/payment.svg" alt="payment">
                    </div>
                </div>
                <div class="right-container">
                    <div class="top-container">
                        <h2>Pay easily, with peace of mind</h2>
                    </div>
                    <div class="bottom-container">
                        <p>Pay by the hour, or a fixed price for the entire
                            project. On fixed-price jobs, use our licensed
                            escrow service to release funds as pre-set
                            milestones are met.</p>
                        <ul>
                            <li><b>Simplified global payments. </b>We deliver payments to freelancers and agencies in
                                over 170 countries.</li>
                            <li><b>Includes WebWorks Payment Protection. </b>Only pay for work you authorize.</li>
                            <li><b>Invoicing and reporting. </b>Access your invoices and transaction history on
                                WebWorks.</li>
                        </ul>
                        <div class="bottom-link">
                            <a href="#">How do I pay and what does it cost?</a>
                            <a href="#">Can I get an official invoice?</a>
                            <a href="#">Do I have to file tax forms?</a>
                        </div>
                    </div>
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