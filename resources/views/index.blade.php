@extends('layout')

@yield('content')
    <!--  home section design  -->
    <section class="home" id="home">
                <div class="home-content">
                    <h3>Quick intro</h3>
                    <h1>Rolf Louisdor</h1>
                    <h3>I'm skilled in the following <span class="multiple-text"></span></h3>
                    <p>I've done a lot of Freelancing work ranging from complete lunching new proeduct to new services in Home Improvement space</p>
                    <div class="social-media">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                    <a href="{{ asset('file/Resume.pdf') }}" class="btn" download="Rolf_Louisdor_CS.pdf">Download CV</a>
                </div>

                <div class="home-img">
                    <img src="{{ asset('img/profile-p.png') }}" alt="">
                </div>
            </section>

            <!--  about section design  -->
            <section class="about" id="about">
                <div class="about-img">
                    <img src="img/face-right.png" alt="">
                </div>

                <div class="about-content">
                <h2 class="heading">About <span>Me</span></h2>
                <h3>Backend Software Engineer</h3>
                <h3>Skills</h3>
                <p>
                    <b>Backend Development:</b> Proficient in PHP, Laravel MVC framework, Node.js, Go, and Python for building scalable backend systems and microservices.<br>
                    <b>Database Management:</b> Skilled in MySQL, PostgreSQL, MongoDB, and SQLite with experience designing and optimizing relational and NoSQL data models.<br>
                    <b>API Design & Integration:</b> Experienced in building RESTful APIs, WebSocket APIs, and MQTT-based services for real-time and distributed systems.<br>
                    <b>CI/CD & DevOps:</b> Hands-on experience building CI/CD pipelines and managing deployments using Laravel Forge, Git, and cloud services like Google Cloud SQL and MongoDB Atlas.<br>
                    <b>Machine Learning & Data Processing:</b> Implemented ML models in Python for data analysis and built scraping tools for data acquisition and processing.<br>
                    <b>Mobile App Development:</b> Built Android applications using Kotlin and cross-platform apps using Flutter.<br>
                    <b>Front-End Familiarity:</b> Knowledgeable in HTML5, CSS, Bootstrap, Tailwind CSS, and JavaScript frameworks like React.js for front-end integration.<br>
                    <b>Project Experience:</b> Developed CRM systems, internal tools, and production-grade websites using Laravel, WordPress, Stripe, and Authorized.net.<br>
                    <b>Version Control:</b> Proficient with Git and GitHub for source control, collaboration, and deployment automation.<br>
                    <b>Cloud Infrastructure:</b> Familiar with Google Cloud Platform, MongoDB Atlas, and deployment of scalable web applications.
                </p>
                    <!-- <a href="#" class="btn" id="chatButton">Chat with my AI</a> -->
                    <a href="{{ asset('file/Resume.pdf') }}" class="btn" download="Rolf_Louisdor_CS.pdf">Download CV</a>
                </div>
            </section>

            <!-- Chat Modal -->
            <div id="chatModal" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <h2>Chat with AI modeled after me!</h2>
                    <div class="chat-box">
                        <!-- Chat content goes here -->
                        <p>Hello how can I assist you today?</p>

                    </div>"
                    <input type="text" id="userInput" placeholder="Type your message here...">
                    <button id="sendButton">Send</button>
                </div>
            </div>

            <!--  services section design  -->
            <section class="services" id="skills">
                <h2 class="heading">My <span>Skills</span></h2>

                <div class="services-container">
                    <div class="services-box">
                        <i class="fa-solid fa-code"></i>
                        <h3>Project Development</h3>
                        <p>From lead generation to project development worked with Morgan Exterior Incs on many of their projects!</p>
                        <a href="#" class="btn">Read More</a>
                    </div>

                    <div class="services-box">
                        <i class="fa-solid fa-palette"></i>
                        <h3>Digital Marketing</h3>
                        <p>used my knowledge of Digital marketing to create taloired ads that will generate hot leads!</p>
                        <a href="#" class="btn">Read More</a>
                    </div>

                    <div class="services-box">
                        <i class="fa-brands fa-android"></i>
                        <h3>Product Development</h3>
                        <p>I've worked closely with a company name Green Venture Helped them lunch a new product for building home!</p>
                        <a href="#" class="btn">Read More</a>
                    </div>
                </div>
            </section>

            <!--  services section design  -->
            <section class="portfolio" id="portfolio">
                <h2 class="heading">Latest <span>Projects</span></h2>

                <div class="portfolio-container">
                    <div class="portfolio-box">
                        <img src="img/1.jpg" alt="">
                        <div class="portfolio-layer">
                            <h4>NetReputation</h4>
                            <p>Online Reputation Management company! Helped built their online presence.</p>
                            <a href="https://www.netreputation.com/"><i class="fa-solid fa-up-right-from-square"></i></a>
                        </div>
                    </div>

                    <div class="portfolio-box">
                        <img src="img/2.jpg" alt="">
                        <div class="portfolio-layer">
                            <h4>Morgan Exteriors Inc</h4>
                            <p>Home Improvement company, specilized in Roof, Windows, Siding and Kitching Replacement.</p>
                            <a href="https://www.morganexteriorsinc.com/"><i class="fa-solid fa-up-right-from-square"></i></a>
                        </div>
                    </div>

                    <div class="portfolio-box">
                        <img src="img/3.jpg" alt="">
                        <div class="portfolio-layer">
                            <h4>Sun Protection of Florida</h4>
                            <p>Home Improvement company focused on selling Awnings and Screens.</p>
                            <a href="https://sunprotectionfl.com"><i class="fa-solid fa-up-right-from-square"></i></a>
                        </div>
                    </div>

                    <div class="portfolio-box">
                        <img src="img/4.jpg" alt="">
                        <div class="portfolio-layer">
                            <h4>Mjrealestatesolves</h4>
                            <p>Real Estate Investment firm focused on acquirig SFR.</p>
                            <a href="https://mjrealestatesolves.com"><i class="fa-solid fa-up-right-from-square"></i></a>
                        </div>
                    </div>

                    <div class="portfolio-box">
                        <img src="img/5.jpg" alt="">
                        <div class="portfolio-layer">
                            <h4>Furn-Wharehouse</h4>
                            <p>Furniture store spearheaded their online presence!</p>
                            <a href="https://thefurniturewarehouse.com"><i class="fa-solid fa-up-right-from-square"></i></a>
                        </div>
                    </div>

                    <div class="portfolio-box">
                        <img src="img/6.jpg" alt="">
                        <div class="portfolio-layer">
                            <h4>Sun & Storm Systems</h4>
                            <p>Speared headed their marketing strategy and web presence!</p>
                            <a href="https://sunandstormsystems.com"><i class="fa-solid fa-up-right-from-square"></i></a>
                        </div>
                    </div>
                </div>
            </section>

            <!--  contact section design  -->
            <section class="contact" id="contact">
                <h2 class="heading">Contact <span>Me!</span></h2>

                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('contact.send') }}" method="POST">
                    @csrf
                    <div class="input-box">
                        <input type="text" placeholder="Full Name">
                        <input type="email" placeholder="Email Address">
                    </div>
                    <div class="input-box">
                        <input type="number" placeholder="Mobile Number">
                        <input type="text" placeholder="Email Subject">
                    </div>
                    <textarea name="" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
                    <input type="submit" value="Send Message" class="btn">
                </form>
            </section>
