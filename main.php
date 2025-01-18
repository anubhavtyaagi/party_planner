<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>musiccollabhub.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* Global Styles */
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f7f7f7;
            color: #333;
            min-height: 100vh;
            overflow-x: hidden; /* Prevent horizontal scroll */
            padding-top: 80px; /* Prevent content overlap with navbar */
        }

        /* Navbar Styles */
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: transparent;
            padding: 10px 0;
            z-index: 1000;
            background-color: rgba(0, 0, 0, 0.3);
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease;
            display: flex;
            justify-content: center; /* Centers the navbar items */
        }

        .navbar ul {
            list-style: none;
            margin: 0;
            padding: 0;
            text-align: center;
            display: flex; /* Align items in a row */
        }

        .navbar img.logo {
            height: 40px;
            margin-left: 20px;
        }

        .navbar li {
            display: inline-block;
            margin: 0 15px;
        }

        .navbar a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
            position: relative;
            transition: color 0.3s ease;
        }

        .navbar a::before {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: #fff;
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }

        .navbar a:hover::before {
            transform: scaleX(1);
        }

        .navbar a:hover {
            color: #f0f0f0;
        }

        .login-links {
            position: absolute;
            top: 50%;
            right: 20px;
            transform: translateY(-50%);
        }

        .login-links a {
            color: #fff;
            text-decoration: none;
            margin-left: 15px;
            font-weight: bold;
        }

        .login-links a:hover {
            color: #f0f0f0;
        }

        /* Hero Section Styles */
        .hero-section {
            background-image: url('https://www.nist.gov/sites/default/files/styles/960_x_960_limit/public/images/2019/09/12/crowdofpeople.jpg?itok=9bSwoLUL');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: #fff;
            animation: fadeIn 1s ease;
        }

        .hero-section h1 {
            font-size: 3em;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            animation: slideInFromTop 1s ease;
        }

        .hero-section p {
            font-size: 1.2em;
            max-width: 600px;
            margin-bottom: 40px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
            animation: slideInFromBottom 1s ease;
        }

         /* About Us Section Styles */
         .about-us-section {
            padding: 50px 20px;
            background-color: #fff;
            text-align: center;
            margin-top: 100px;
            opacity: 0;
            animation: fadeInUp 1s ease forwards;
        }

        .about-us-section h2 {
            font-size: 2.5em;
            margin-bottom: 30px;
        }

        .about-us-section p {
            font-size: 1.1em;
            line-height: 1.6;
            max-width: 800px;
            margin: 0 auto 30px auto;
        }

         /* Key Features Section Styles */
         .key-features-section {
            padding: 50px 20px;
            text-align: center;
            margin-top: 100px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
        }

        .key-features-heading {
            width: 100%;
            text-align: center;
            margin-bottom: 30px;
            animation: fadeInFromLeft 1s ease;
        }

        .key-features {
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-wrap: wrap;
            max-width: 1200px;
            margin: 0 auto;
        }

        .key-feature {
            flex: 1;
            max-width: 300px;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            margin: 10px;
            opacity: 0;
            animation: fadeIn 1s ease forwards;
        }

        .key-feature:hover {
            transform: translateY(-5px);
        }

        .key-feature h3 {
            font-size: 1.5em;
            margin-bottom: 10px;
        }

        .key-feature p {
            font-size: 1.1em;
            line-height: 1.6;
        }
        /* Footer Styles */
        footer {
            background-color: transparent;
            color: black;
            padding: 30px 20px;
            text-align: center;
            margin-top: 50px;
        }

        footer p {
            margin: 10px 0;
            font-size: 1.1em;
            color: black;
        }

        footer a {
            color: black;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        footer a:hover {
            color: #f0f0f0;
        }

        /* Keyframe Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes slideInFromTop {
            from {
                transform: translateY(-100px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes slideInFromBottom {
            from {
                transform: translateY(100px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes slideInFromLeft {
            from {
                transform: translateX(-100px);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar">
        <img src="logo.png" class="logo" alt="Logo">
        <ul>
            <li><a href="#" class="selected">Home</a></li>
            <li><a href="submit_event.php">Book now</a></li>
            <li><a href="faq.php">FAQ'S</a></li>
        </ul>
        <div class="login-links">
            <a href="login.php">Login</a>
            <a href="signup.php">Signup</a>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <h1>Welcome to Celebrations</h1>
        <p>Crafting moments to memories.</p>
    </section>

        <!-- Key Features Section -->
        <section class="key-features-section">
        <div class="key-features-heading">
            <h2>Our Key Features</h2>
        </div>
        <div class="key-features">
            <div class="key-feature">
                <h3>Unique Themes</h3>
                <p>Our themes cater to all kinds of celebrations, offering personalized services to make your event stand out.</p>
            </div>
            <div class="key-feature">
                <h3>Professional Setup</h3>
                <p>We provide complete event setups, from stage design to lighting and audio-visual solutions.</p>
            </div>
            <div class="key-feature">
                <h3>Creative Solutions</h3>
                <p>Our team brings innovative ideas to the table, ensuring your event is memorable and unique.</p>
            </div>
            <div class="key-feature">
                <h3>Old Age Celebrations</h3>
                <p>We organize heartfelt parties for older adults, ensuring their special moments are celebrated with love and care.</p>
            </div>
            <div class="key-feature">
                <h3>Gifts for Guests</h3>
                <p>Every invited guest receives a special gift, ensuring they leave the event with a cherished memory.</p>
            </div>
            <div class="key-feature">
                <h3>Exclusive Trips</h3>
                <p>We offer exclusive trips for your family and friends, making your celebrations even more unique and adventurous.</p>
            </div>
        </div>
    </section>
    
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://media.istockphoto.com/id/501387734/photo/dancing-friends.jpg?s=612x612&w=0&k=20&c=SoTKXXMiJYnc4luzJz3gIdfup3MI8ZlROFNXRBruc10=" class="d-block w-100" style="object-fit: cover;">
                </div>
                <div class="carousel-item">
                    <img src="https://www.shutterstock.com/image-photo/summer-festival-crowd-view-girl-600nw-622013237.jpg" class="d-block w-100" style="object-fit: cover;">
                </div>
                <div class="carousel-item">
                    <img src="https://cdn.pixabay.com/photo/2019/10/15/03/16/black-and-white-4550471_1280.jpg" class="d-block w-100" style="object-fit: cover;" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <!-- Add Background Music -->
    <audio autoplay loop>
        <source src="jazz.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>

     <!-- About Us Section -->
     <section class="about-us-section">
        <h2>About Us</h2>
        <p>At Celebrations, we believe in turning every celebration into a cherished memory. Specializing in event management for weddings, birthdays, youth parties, retirement celebrations, and more, we bring creativity and passion into every event. We also organize events for older adults, ensuring their parties are meaningful and memorable.</p>
    </section>



    <!-- Footer -->
    <footer>
    <p>Made with ❤️ in Noida</p>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
      <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8"/>
    </svg> anubhavtyaagi <br>
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
      <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
    </svg> anubhavtyagii
    <p>© all rights are reserved</p>
  </footer>
  
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
