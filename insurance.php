<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insurance</title>
    <link rel="icon" href="racing.png" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Alegreya:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        h1,
        h2,
        h3 {
            font-family: 'Alegreya', serif;
        }

        body {
            font-family: 'Alegreya', serif;
            margin: 0;
            padding: 0;
            color: #333;
            background: url('https://th.bing.com/th/id/R.27463148c43eb80e422a3ed7fd47d75a?rik=S5OXA30SCz6xXA&riu=http%3a%2f%2fwww.forbesindia.com%2fmedia%2fimages%2f2018%2fMay%2fimg_106009_right_insurance_bgcopy.jpg&ehk=Wg%2fGuJV72uufGr%2f%2fDReS9pl6QpfrKkM1dWNvSddiXD4%3d&risl=&pid=ImgRaw&r=0') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header {
            background-color: #222;
            color: #fff;
            padding: 1px 0;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        nav h1 {
            font-family: cursive;
            display: flex;
            align-items: center;
        }

        nav h1 img {
            height: 50px;
            margin-right: 10px;
            filter: brightness(0) invert(1);
        }

        .nav-links {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
        }

         .nav-links a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
            font-weight: bold;
            font-size: 15px;
            padding: 0 20px;
            position: relative;
        }

        .nav-links a:hover {
            background: linear-gradient(135deg, #11998e, #38ef7d);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .nav-links a:hover::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -2px;
            /* Adjust this value to position the underline */
            width: 100%;
            height: 2px;
            /* Adjust this value to change the thickness of the underline */
            background: linear-gradient(135deg, #11998e, #38ef7d);
        }

        main {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px 0;
        }

        .content {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent background */
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 28px;
            margin-bottom: 20px;
            text-align: center;
        }

        p {
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 15px;
        }

        ul {
            font-size: 16px;
            margin-bottom: 20px;
        }

        li {
            margin-bottom: 8px;
        }

        .cards {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        .card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            margin: 10px;
            padding: 20px;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
        }

        .card img {
            width: 100px;
            height: 100px;
            /* Set a consistent height */
            margin-bottom: 15px;
        }

        .card h3 {
            margin-bottom: 15px;
        }

        .card p {
            margin-bottom: 15px;
        }

        .card a {
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
        }

        .card a:hover {
            text-decoration: underline;
        }

        footer {
            background-color: #222;
            color: #fff;
            text-align: center;
            padding: 30px 0;
            flex-shrink: 0;
        }

        footer h2 {
            font-size: 22px;
            margin-bottom: 15px;
        }

        footer p,
        footer ul,
        footer address {
            margin: 8px 0;
            font-size: 14px;
        }

        .footer-section {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
            display: flex;
            justify-content: space-between;
            text-align: left;
            flex-wrap: wrap;
        }

        .footer-section>div {
            flex: 1;
            margin: 8px;
        }

        .services ul {
            list-style: none;
            padding: 0;
        }

        .services li {
            margin: 8px 0;
            font-size: 14px;
        }

        .services a {
            text-decoration: none;
            color: white;
            font-weight: bold;
        }

        .services a:hover {
            border: 1px solid white;
            padding: 5px 5px;
            margin: 2px 2px;
            border-radius: 5px;
            box-shadow: 0 4px 8px blue;
        }

        .address-section a {
            text-decoration: none;
            color: white;
            font-weight: bold;
        }

        .address-section a:hover {
            border: 1px solid white;
            padding: 5px 5px;
            margin: 5px 5px;
            border-radius: 5px;
            box-shadow: 0 4px 8px blue;
        }

        .auth-links {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
        }

        .auth-links a {
            color: #fff;
            text-decoration: none;
            margin-left: 10px;
            font-weight: bold;
            font-size: 12px;
            border: 3px solid white;
            padding: 7px;
            border-radius: 10px;
        }

         .auth-links a:hover {
            text-decoration: none;
          
            color: white;
            background: linear-gradient(#007bff,#FF02FF);
        }

        .call-support {
            position: fixed;
            bottom: 50px;
            right: 50px;
            z-index: 1000;
        }

        .call-support a {
            display: block;
            width: 60px;
            height: 60px;
            background-color: white;
            border-radius: 50%;
            text-align: center;
            line-height: 60px;
            font-size: 30px;
            text-decoration: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            /* transition: background-color 0.3s; */
        }

        .call-support a:hover {
            /* background-color: burlywood; */
            background: linear-gradient(135deg, #43cea2, #185a9d);


        }
        .call-support img {
            width: 30px;
            height: 30px;
            vertical-align: middle;
        }
        .app-buttons {
            display: flex;
            justify-content: start;
            gap: 10px;
        }

        .app-buttons a img {
            width: auto;
            /* Adjust the width as needed */
            height: 40px;
        }
        .address-section a {
            text-decoration: none;
            color: white;
            font-weight: bold;
        }

        .address-section a:hover {
            border: 1px solid white;
            padding: 5px 5px;
            margin: 5px 5px;
            border-radius: 5px;
            box-shadow: 0 4px 8px blue;
        }

        .social-icons {
            margin-top: 10px;
        }

        .social-icons a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
            font-size: 20px;
        }

        .social-icons a:hover {
            color: rgb(154, 198, 238);
        }
    </style>
</head>

<body>
    <header>
        <div class="container">
            <nav>
                <h1>
                    <img src="racing.png" alt="ThriftTrove Logo">
                    ThriftTrove
                </h1>
                <div class="nav-links">
                    <a href="index.php">Home</a>
                    <a href="services.php">Services</a>
                    <a href="contact.php">Contact Us</a>
                    <a href="selltrade.php">Sell/Trade</a>
                    <a href="financing.php">Financing</a>
                </div>
                <div class="auth-links">
                    <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
                        <a href="logout.php">Logout</a>
                    <?php else: ?>
                        <a href="login.php">Login</a>
                        <a href="register.php">Register</a>
                    <?php endif; ?>
                </div>
            </nav>
        </div>
    </header>
    <main>
        <div class="content">
            <h1>Insurance Information</h1>
            <p>
                At ThriftTrove, we prioritize your peace of mind and the protection of your vehicle investment. That's
                why we offer a variety of comprehensive insurance options tailored to meet your specific needs. Our
                insurance policies cover a wide range of scenarios and provide robust protection to ensure you can enjoy
                your pre-owned vehicle without worries.
            </p>
            <h2>Types of Insurance</h2>
            <ul>
                <li><strong>Comprehensive Coverage:</strong> Protects against theft, vandalism, and damage caused by
                    events other than a collision.</li>
                <li><strong>Collision Coverage:</strong> Covers the cost of repairing or replacing your vehicle if it is
                    damaged in an accident.</li>
                <li><strong>Liability Insurance:</strong> Provides coverage for bodily injury and property damage if you
                    are at fault in an accident.</li>
                <li><strong>Personal Injury Protection:</strong> Covers medical expenses for you and your passengers in
                    the event of an accident.</li>
            </ul>
            <h2>Benefits of Our Insurance</h2>
            <ul>
                <li>Comprehensive coverage options to fit your needs.</li>
                <li>Affordable premiums with flexible payment plans.</li>
                <li>24/7 claims support and customer service.</li>
                <li>Nationwide network of repair shops.</li>
                <li>Additional perks such as rental car coverage and roadside assistance.</li>
            </ul>
            <p>
                Whether you are insuring a luxury sedan or a sports car, our insurance options ensure that you can drive
                with confidence. Contact us today to learn more about our insurance programs and find the coverage
                that's right for you.
            </p>
            <h2>Our Insurance Partners</h2>
            <div class="cards">
                <div class="card">
                    <img src="Acko Insurance.png" alt="Acko Insurance">
                    <h3>Acko Insurance</h3>
                    <p>Reliable and affordable insurance solutions for your vehicle.</p>
                    <a href="https://www.acko.com" target="_blank">Learn More</a>
                </div>
                <div class="card">
                    <img src="https://www.excellusbcbs.com/o/excellus-bcbs-theme/images/color_schemes/excellus/logo.svg"
                        alt="Excellus Insurance">
                    <h3>Excellus Insurance</h3>
                    <p>Comprehensive coverage with excellent customer support.</p>
                    <a href="https://www.excellus.com" target="_blank">Learn More</a>
                </div>
            </div>
        </div>
        
        <div class="call-support">
    <a href="https://wa.me/917972937245">
        <img src="support.png" alt="Call Support">
    </a>
</div>

    </main>
    <footer>
        <div class="footer-section">
            <div>
                <h2>About Us</h2>
                <p>At ThriftTrove, we specialize in connecting buyers and sellers of high-quality, pre-owned vehicles.
                    Our mission is to provide a seamless and trustworthy car reselling experience for all our customers.
                    <br>
                    <a href="moreinfo.php" style="text-decoration: none;color :red">More Info</a>
                </p>
            </div>
            <div class="services">
                <h2>Services</h2>
                <ul>
                    <li><a href="buy.php">Buy a Car</a></li>
                    <li><a href="selltrade.php">Sell a Car</a></li>
                    <li><a href="selltrade.php">Trade-In</a></li>
                    <li><a href="financing.php">Financing</a></li>
                    <li><a href="warranty.php">Warranty</a></li>    
                    <li><a href="insurance.php">Insurance</a></li>
                    <li><a href="loan_calculator.php">Loan Calculator</a></li>
                    <li><a href="faqs.php">FAQ's</a></li>
                    <li><a href="reviewsandnews.php">Reviews & News</a></li>
                    
 
                </ul>
            </div>
            <div>
                
                    <h2>Our Mobile App</h2>
                    <div class="app-buttons">
                        <a href="https://www.apple.com/app-store/" target="_blank">
                            <img src="https://beta.cstatic-images.com/medium/in/v2/static/mobile-apps/app-store-badge-us-black-1.png" alt="Download on the App Store">
                        </a>
                        <a href="https://play.google.com/store" target="_blank">
                            <img src="https://beta.cstatic-images.com/medium/in/v2/static/mobile-apps/google-play-badge-us-1.png" alt="Get it on Google Play">
                        </a>
                    
                </div>
                <h2>Follow Us</h2>
                <address class="address-section">
                    <div class="social-icons">
                        <a href="https://www.facebook.com/share/qBcRgTb8UinKXaRN/?mibextid=qi2Omg" target="_blank"><i
                                class="fab fa-facebook-f"></i></a>
                        <a href="https://x.com/ManjunathGavan3?t=APskPdXRccLGdoV7WE6Shg&s=08" target="_blank"><i
                                class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/manjunath_0724?igsh=Z290bXpod2V6aHVk" target="_blank"><i
                                class="fab fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/in/manjunath-gavandi/?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"
                            target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://www.youtube.com/@fang982" target="_blank"><i class="fab fa-youtube"></i></a>
                        <br>
                        <br>
                    </div>

                </address>
                <h2>Address :</h2>
                <p>HAL QUATERS<br>
                    MARATHAHALLI<br>
                    BENGALURU,560006</p>
            </div>
        </div>
    </footer>

</body>

</html>