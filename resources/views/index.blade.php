@extends('layout')

@yield('content')
    <!--  home section design  -->
    <section class="home" id="home">
                <div class="home-content">
                    <h3>Quick intro</h3>
                    <h1>Rolf Louisdor</h1>
                    <h3>I've built my career as <span class="multiple-text"></span></h3>
                    <p>I've done a lot of Freelancing work ranging from complete lunching new proeduct to new services in Home Improvement space</p>
                    <div class="social-media">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                    <a href="{{ asset('file/Rolf_Louisdor_Marketing_Director.pdf') }}" class="btn" download="Rolf_Louisdor_Marketing_Director.pdf">Download CV</a>
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
                    <h3>Director Marketing</h3>
                    <h3>Skills</h3>
                    <p>
                        <b>Strategic Marketing Management:</b> Proven experience in developing and executing comprehensive marketing plans to increase brand awareness and drive growth.<br>
                        <b>Leadership and Team Management:</b> Strong leadership skills to motivate and guide team members to achieve marketing goals and objectives.
                        <b>Customer Relationship Management:</b> Ability to build and maintain strong relationships with customers to drive loyalty and retention.

                        <b>Communication and Networking:</b> Excellent communication, networking, and relationship-building skills to interact effectively with various stakeholders, clients, and team members.
                        <b>Market Analysis:</b> Ability to monitor market trends and competitors to identify opportunities for growth and improvement.
                        <b>Project Management:</b> Skilled in coordinating and managing projects, including budget management, timeline adherence, and resource allocation.
                        <b>Digital Marketing: </b> Proficient in utilizing digital marketing strategies, including social media, content marketing, and SEO to enhance online presence and engagement.
                        <b>Data Analysis:</b> Experienced in tracking and analyzing marketing data to measure success, identify trends, and make data-driven decisions.
                        <b>Creative Problem Solving:</b> Strong ability to develop innovative solutions to overcome challenges and achieve marketing objectives.
                        <b>Event Planning and Execution:</b> Experience organizing and participating in events, exhibitions, and trade shows to promote services and engage with target audiences.
                    </p>
                    <!-- <a href="#" class="btn" id="chatButton">Chat with my AI</a> -->
                    <a href="{{ asset('file/Rolf_Louisdor_Marketing_Director.pdf') }}" class="btn" download="Rolf_Louisdor_Marketing_Director.pdf">Download CV</a>
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
