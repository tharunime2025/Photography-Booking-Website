</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="homestyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <title>Your Website</title>
</head>
<body>
    <header class="main-header">
        <div class="logo">
            <img src="lg1.png" alt="Your Logo">
        </div>
        <div class="nav-toggle" id="navToggle">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
        <nav class="navbar">
            <a href="homeindex.php" class="nav-link">Home</a>
            <a href="gallary.php" class="nav-link">Click & Cherish</a>
            <a href="packages.php" class="nav-link">Catalog</a>
            <a href="reachoutform1.php" class="nav-link">Reach Out</a>
            <a href="ourstory.php" class="nav-link">Our Story</a>

        </nav>
    </header>

    <div class="second-header">
        <nav class="navbar">
            <a href="homeindex.php" class="nav-link">Home</a>
            <a href="gallary.php" class="nav-link">Click & Cherish</a>
            <a href="packages.php" class="nav-link">Catalog</a>
            <a href="reachoutform1.php" class="nav-link">Reach Out</a>
            <a href="ourstory.php" class="nav-link">Our Story</a>

        </nav>
    </div>

    <div class="section1">
        <div class="container">
            <div class="description">

            <h2 class="section-title1">Who Are We</h2>
            <p>We are a team of passionate photographers dedicated to capturing moments that tell stories. With years of experience in the field, we strive to deliver high-quality, creative, and captivating images that leave a lasting impression.</p>
            <p>Our unique perspective and attention to detail set us apart, allowing us to create stunning visuals that resonate with our clients and their audiences. Whether it's a wedding, a portrait session, or a special event, we bring a blend of artistry and technical expertise to every project.</p>
            </div>
        </div>

        <div class="slideshow-container">
            <div class="mySlides fade">
                <img src="W1.jpg" style="width:100%">
                <div class="slide-caption">Wedding</div>
            </div>

            <div class="mySlides fade">
                <img src="E7.jpg" style="width:100%">
                <div class="slide-caption">Event</div>

            </div>

            <div class="mySlides fade">
                <img src="G5.jpg" style="width:100%">
                <div class="slide-caption">Graduation</div>

            </div>

            <div class="mySlides fade">
                <img src="B2.jpg" style="width:100%">
                <div class="slide-caption">Birthday</div>

            </div>
        </div>          
    </div>

  <!-- Add this code after the closing </div> of section1 -->
  
    <div class="new-section">
        <div class="left-side1">
        <h2 class="section-title2">Capture Your Moments with Us</h2>
        </div>
        <div class="clear"></div>

        <div class="right-side1">
            <div class="button-description">
            <p>Elevate your special occasions with our professional photography services. Our skilled photographers have an eye for detail, ensuring every moment is beautifully preserved. From weddings to family portraits, we specialize in creating timeless memories that you'll cherish forever. Book a session with us and let us bring your vision to life.</p>
            </div>
            <a href="packages.php">
            <button class="button button3">Book Now</button>
             </a>
         </div>
    </div><br>
    
    <div class="custom-section">
    <div class="left-side-image-custom">
        <img src="vvv.jpg" alt="Image Description" style="width: 700px; height: auto;">
    </div>
    <div class="clear"></div>

    <div class="right-side-content-custom">
        <h2 class="section-title-custom">Get In Touch</h2>
        <p class="description-custom">
        </p>
        <div class="button-description-custom">
            <p>Reach out to us with any questions, project ideas, or simply to say hello. Our dedicated team guarantees a seamless and enjoyable photography experience, delivering excellent service. Feel free to contact us using the information below. We're looking forward to connecting with you!</p>
        </div>
        <a href="reachoutform1.php">
            <button class="button button-custom">Reach Out</button>
        </a>
    </div>
    <div class="clear-custom"></div>
</div>



    <!-- Add the rest of your content (vertical-icon-bar, footer, script) here -->
    <div class="vertical-icon-bar">
        <a href="https://www.facebook.com/oculaaphotography" target="_blank"><i class="fab fa-facebook-f"></i></a>
        <a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter" ></i></a>
        <a href="https://instagram.com/oculaa_photography?igshid=YmMyMTA2M2Y" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
        <a href="https://wa.me/message/R25V54AXKKW6H1" target="_blank"><i class="fab fa-whatsapp" ></i></a>

    </div>


    <script src="homescript.js"></script>
    <?php include 'footer.php'; ?>

</body>
</html>
