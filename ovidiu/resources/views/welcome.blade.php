<!DOCTYPE html>
<html lang="en">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <title>Octavian</title>

        <style>
            body {
                margin: 0;
                padding: 0;
                font-family: Arial, sans-serif;
                font-size: 15px;
                text-align: center;
            }

            .container.me {
                width: 100%;
                margin: 0;
                height: 100%;
                display: contents;
            }

            .container-section,
            .container-services,
            .container-about,
            .container-article,
            .container-team {
                margin: auto;
                text-align: justify;
                border: 1px solid #ddd;
                width: 98%;
                padding: 7px;
            }

            .container-contact {
                text-align: left;
                border: 1px solid #ddd;
                width: 35%;
                padding: 7px;
            }

            header {
                text-align: center;
                padding: 1px;
                height: 53px;
            }

            .navbar ul {
                list-style: none;
                background: #333;
                padding: 0;
                margin: 0;
                text-align: center;
            }

            .navbar li {
                display: inline-block;
            }

            .navbar a {
                text-decoration: none;
                color: #fff;
                width: 100px;
                display: block;
                padding: 20px;
                font-size: 15px;
                font-weight: bold;
                text-align: center;
            }

            .navbar a:hover {
                background-color: rgba(64, 124, 214, 0.5);
            }

            main {
                padding-top: 70px;
            }

            footer {
                padding: 10px;
                margin: 0;
                text-align: center;
                background-color: #333;
                color: white;
                height: 50px;
                line-height: 3.5;
                position: absolute;
                right: 0;
                left: 0;
            }

            /* Responsive styling */
            @media (max-width: 1200px) {
                body {
                    // margin-top: 2px;
                }

                .navbar {
                    position: sticky;
                    right: 0;
                    left: 0;
                    border-radius: 0;
                    top: 0;
                }

                .navbar a {
                    display: inline;
                    padding: 10px;
                    font-size: 15px;
                    font-weight: bold;
                }

                footer {
                    padding: 10px;
                    margin: 0;
                    text-align: center;
                    background-color: #333;
                    color: white;
                    height: 50px;
                    line-height: 3.5;
                    position: absolute;
                    right: 0;
                    left: 0;
                }

                .col-md-6 {
                    width: 80px;
                }

                .container-section,
                .container-services,
                .container-about,
                .container-article,
                .container-team,
                .container-contact {
                    width: 100%;
                }

                .container-contact {
                    width: 55%;
                }
            }

            .am_sters_img {
                display: block;
                margin: 0 auto;
                height: 30px;
                border-radius: 8px;
            }
        </style>
    </head>

    <body>
        <!-- NAVBAR -->
        <nav class="navbar pt-0">
            <div class="container-fluid p-0">
                <ul class="w-100 py-3 py-xl-0">
                    <li><a href="#Home">Home</a></li>
                    <li><a href="#About">About</a></li>
                    <li><a href="#Team">Team</a></li>
                    <li><a href="#Services">Services</a></li>
                    <li><a href="#Contact">Contact</a></li>
                </ul>
            </div>
        </nav>
        <!-- end NAVBAR -->

        <!-- HEADER -->
        <header>
            <h1>Welcome to Octavian's Webside</h1>
            <h4 style="font-family:Lucida Handwriting, monospace;" id="Home">I am a junior web developer</h4>
        </header>
        <!-- END HEADER -->

        <!-- MAIN -->
        <main class="px-3">

            <!-- description section -->
            <section class="container-section">
                <! --<img style="border-radius: 9px;"
                          src="https://media.istockphoto.com/id/1341125608/ro/fotografie/designer-profesionist-de-sex-feminin-care-lucreaz%C4%83-cu-mostre-de-palet%C4%83-de-culori-%C8%99i.jpg?s=1024x1024&w=is&k=20&c=7CbnTCPciLfwiPO8MzEAsUQWtXHaI87fM6mdHNfPo_k="
                          height="350" alt="hello">
                <! --<img style="border-radius: 9px;" id="Home"
                          src="https://media.istockphoto.com/id/1124657354/ro/fotografie/prim-plan-al-profesioni%C8%99tilor-%C3%AEn-design-care-lucreaz%C4%83-la-mas%C4%83-%C3%AEn-birou.jpg?s=1024x1024&w=is&k=20&c=0kMKPCSOFWi5d0aBWJhrWilkcbdPO_MfID8aMVhJHGo="
                          height="350" alt="picture">
                <p> Web Development for Your Online Success</p>
                <p>In today’s digital world, having a well-designed and
                    functional website is essential for any business
                    looking to succeed online.
                    Whether you need a simple landing
                    page or a complex e-commerce platform,
                    a professional website helps showcase
                    your brand, engage your audience, and grow your business.</p>

                <p>Our web development services focus on creating responsive,
                    user-friendly websites that are optimized
                    for both desktop and mobile devices.
                    From design to deployment,
                    we ensure your website meets the
                    latest industry standards for performance, security, and SEO.</p>

                <p>Let us help you bring your business online
                    and reach more customers with a modern,
                    customized website tailored to your needs.</p>
                <! --<img style="border-radius: 9px;"
                      src="https://media.istockphoto.com/id/1407024583/ro/fotografie/decupate-designer-grafic-de-sex-feminin-de-lucru-la-biroul-ei-de-birou.jpg?s=1024x1024&w=is&k=20&c=ZLmtaudu7AcymO_E6nFF9erUAUCr4fRItC7aHh0IvYI="
                      height="350" alt="hello">
                <! --<img style="border-radius: 9px;"
                      src="https://media.istockphoto.com/id/1519641593/ro/fotografie/croitor-femeie-care-lucreaz%C4%83-%C3%AEn-atelierul-de-croitorie-designer-vestimentar-elegant.jpg?s=1024x1024&w=is&k=20&c=ftw50X6cE3lOxK9c5DlTjCK6W56kfnrrBtwZjotvFE8="
                      height="350" alt="picture">
            </section>
            <!-- end description section -->

            <br>
            <br>
            <br>

            <!-- ABOUT section -->
            <section class="container-about">
                <h2 id="About">About Octavian</h2>
                <p>Hello.</p>
                <p> I welcome you with joy in my first
                    steps in creating this site.</p>
                <p> Coming from another field, my knowledge of front-end are at the beginning,
                    but I started to like it a lot, so I'm going
                    to deepen it by taking a few courses.</p>
                <p>Regarding the courses, I only followed the back-end developer ones
                    (Php, MySQL, Laravel) and I can say that I
                    learned interesting things.</p>

                <div class="col">
                    <img
                        src="https://media.istockphoto.com/id/1305999733/ro/fotografie/web-design-desktop.jpg?s=1024x1024&w=is&k=20&c=HTfN3a_CvMs8Vx5xB-coBtpdzpIsij54iRXyU2hmEao="
                        height="150" alt="picture">
                </div>
                <p>As you have realized,
                    I am a Junior Fullstack Web Developer
                    (in the making) and this site will be built
                    step by step under the guidance of a
                    Senior Fullstack Web Developer.</p>
                <p>But what will a Web Architect think?
                    At the moment we are not asking for his opinion. &#128521;</p>
            </section>
            <!-- end ABOUT section -->

            <br>
            <br>
            <br>

            <!-- TEAM section -->
            <article class="container-team" id="Team">
                <h2 id="Team" style="text-align:left;">Team members</h2>
                <br>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col text-center">
                            <div class="img-fluid">
                                <img src="https://web-architect.pro/assets/img/dark-sky-bg.jpg" height="150"
                                     alt="architect">
                                <p class="teamCenter">Tiberiu - Web Architect</p>

                                <br>
                            </div>
                        </div>
                        <div class="col text-center">
                            <div class="img-fluid">
                                <img
                                    src="data:image/jpeg;base64,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"
                                    height="150" alt="senior">
                                <p>Mariana - Fullstack Web Developer</p>
                                <br>
                            </div>
                        </div>
                        <div class="col text-center">
                            <div class="img-fluid">
                                <img style="border-radius: 9px;"
                                     src="https://www.mentionlytics.com/wp-content/uploads/2021/04/Junior-Fullstack-Backend-Developer-career.png"
                                     height="150" alt="junior">
                                <p>Ovidiu- Junior Fullstack Web Developer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <!-- end TEAM section -->

            <br>
            <br>
            <br>

            <!-- SERVICES section -->
            <article class="container-article" id="Services">
                <h2>Our Services</h2>
                <h3>Here are the services Octavian offers:</h3>
                <ul style="list-style-type: square;">
                    <li style="font-family:Lucida Console, monospace; font-size:large;">&#128073;Presentation sites:</li>
                </ul>
                <div class="ps-2 ps-xl-5">
                    <p>We create professional presentation websites for small and large businesses. Our team ensures that each
                        website created is unique and meets the client's specific requirements.</p>
                    <p>A showcase website is essential for any business today.
                        It can be considered the company's digital business card,
                        providing information about products and services
                        as well as contact details for potential customers.</p>
                    <p> With an attractive design and a well-organized
                        structure, a professional presentation website can
                        increase credibility and attract new customers.</p>
                    <p>We are committed to creating showcase websites
                        that are optimized for search engines so that they
                        help businesses appear in the first search results
                        and be easier to find online. </p>
                    <p>We use SEO best practices
                        to ensure your website has quality content, well-written
                        meta titles and descriptions, and the right keywords
                        to help improve your search engine rankings.</p>
                    <p>We also ensure that the website is responsive
                        and works well on mobile devices, which is essential
                        these days as most people access the internet on mobile devices.</p>
                    <p>With a customized approach to each project,
                        we can create a presentation website that matches
                        the company's visual identity and meets the specific
                        requirements of our clients.</p>
                </div>
                <br>

                <ul style="list-style-type: square;">
                    <li style="font-family:Monaco, Fantasy; font-size:large;">&#128073;Online shops:</li>
                </ul>
                <div class="ps-2 ps-xl-5">
                    <p>A professional online store is essential for any
                        business that wants to expand its business and reach
                        new customers. With an attractive design and well-organized
                        functionality, a professional online store can increase sales
                        and strengthen the reputation of the business.</p>

                    <p>We are committed to creating professional online
                        stores that are search engine optimized to help
                        businesses appear in the top search results and be
                        easier to find online.</p>
                    <p> We also ensure that the online store is responsive
                        and works well on mobile devices, which is essential
                        these days as most people access the internet from mobile devices.</p>

                    <p>We ensure that the online store is secure
                        and all transactions are protected so
                        that customers feel safe when shopping online.</p>

                    <p>With a customized approach to each project,
                        we can create a professional online store that
                        matches the company's visual identity and meets
                        the specific requirements of its customers.</p>
                </div>
                <br>

                <ul style="list-style-type: square;">
                    <li style="font-family:Verdana, Serif; font-size:large;">&#128073;Graphic design:</li>
                </ul>
                <div class="ps-2 ps-xl-5">
                    <p>Whether you need a new logo or
                        an advertising campaign with banners and flyers,
                        our team of professional designers can help you
                        develop your brand image and differentiate yourself
                        from the competition.</p>

                    <p>Each graphic design project is unique and
                        customized to fit your business needs and
                        values. We ensure that every element, from your
                        logo to banner ads, successfully communicates
                        your message and seamlessly integrates with your
                        business's visual identity.</p>

                    <p>Whether you're a new business looking
                        to develop their brand image or an existing
                        business looking to update their design, we're
                        here to help you achieve the best possible graphic
                        design. We are dedicated to providing high quality
                        graphic design solutions to help you differentiate
                        and stand out in the market.</p>
                </div>
            </article>
            <!-- end SERVICES section -->

            <br>
            <br>
            <br>

            <!-- CONTACT section -->
            <section class="container-contact w-100" id="Contact">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="w-100 text-start text-md-center">Get in touch</h4>
                            <hr>
                        </div>
                        <div class="col-md-6">
                            <div class="address">

                                <h5>Address:</h5>
                                <ul class="list-unstyled">
                                    <li> Customer Relations</li>
                                    <li> Arges</li>
                                    <li>Romania</li>
                                </ul>

                            </div>
                            <div class="email">
                                <h5>&#128236; Email:</h5>
                                <ul class="list-unstyled">
                                    <li> admin@email.com</li>
                                    <li> info@email.com</li>
                                </ul>
                            </div>
                            <div class="phone">
                                <h5>&#128242;Phone:</h5>
                                <ul class="list-unstyled">
                                    <li> +91- 8800XXXXXX34</li>
                                    <li> +91- 8800XXXXXX34</li>
                                </ul>
                            </div>

                            <div class="social">
                                <ul class="list-inline list-unstyled">
                                    <li class="list-inline-item">
                                        <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#"><i class="fa fa-youtube-play fa-2x"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-5 text-right">
                            <h3>Contact Form</h3>

                            <form role="form" class="contact-form" id="contact-form" name="contactformfree" method="post" action="free_process.php" onsubmit="return validate.check(this)">
                                <div class="form-group">
                                    <label for="fullName">Full Name :</label>
                                    <input type="text" class="form-control" name="Full_Name" id="Full_Name" aria-describedby="emailHelp" placeholder="Full Name" required="">
                                </div>

                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control" name="Email_Address" id="Email_Address" aria-describedby="emailHelp" placeholder="Email" required="">
                                </div>


                                <div class="form-group">
                                    <label for="mobile">Mobile No :</label>
                                    <input type="number" class="form-control" name="Full_Name2" id="Full_Name2" aria-describedby="emailHelp" placeholder="Mobile No." required="">
                                </div>

                                <div class="form-group">
                                    <label for="messages">Messages :</label>
                                    <textarea class="form-control" name="Your_Message" id="Your_Message" rows="5"></textarea>
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary">Send</button>
                                <a href="#Home">&#128285;</a>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end CONTACT section -->

        </main>
        <!-- end MAIN -->

        <!-- FOOTER -->
        <footer class="footer pt-0 mt-2">
            <div class="w-100">
                &copy;<script>document.write(new Date().getFullYear())</script>
                Octavian Company. All rights reserved.
            </div>
        </footer>
        <!-- end FOOTER -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
    </body>
</html>


