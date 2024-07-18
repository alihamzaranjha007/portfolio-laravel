<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Portfolio Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />

       
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <header class="header">
        <a href="#" class="logo">Port<span>folio</span></a>

        <i class='bx bx-menu' id="menu-icon"></i>
        <nav class="navbar">
            <a href="#home" class="active">Home</a>
            <a href="#about">About</a>
            <a href="#services">Services</a>
            <a href="#portfolio">Portfolio</a>
            <a href="#contact">Contact</a>

        </nav>
    </header>

    <!-- home section design -->
    <section class="home" id="home">
        <div class="home-content">
            <h3>Hello, It's Me</h3>
            <h1>Ali Hamza Ranjha</h1>
            <h3>And I'm a <span class="multiple-text"></span></h3>
            <p>Welcome to my portfolio website, where creativity meets innovation. Explore my work and journey in the world of design and technology</p>
            <div class="social-media">
                <a href="https://web.facebook.com/your.Inoxcent/" target="_blank"><i class='bx bxl-facebook' ></i></a>
                <a href="https://www.instagram.com/alihamza1051/" target="_blank"><i class='bx bxl-instagram-alt' ></i></a>
                <a href="http://www.linkedin.com/in/ali-hamza-ranjha/" target="_blank"><i class='bx bxl-linkedin' ></i></a>
                <a href="https://github.com/alihamzaranjha007" target="_blank"><i class='bx bxl-github' ></i></a>
            </div>
            <a href="../documents/Ali-Hamza-Ranjha.pdf" class="btn">Download CV</a>
        </div>

        <div class="home-img">
            <img src="{{ url('/images/profile.png')}}" alt="Portfolio-image">
        </div>
    </section>

    <!-- about section design -->
    <section class="about" id="about">
        <div class="about-img">
            <img src="../images/about.png" alt="about-image">
        </div>
        <div class="about-content">
            <h2 class="heading">About <span>Me</span></h2>
            <h3>Front-end Developer</h3>
            <!-- <h3>And I'm a <span class="multiple-text"></span></h3> -->
            <p>Front-End Developer with a passion for crafting visually stunning and highly responsive web
                experiences. Have good understanding of design principles. Proficient in the latest web, mobile app
                technologies and frameworks, with a keen eye for design aesthetics. Strong collaborator and
                problem-solver, dedicated to delivering user-centric solutions that enhance digital presence and
                drive engagement.
                </p>
            <a href="#" class="btn">Read More</a>
        </div>
    </section>

    <!-- services section design  -->
    <section class="services" id="services">
        <h2 class="heading">Our <span>Services</span></h2>
        <div class="services-container">
            <div class="services-box">
                <i class='bx bx-code-alt'></i>
                <h3>Web Development</h3>
                <p>Passionate web developer with expertise in front-end and back-end technologies. Proficient in HTML, CSS, JavaScript, and various web development frameworks.</p>
                <!-- <a href="#" class="btn">Read More</a> -->
            </div>

            <div class="services-box">
                <i class='bx bxs-paint' ></i>
                <h3>Graphic Designing</h3>
                <p>Creative graphic designer with a flair for visual storytelling. Proficient in Adobe Creative Suite and experienced in delivering eye-catching designs.</p>
                <!-- <a href="#" class="btn">Read More</a> -->
            </div>

            <div class="services-box">
                <i class='bx bxl-android' ></i>
                <h3>Android</h3>
                <p>Experienced Android developer proficient in Java and Flutter, crafting high-quality mobile apps with a focus on performance and user experience.</p>
                <!-- <a href="#" class="btn">Read More</a> -->
            </div>

        </div>
    </section>

    <!-- portfolio section design  -->
    <section class="portfolio" id="portfolio">
        <h2 class="heading">Latest <span>Projects</span></h2>

        <div class="portfolio-container">
          
            <div class="portfolio-box">
                <img src="./images/ecommerce.PNG" alt="">
                <div class="portfolio-layer">
                    <h4>Web Development</h4>
                <p>It is Front-End of an ecommerce store created using React Js library.</p>
                <a href="https://alihamzaranjha007.github.io/ecommerce/" target="_blank"><i class='bx bx-link-external' ></i></a>
                </div>
            </div>

            <div class="portfolio-box">
                <img src="./images/agency.png" alt="">
                <div class="portfolio-layer">
                    <h4>Web Development</h4>
                <p>It is agency website to sell different type of hosting pakeges and show some skills.</p>
                <a href="https://alihamzaranjha007.github.io/agencywebsite/" target="_blank"><i class='bx bx-link-external' ></i></a>
                </div>
            </div>

            <div class="portfolio-box">
                <img src="./images/photoapp.png" alt="">
                <div class="portfolio-layer">
                    <h4>Web Development</h4>
                <p>A five pages website named as photoapp to store pictures and edit pictures. It is a static website.</p>
                <a href="https://alihamzaranjha007.github.io/photo-app/" target="_blank"><i class='bx bx-link-external' ></i></a>
                </div>
            </div>

            <div class="portfolio-box">
                <img src="./images/health-file.png" alt="">
                <div class="portfolio-layer">
                    <h4>Android Development</h4>
                <p>And android application to store medical records of patients like reports and access anytime anywhere.</p>
                <a href="https://github.com/alihamzaranjha007/Health-File" target="_blank"><i class='bx bx-link-external' ></i></a>
                </div>
            </div>

            <div class="portfolio-box">
                <img src="./images/music.png" alt="">
                <div class="portfolio-layer">
                    <h4>Android Development</h4>
                <p>Music Player android application with simple UI and basic fuctionalities.</p>
                <a href="https://github.com/alihamzaranjha007/Music-Player" target="_blank"><i class='bx bx-link-external' ></i></a>
                </div>
            </div>

            <!-- <div class="portfolio-box">
                <img src="./images/photoapp.png" alt="">
                <div class="portfolio-layer">
                    <h4>Web Design</h4>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officiis maxime, quos architecto dicta corrupti ipsum.</p>
                <a href="#"><i class='bx bx-link-external' ></i></a>
                </div>
            </div>

            <div class="portfolio-box">
                <img src="./images/photoapp.png" alt="">
                <div class="portfolio-layer">
                    <h4>Music Player</h4>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officiis maxime, quos architecto dicta corrupti ipsum.</p>
                <a href="#"><i class='bx bx-link-external' ></i></a>
                </div>
            </div>

            <div class="portfolio-box">
                <img src="images/photoapp.png" alt="">
                <div class="portfolio-layer">
                    <h4>Web Design</h4>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officiis maxime, quos architecto dicta corrupti ipsum.</p>
                <a href="#"><i class='bx bx-link-external' ></i></a>
                </div>
            </div> -->

        </div>
    </section>

    <!-- contact us section design  -->
    <section class="contact" id="contact">
        <h2 class="heading">Contact <span>Me!</span></h2>
        <form action="https://formsubmit.co/6e411aacbbdcd0ef1597d5a9ba2ae9ba" method="POST">
            <div class="input-box">
               <input type="text" name="name" placeholder="Full Name" required>
                <input type="email" name="email" placeholder="Email Address" required>
            </div>
            <div class="input-box">
                 <input type="number" name="number" placeholder="Mobile Number">
                <input type="text" name="subject" placeholder="Subject" required>
            </div>
            <input type="hidden" name="_captcha" value="false">
            <input type="hidden" name="_next" value="https://alihamzaranjha007.github.io/portfolio/thanks.html">
            <textarea name="Message" id="" cols="30" rows="10" placeholder="Your Messge" required></textarea>
            <input type="submit" value="Send Message" class="btn">
        </form>
    </section>

    <!-- footer section design  -->
    <footer class="footer">
        <div class="footer-text">
            <p>Copyright &copy; 2023 by <span>Ali Hamza Ranjha</span> | All Rights Reserved.</p>
        </div>
        <div class="footer-iconTop">
            <a href="#home">
                <i class='bx bx-chevron-up' ></i>
            </a>
        </div>
    </footer>


    <!-- typing text script  -->
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    <!-- scroll reveal script  -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <!-- custom script -->
    <script src="../js/script.js"></script>
    </body>
</html>
