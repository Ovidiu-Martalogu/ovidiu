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
            @include('partials.team')
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


