<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hrn website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

</head>

<body>

    <main class="wrapper">
        <?php include 'header.php' ?>


        <section class="hero-section" data-aos="fade-up" data-aos-duration="700">
            <div class="container-fluid">
                <div class="row flex-column-reverse flex-lg-row align-items-center relative">

                    <div class="col-lg-6 d-flex justify-content-center" data-aos="flip-right" data-aos-duration="700">
                        <div class="d-flex flex-row">
                            <div class="d-flex flex-column align-items-center sm-justify-content-center px-4 px-md-5"
                                data-aos="fade-right" data-aos-duration="1000">
                                <div class="d-flex flex-column space-y-12">
                                    <a href="https://www.linkedin.com/company/hrntechsolutions" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="https://twitter.com/hrntechsolutions" class="social-icon"><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.instagram.com/hrntechsolutions" class="social-icon"><i class="fab fa-instagram"></i></a>
                                    <a href="https://www.facebook.com/hrntechsolutions" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                                </div>
                                <a class="d-flex flex-column align-items-center d-none d-md-flex mt-5 text-dark text-decoration-none"
                                    href="#features">
                                    <span class="scroll-dot mb-2"></span>
                                    <span class="scroll-line"></span>
                                    <span class="scroll-text">SCROLL</span>
                                </a>
                            </div>

                            <div class="">
                                <div class="d-flex align-items-center mb-4">
                                    <div class="line me-2"></div>
                                    <div class="dot-wave me-2 position-relative">
                                        <div class="shado-wave"></div>
                                    </div>
                                    <span class="text-secondary fw-semibold">Innovation</span>
                                </div>

                                <h1 class="heading-wrapper mb-4 " data-aos="fade-right" data-aos-duration="900">
                                    <span class="animated-text">Empowering </span>
                                    <span class="text-danger">
                                        <span class="animated-text">Your </span>
                                        <br class="d-md-none d-sm-none" />
                                        <span class="animated-text">Business </span>
                                    </span>
                                    <span class="animated-text">Digitally.</span>
                                </h1>

                                <p class="text-wrapper" data-aos="fade-right" data-aos-duration="900">
                                    At HRN Tech Solutions, we deliver cutting-edge web design, development, and marketing strategies
                                    that help brands stand out, connect with audiences, and achieve measurable growth.
                                </p>

                                <div
                                    class="d-flex flex-column flex-md-row align-items-start align-items-md-center justify-content-between">
                                    <a href="#services"
                                        class="d-flex align-items-center text-decoration-none text-dark fw-semibold mb-4 mb-md-0">
                                        <div class="cta-line me-2"></div>
                                        <div class="cta-dot me-2"></div>
                                        <span class="hover-danger">Get Started</span>
                                    </a>
                                    <a href="#intro-video"
                                        class="d-flex align-items-center text-decoration-none text-dark fw-semibold">
                                        <div class="play-button position-relative me-3">
                                            <div class="shado-wave"></div>
                                            <i class="fas fa-play play-icon text-white position-relative"></i>
                                        </div>
                                        <span class="hover-danger">Watch Overview</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <div class="image-wrapper">
                            <img src="assets/images/slider-1.jpg" class="img-fluid hero-image" alt="HRN Tech Solutions Hero Banner" />
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class=" feature-section" id="features" data-aos="fade-up" data-aos-duration="700">
            <div class="container gap-5">
                <div class="row  justify-content-center">

                    <div class="col-12 col-md-4">
                        <div class="feature-card d-flex align-items-center text-start flex-wrap justify-content-center">
                            <div class="icon-container d-flex justify-content-center align-items-center ">
                                <i class="fas fa-users icon"></i>
                            </div>
                            <div class=" text-center mt-3 mt-sm-0">
                                <h3 class="h4 fw-bold text-dark mb-1">Advanced Tools</h3>
                                <p class="text-secondary">At HRN Tech Solution, we harness the power of advanced tools and cutting-edge technologies to deliver smarter, faster, and more reliable solutions. From modern frameworks like React, Angular, and Node.js to cloud platforms such as AWS and Azure.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="feature-card d-flex align-items-center text-start flex-wrap justify-content-center">
                            <div class="icon-container d-flex justify-content-center align-items-center ">
                                <i class="fas fa-brain icon"></i>
                            </div>
                            <div class=" text-center mt-3 mt-sm-0">
                                <h3 class="h4 fw-bold text-dark mb-1">Innovation</h3>
                                <p class="text-secondary">At HRN Tech Solution, innovation is at the heart of everything we do. We believe in transforming ideas into practical digital solutions by combining creativity, technology, and strategic thinking.</p>

                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="feature-card d-flex align-items-center text-start flex-wrap justify-content-center">
                            <div class="icon-container d-flex justify-content-center align-items-center ">
                                <i class="far fa-lightbulb icon"></i>
                            </div>
                            <div class=" text-center mt-3 mt-sm-0">
                                <h3 class="h4 fw-bold text-dark mb-1">Creative Ideas</h3>
                                <p class="text-secondary">At HRN Tech Solution, we believe that every great project starts with a creative idea. Our team blends design thinking, strategic planning, and innovative approaches to craft unique solutions that truly stand out.
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="our-product " data-aos="fade-up" data-aos-duration="700">
            <div class="container-fluid">
                <div class="row">
                    <div class="col caption-container">
                        <span class="line"></span>
                        <span class="dot"></span>
                        <h3 class="caption">Gallery</h3>
                        <span class="dot"></span>
                        <span class="line"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col heading-container">
                        <h1 class="heading-wrapper animated-text">Our Project Portfolio</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 mt-4 mt-xl-0" style="overflow:hidden">
                        <div class="projectImage"
                            style="background-image:url('assets/images/portfolio-1.jpg'); background-position:center; background-repeat:no-repeat; background-size:cover; height:60vh"
                            data-aos="slide-right" data-aos-duration="700">
                            <div class="overlay backdrop-blur-3">
                                <h1>App Development</h1>
                                <p>At HRN Tech Solution, we build high-performing, user-friendly, and scalable mobile applications that bring your ideas to life.</p>
                                <div class="read-more">
                                    <span class="line me-2"></span>
                                    <span class="dot me-2"></span>
                                    <a href="#">Read More</a>
                                    <span class="line2 ms-2"></span>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 mt-4 mt-xl-0" style="overflow:hidden">
                        <div class="projectImage"
                            style="background-image:url('assets/images/portfolio-2.jpg'); background-position:center; background-repeat:no-repeat; background-size:cover; height:60vh"
                            data-aos="fade-down" data-aos-duration="700">
                            <div class="overlay backdrop-blur-3">
                                <h1>Web Development</h1>
                                <p>At HRN Tech Solution, we specialize in creating modern, responsive, and user-friendly websites tailored to your business needs. Our team of expert developers combines cutting-edge technologies with creative design to deliver high-performance web applications that enhance user experience and drive growth.</p>
                                <div class="read-more">
                                    <span class="line me-2"></span>
                                    <span class="dot me-2"></span>
                                    <a href="#">Read More</a>
                                    <span class="line2 ms-2"></span>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 mt-4 mt-xl-0" style="overflow:hidden">
                        <div class="projectImage"
                            style="background-image:url('assets/images/portfolio-3.jpg'); background-position:center; background-repeat:no-repeat; background-size:cover; height:60vh"
                            data-aos="slide-left" data-aos-duration="700">
                            <div class="overlay backdrop-blur-3">
                                <h1>Software Development</h1>
                                <p>At HRN Tech Solution, we design and develop scalable, secure, and innovative software solutions that empower businesses to achieve their goals.</p>
                                <div class="read-more">
                                    <span class="line me-2"></span>
                                    <span class="dot me-2"></span>
                                    <a href="#">Read More</a>
                                    <span class="line2 ms-2"></span>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-xl-5 mt-4 mt-xl-0" style="overflow:hidden">
                        <div class="projectImage"
                            style="background-position:center; background-repeat:no-repeat; background-size:cover; height:60vh"
                            data-aos="slide-right" data-aos-duration="700">
                            <div class="card">
                                <div class="card-heading-container position-relative">
                                    <span class="circle"></span>
                                    <h1> All Projects</h1>
                                </div>
                                <p>At HRN Tech Solution, we deliver end-to-end digital solutions tailored to meet the unique needs of our clients. Our projects reflect a blend of creativity, technology, and strategy that drive measurable business growth.</p>
                                <div class="read-more">
                                    <span class="line me-2"></span>
                                    <span class="dot me-2"></span>
                                    <a href="#">Read More</a>
                                    <span class="line2 ms-2"></span>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 mt-4 mt-xl-0" style="overflow:hidden">
                        <div class="projectImage"
                            style="background-image:url('assets/images/portfolio-4.jpg'); background-position:center; background-repeat:no-repeat; background-size:cover; height:60vh"
                            data-aos="slide-up" data-aos-duration="700">
                            <div class="overlay backdrop-blur-3">
                                <h1>UI & UX Designs</h1>
                                <p>Our designs focus on user-friendly interfaces and smooth experiences that engage customers.</p>
                                <div class="read-more">
                                    <span class="line me-2"></span>
                                    <span class="dot me-2"></span>
                                    <a href="#">Read More</a>
                                    <span class="line2 ms-2"></span>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 mt-4 mt-xl-0 overflow-hidden" style="overflow:hidden">
                        <div class="projectImage"
                            style="background-image:url('assets/images/portfolio-5.jpg'); background-position:center; background-repeat:no-repeat; background-size:cover; height:60vh;"
                            data-aos="slide-left" data-aos-duration="700">
                            <div class="overlay backdrop-blur-3">
                                <h1>Digital Marketing</h1>
                                <p>At HRN Tech Solution, we help businesses grow online with strategic and result-driven digital marketing solutions.Our team of experts specializes in SEO, social media marketing, pay-per-click (PPC), content marketing, and email campaigns to boost your brand visibility and reach the right audience.</p>
                                <div class="read-more">
                                    <span class="line me-2"></span>
                                    <span class="dot me-2"></span>
                                    <a href="#">Read More</a>
                                    <span class="line2 ms-2"></span>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- <section class="counter " data-aos="fade-up" data-aos-duration="700">
            <div class="container-fluid ">
                <div class="row py-5">
                    <div class="col">
                        <div class="counter-Heading-container " data-aos="fade-down-right" data-aos-duration="700">
                            <h1 class="heading-wrapper text-center">
                                It's Time To Take Your Digital Marketing
                                <span class="image"><img src="assets/images/content-image-small-size-4.png"
                                        alt=""></span>
                                To The Next Level <span class="images"><img src="assets/images/group-image.png"
                                        alt=""></span> We Are Always Here To Help You Grow Your
                                <span class="play">
                                    Busines
                                    <div class="play-button ms-2">
                                        <div class="shado-wave"></div>
                                        <i class="fas fa-play play-icon text-black "></i>
                                    </div>
                                </span>


                            </h1>
                        </div>

                    </div>
                </div>

                <div class="row count">
                    <div class="col-md-6 col-lg-6 col-xl-3 col d-flex justify-content-center" data-aos="fade-up"
                        data-aos-duration="700">
                        <h1><span class="hollow-text me-4">10</span><span class="text">Years <br> Experience</span></h1>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 col d-flex justify-content-center" data-aos="fade-down"
                        data-aos-duration="700">
                        <h1><span class="hollow-text me-4">12+</span><span class="text">Advance <br> Tools</span></h1>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 col d-flex justify-content-center" data-aos="fade-up"
                        data-aos-duration="700">
                        <h1><span class="hollow-text me-4">12</span><span class="text">Advance <br> Tools</span></h1>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 col d-flex justify-content-center" data-aos="fade-down"
                        data-aos-duration="700">
                        <h1><span class="hollow-text me-4">12</span><span class="text">Advance <br> Tools</span></h1>
                    </div>
                </div>

            </div>
        </section> -->

        <section id="services" class="services-section" data-aos="fade-up" data-aos-duration="700">
            <div class="container-fluid">
                <div class="row">
                    <div class="col caption-container">
                        <span class="line"></span>
                        <span class="dot"></span>
                        <h3 class="caption">Services</h3>
                        <span class="dot"></span>
                        <span class="line"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col heading-container">
                        <h1 class="heading-wrapper animated-text">What We Have To Offer</h1>
                    </div>
                </div>
                <div class="row services-cards">

                    <div class="col-xl-3 col-6 services-card" data-aos="fade-left" data-aos-duration="900">
                        <h1>Web Development</h1>
                        <p>We create responsive, secure, and modern websites designed to deliver seamless user experiences. From corporate sites to e-commerce platforms, our projects ensure scalability, performance, and business impact.</p>
                        <a href="contact.php">
                            <div href="contact.php" class="image-overlay">
                                <div class="image" style="background-image:url('assets/images/service-1.jpg')"></div>
                                <div class="read-more">
                                    <span class="line me-2"></span>
                                    <span class="dot me-2"></span>
                                    <a href="#">Know More</a>
                                    <span class="line2 ms-2"></span>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-xl-3 col-6 services-card" data-aos="fade-up-left" data-aos-duration="900">
                        <h1>Mobile App Development</h1>
                        <p>Our expert developers build scalable, feature-rich mobile apps for iOS and Android. Whether it’s a business app, e-commerce solution, or custom platform, we bring your ideas to users’ fingertips.</p>
                        <a href="contact.php">
                            <div class="image-overlay">
                                <div class="image" style="background-image:url('assets/images/service-1.jpg')"></div>
                                <div class="read-more">
                                    <span class="line me-2"></span>
                                    <span class="dot me-2"></span>
                                    <a href="#">Know More</a>
                                    <span class="line2 ms-2"></span>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-xl-3 col-6 services-card mt-4 mt-xl-0" data-aos="fade-up-right" data-aos-duration="900">
                        <h1>Digital Marketing</h1>
                        <p>Boost your online visibility and drive targeted traffic with our result-driven SEO, social media marketing, PPC, and content strategies. We help brands achieve measurable growth in the digital landscape.</p>
                        <a href="contact.php">
                            <div class="image-overlay">
                                <div class="image" style="background-image:url('assets/images/service-1.jpg')"></div>
                                <div class="read-more">
                                    <span class="line me-2"></span>
                                    <span class="dot me-2"></span>
                                    <a href="#">Know More</a>
                                    <span class="line2 ms-2"></span>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-xl-3 col-6 services-card mt-4 mt-xl-0" data-aos="fade-right" data-aos-duration="900">
                        <h1>Graphic Designing</h1>
                        <p>From brand logos to complete visual identity kits, our creative design team delivers eye-catching, memorable graphics that communicate your message and strengthen your brand presence.</p>
                        <a href="contact.php">
                            <div class="image-overlay">
                                <div class="image" style="background-image:url('assets/images/service-1.jpg')"></div>
                                <div class="read-more">
                                    <span class="line me-2"></span>
                                    <span class="dot me-2"></span>
                                    <a href="#">Know More</a>
                                    <span class="line2 ms-2"></span>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </section>

        <!-- <section class="client-logo" data-aos="fade-up" data-aos-duration="700">
            <div class="container-fluid">
                <div class="row">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            
                            <div class="swiper-slide col-auto">
                                <img src="assets/images/logo1.png" alt="Logo 1" class="img-fluid" />
                            </div>
                            <div class="swiper-slide col-auto">
                                <img src="assets/images/logo2.png" alt="Logo 2" class="img-fluid" />
                            </div>
                            <div class="swiper-slide col-auto">
                                <img src="assets/images/logo3.png" alt="Logo 3" class="img-fluid" />
                            </div>
                            <div class="swiper-slide col-auto">
                                <img src="assets/images/logo1.png" alt="Logo 1" class="img-fluid" />
                            </div>
                            <div class="swiper-slide col-auto">
                                <img src="assets/images/logo2.png" alt="Logo 2" class="img-fluid" />
                            </div>
                            <div class="swiper-slide col-auto">
                                <img src="assets/images/logo3.png" alt="Logo 3" class="img-fluid" />
                            </div>
                            <div class="swiper-slide col-auto">
                                <img src="assets/images/logo1.png" alt="Logo 1" class="img-fluid" />
                            </div>
                            <div class="swiper-slide col-auto">
                                <img src="assets/images/logo2.png" alt="Logo 2" class="img-fluid" />
                            </div>
                            <div class="swiper-slide col-auto">
                                <img src="assets/images/logo3.png" alt="Logo 3" class="img-fluid" />
                            </div>
                            <div class="swiper-slide col-auto">
                                <img src="assets/images/logo1.png" alt="Logo 1" class="img-fluid" />
                            </div>
                            <div class="swiper-slide col-auto">
                                <img src="assets/images/logo2.png" alt="Logo 2" class="img-fluid" />
                            </div>
                            <div class="swiper-slide col-auto">
                                <img src="assets/images/logo3.png" alt="Logo 3" class="img-fluid" />
                            </div>
                            <div class="swiper-slide col-auto">
                                <img src="assets/images/logo1.png" alt="Logo 1" class="img-fluid" />
                            </div>
                            <div class="swiper-slide col-auto">
                                <img src="assets/images/logo2.png" alt="Logo 2" class="img-fluid" />
                            </div>
                            <div class="swiper-slide col-auto">
                                <img src="assets/images/logo3.png" alt="Logo 3" class="img-fluid" />
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <section class="faq" data-aos="fade-up" data-aos-duration="700">
            <div class="container-fluid">
                <div class="row">
                    <div class="flex-column-reverse col-lg-6 faq-container position-relative">
                        <div class="answer-container">
                            <div class="caption">
                                <span class="line"></span>
                                <span class="dot"></span>
                                <h3>FAQ's</h3>
                            </div>
                            <h1 class="heading-wrapper">Our Expert Answers</h1>
                            <div class="container-fluid">

                                <div class="row mb-5">
                                    <div class="col d-flex justify-content-center">
                                        <div class="qna" data-target="q4">
                                            <div class="question">
                                                <span><img src="assets/images/right-arrow.png" alt=""></span>
                                                <h3>What services does HRN Tech Solutions provide?</h3>
                                            </div>
                                            <div id="q4" class="answer">
                                                <p>We offer a complete suite of digital solutions, including website design & development, mobile app development, digital marketing, branding, and graphic design — all tailored to meet your business goals.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-5">
                                    <div class="col d-flex justify-content-center">
                                        <div class="qna" data-target="q1">
                                            <div class="question">
                                                <span><img src="assets/images/right-arrow.png" alt=""></span>
                                                <h3>How long does it take to complete a project?</h3>
                                            </div>
                                            <div id="q1" class="answer">
                                                <p>Project timelines vary depending on complexity and requirements. A standard website may take 3–5 weeks, while more complex platforms or apps could take 8–12 weeks. We always provide a clear timeline during project planning.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-5">
                                    <div class="col d-flex justify-content-center">
                                        <div class="qna" data-target="q2">
                                            <div class="question">
                                                <span><img src="assets/images/right-arrow.png" alt=""></span>
                                                <h3>Do you provide ongoing support after project delivery?</h3>
                                            </div>
                                            <div id="q2" class="answer">
                                                <p>Yes! We provide post-launch support and maintenance packages to ensure your website or app stays secure, updated, and optimized for the best performance.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col d-flex justify-content-center">
                                        <div class="qna" data-target="q3" style="border:none">
                                            <div class="question">
                                                <span><img src="assets/images/right-arrow.png" alt=""></span>
                                                <h3>Can you help improve my existing website?</h3>
                                            </div>
                                            <div id="q3" class="answer">
                                                <p>Absolutely! We can revamp your current website with a modern design, better performance, SEO optimization, and mobile-friendly features to help you stand out in the digital space.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 faq-banner">
                        <img src="assets/images/faq-banner.png" alt="FAQ - HRN Tech Solutions">
                    </div>
                </div>
            </div>
        </section>


        <section class="client-feedback" data-aos="fade-up" data-aos-duration="700">
            <div class="container">
                <!-- Section Title -->
                <div class="row">
                    <div class="col caption-container">
                        <span class="line"></span>
                        <span class="dot"></span>
                        <h3 class="caption">Client Feedback</h3>
                        <span class="dot"></span>
                        <span class="line"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col heading-container">
                        <h1 class="heading-wrapper animated-text">What Our Clients Say</h1>
                    </div>
                </div>

                <div class="row">
                    <div class="swiper feedbackSwiper">
                        <div class="swiper-wrapper">
                            <!-- Feedback Card 1 -->
                            <div class="swiper-slide col-md-6">
                                <div class="feedback-card p-4 bg-light position-relative">
                                    <i class="fa-solid fa-quote-left text-danger fs-3 position-absolute top-0 start-0 m-3"></i>
                                    <div class="stars mb-3 text-end">
                                        <i class="fa-solid fa-star text-dark"></i>
                                        <i class="fa-solid fa-star text-dark"></i>
                                        <i class="fa-solid fa-star text-dark"></i>
                                        <i class="fa-solid fa-star text-dark"></i>
                                        <i class="fa-solid fa-star text-dark"></i>
                                    </div>
                                    <p class="mb-4">
                                        HRN Tech Solution transformed our online presence. Their innovative approach and timely delivery exceeded our expectations. We’ve seen a 40% increase in engagement since launch!
                                    </p>
                                    <div class="d-flex align-items-center">
                                        <img src="assets/images/DharmendraPic.jpg" alt="Sarah Johnson" class="rounded-circle me-2" width="50" height="50" />
                                        <div>
                                            <strong class="text-danger">Dharmendra Prajapati</strong> – <span class="text-muted">CEO, Bright Future Inc.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Feedback Card 2 -->
                            <div class="swiper-slide col-md-6">
                                <div class="feedback-card p-4 bg-light position-relative">
                                    <i class="fa-solid fa-quote-left text-danger fs-3 position-absolute top-0 start-0 m-3"></i>
                                    <div class="stars mb-3 text-end">
                                        <i class="fa-solid fa-star text-dark"></i>
                                        <i class="fa-solid fa-star text-dark"></i>
                                        <i class="fa-solid fa-star text-dark"></i>
                                        <i class="fa-solid fa-star text-dark"></i>
                                        <i class="fa-solid fa-star text-dark"></i>
                                    </div>
                                    <p class="mb-4">
                                        The team's dedication and expertise are unmatched. They listened to our needs and delivered a product that's not only visually stunning but also highly functional.
                                    </p>
                                    <div class="d-flex align-items-center">
                                        <img src="assets/images/Akash Tiwari.jpg" alt="Michael Lee" class="rounded-circle me-2" width="50" height="50" />
                                        <div>
                                            <strong class="text-danger">Akash Tiwari</strong> - <span class="text-muted">Marketing Director, InnovateX</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Add more client feedback slides as needed -->
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section class="blog-section" data-aos="fade-up" data-aos-duration="700">
            <div class="container">
                <div class="row">
                    <div class="col caption-container">
                        <span class="line"></span>
                        <span class="dot"></span>
                        <h3 class="caption">Blogs</h3>
                        <span class="dot"></span>
                        <span class="line"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col heading-container">
                        <h1 class="heading-wrapper animated-text">Latest Industry Insights</h1>
                    </div>
                </div>

                <div class="row">
                    <div class="swiper blogSwiper">
                        <div class="swiper-wrapper">
                            <!-- Blog Card 1 -->
                            <div class="swiper-slide col-md-4">
                                <div class="blog-card d-flex">
                                    <div class="blog-image">
                                        <img src="assets/images/blog1.jpg" alt="AI Trends" class="img-fluid" />
                                    </div>
                                    <div class="blog-content">
                                        <p class="blog-date text-danger fw-bold mb-1">AUGUST 10, 2025</p>
                                        <h5 class="fw-bold">Top 5 AI Trends Shaping the Future</h5>
                                        <p class="text-muted small mb-2">
                                            Explore how artificial intelligence is revolutionizing industries in 2025...
                                        </p>
                                        <div class="read-more">
                                            <span class="line me-2"></span>
                                            <span class="dot me-2"></span>
                                            <a href="#">Know More</a>
                                            <span class="line2 ms-2"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Blog Card 2 -->
                            <div class="swiper-slide col-md-4">
                                <div class="blog-card d-flex">
                                    <div class="blog-image">
                                        <img src="assets/images/blog1.jpg" alt="Branding" class="img-fluid" />
                                    </div>
                                    <div class="blog-content">
                                        <p class="blog-date text-danger fw-bold mb-1">AUGUST 5, 2025</p>
                                        <h5 class="fw-bold">Building a Brand in the Digital Age</h5>
                                        <p class="text-muted small mb-2">
                                            Learn how small businesses are making big moves online with smart branding...
                                        </p>
                                        <div class="read-more">
                                            <span class="line me-2"></span>
                                            <span class="dot me-2"></span>
                                            <a href="#">Know More</a>
                                            <span class="line2 ms-2"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Blog Card 3 -->
                            <div class="swiper-slide col-md-4">
                                <div class="blog-card d-flex">
                                    <div class="blog-image">
                                        <img src="assets/images/blog1.jpg" alt="Startup Growth" class="img-fluid" />
                                    </div>
                                    <div class="blog-content">
                                        <p class="blog-date text-danger fw-bold mb-1">JULY 29, 2025</p>
                                        <h5 class="fw-bold">Startup Growth Hacks for 2025</h5>
                                        <p class="text-muted small mb-2">
                                            Proven strategies to scale your startup faster without burning out...
                                        </p>
                                        <div class="read-more">
                                            <span class="line me-2"></span>
                                            <span class="dot me-2"></span>
                                            <a href="#">Know More</a>
                                            <span class="line2 ms-2"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="post" data-aos="fade-up" data-aos-duration="700">
            <div class="container-fluid" data-aos="fade-up" data-aos-duration="700">
                <div class="swiper postSwiper">
                    <div class="swiper-wrapper">

                        <!-- Slide 1 -->
                        <div class="swiper-slide">
                            <a href="instagram.com" class="post-card">
                                <img src="assets/images/post-1.png" class="img-fluid post-image" alt="Post 1">
                                <div class="post-overlay backdrop-blur-3 ">
                                    <div class="icon"><img src="assets/images/insta.png" alt="Instagram"></div>
                                    <p>@hrn_tech_solution</p>
                                </div>
                            </a>
                        </div>



                        <!-- Slide 2 -->
                        <div class="swiper-slide">
                            <a href="#" class="post-card">
                                <img src="assets/images/post-1.png" class="img-fluid " alt="Post 2">
                                <div class="post-overlay backdrop-blur-3 ">
                                    <div class="icon"><img src="assets/images/insta.png" alt="Instagram"></div>
                                    <p>@hrn_tech_solution</p>
                                </div>
                            </a>
                        </div>

                        <div class="swiper-slide">
                            <a href="#" class="post-card">
                                <img src="assets/images/post-1.png" class="img-fluid " alt="Post 2">
                                <div class="post-overlay backdrop-blur-3 ">
                                    <div class="icon"><img src="assets/images/insta.png" alt="Instagram"></div>
                                    <p>@hrn_tech_solution</p>
                                </div>
                            </a>
                        </div>

                        <div class="swiper-slide">
                            <a href="#" class="post-card">
                                <img src="assets/images/post-1.png" class="img-fluid " alt="Post 2">
                                <div class="post-overlay backdrop-blur-3 ">
                                    <div class="icon"><img src="assets/images/insta.png" alt="Instagram"></div>
                                    <p>@hrn_tech_solution</p>
                                </div>
                            </a>
                        </div>

                        <div class="swiper-slide">
                            <a href="#" class="post-card">
                                <img src="assets/images/post-1.png" class="img-fluid " alt="Post 2">
                                <div class="post-overlay backdrop-blur-3 ">
                                    <div class="icon"><img src="assets/images/insta.png" alt="Instagram"></div>
                                    <p>@hrn_tech_solution</p>
                                </div>
                            </a>
                        </div>

                        <div class="swiper-slide">
                            <a href="#" class="post-card">
                                <img src="assets/images/post-1.png" class="img-fluid " alt="Post 2">
                                <div class="post-overlay backdrop-blur-3 ">
                                    <div class="icon"><img src="assets/images/insta.png" alt="Instagram"></div>
                                    <p>@hrn_tech_solution</p>
                                </div>
                            </a>
                        </div>

                        <div class="swiper-slide">
                            <a href="#" class="post-card">
                                <img src="assets/images/post-1.png" class="img-fluid " alt="Post 2">
                                <div class="post-overlay backdrop-blur-3 ">
                                    <div class="icon"><img src="assets/images/insta.png" alt="Instagram"></div>
                                    <p>@hrn_tech_solution</p>
                                </div>
                            </a>
                        </div>

                        <div class="swiper-slide">
                            <a href="#" class="post-card">
                                <img src="assets/images/post-1.png" class="img-fluid " alt="Post 2">
                                <div class="post-overlay backdrop-blur-3 ">
                                    <div class="icon"><img src="assets/images/insta.png" alt="Instagram"></div>
                                    <p>@hrn_tech_solution</p>
                                </div>
                            </a>
                        </div>

                        <div class="swiper-slide">
                            <a href="#" class="post-card">
                                <img src="assets/images/post-1.png" class="img-fluid " alt="Post 2">
                                <div class="post-overlay backdrop-blur-3 ">
                                    <div class="icon"><img src="assets/images/insta.png" alt="Instagram"></div>
                                    <p>@hrn_tech_solution</p>
                                </div>
                            </a>
                        </div>
                        <!-- Add more slides -->

                    </div>


                </div>
            </div>
        </section>

        <?php include 'footer.php' ?>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/home.js"></script>
</body>

</html>