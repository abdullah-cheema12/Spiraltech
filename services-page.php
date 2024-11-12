<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spiral Tech</title>
    <!-- link bootstrape css  -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- link font-awsome css file  -->
    <link rel="stylesheet" href="css/all.css">
    <!-- link animate css file  -->
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- link aos css file  -->
    <link rel="stylesheet" href="css/aos.css">
    <!-- Owl Carousel css file-->
    <link rel="stylesheet" href="./OwlCarousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="./OwlCarousel/dist/assets/owl.theme.default.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous"
        referrerpolicy="no-referrer" /> -->
    <!-- link coustom css file  -->
    <link rel="stylesheet" href="css/style.css">
    <!-- link favicon  -->
    <link rel="shortcut icon" href="./logos/favicon_green.svg" type="image/x-icon">
</head>

<body>

    <!-- NAVBAR -->

    <nav class="navbar navbar-expand-xl navbar-dark py-4">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="./logos/verti_full_green.svg" class="my-2" style="width: 200px; height: auto;" alt="Logo"></a>
            <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <img src="./images/ham-button.png" alt="Menu Icon" class="custom-hamburger-icon" />
                    </button>
            <div class="collapse navbar-collapse m-auto justify-content-center align-items-center" id="navbarNavDropdown">
                <ul class="navbar-nav align-items-center m-auto">
                    <li class="nav-item mx-3 my-2 text-black poppins-semibold">
                        <a class="nav-link" href="./index.php">Home </a>
                    </li>
                    <li class="nav-item mx-3 my-2 text-black poppins-semibold">
                        <a class="nav-link" href="./services-page.php">Services</a>
                    </li>
                    <li class="nav-item mx-3 my-2 text-black poppins-semibold">
                        <a class="nav-link" href="./about-us.php">About Us</a>
                    </li>
                    <li class="nav-item mx-3 my-2 text-black poppins-semibold">
                        <a class="nav-link" href="./portfolio-page.php">Portfolio</a>
                    </li>
                    <li class="nav-item mx-3 my-2 text-black poppins-semibold">
                        <a class="nav-link" href="./blogs-page.php">Blogs</a>
                    </li>
                    <li class="nav-item mx-3 my-2 text-black poppins-semibold">
                        <a class="nav-link" href="./contact-us.php">Contact Us</a>
                    </li>
                </ul>
                <div class="navbar-button-div d-flex justify-content-center align-items-center">
                    <a href="./contact-us.php" class="poppins-regular text-light-blue navbar-button">
                        <button class="btn-type-2 text-white px-5 py-3">Schedule a Meeting</button>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- HOME PAGE -->

    <div class="home-page">

        <div class="container-fluid p-0 m-0 mb-1 bg-img main-img">

            <div class="container pb-8">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <h1 class="poppins-bold font-32px text-light-blue">Innovative Digital Solutions Tailored to Elevate Your Business Growth</h1>
                        <p class="poppins-regular font-16px text-black">At Spiral Tech, we deliver cutting-edge web and app development, ensuring seamless experiences and driving measurable success.</p>
                        <a href="./contact-us.php">
                            <button class="btn-type-2 text-white px-5 py-3 my-xl-3 my-lg-3 my-md-3 my-sm-3 my-3">Schedule A Meeting</button>
                        </a>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 d-flex justify-content-center">
                        <img src="./images/services-page/serices-page.png" style="width: auto; height: 100%;" alt="">
                    </div>
                </div>
            </div>

        </div>

        <!-- OUR SERVICES -->

        <div class="container py-8">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mx-auto pb-4">
                <p class="textleft text-center poppins-bold font-32px text-light-blue">Our Services</p>
                <p class="poppins-regular font-16px text-black textleft text-center">Empowering your digital journey with innovative technology solutions designed for seamless business transformation, enhanced efficiency, and sustainable growth. Experience the future of tech with Spiral Tech. </p>
            </div>

            <!-- WEB DEVELOPMENT -->

            <div class="d-flex flex-wrap pt-4">
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                    <img src="./images/services-page/web-dev.png" style="width: 100%; height: auto;" alt="">
                </div>

                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 ps-xl-5 ps-lg-5 ps-0 d-flex flex-wrap">
                    <div class="col-12 pt-xl-0 pt-lg-0 pt-md-5 pt-sm-5 pt-5">
                        <h2 class="poppins-bold font-32 text-light-blue">Web Development</h2>
                        <p class="poppins-regular font-16px text-black text-justify">We specialize in creating modern, responsive, and interactive web designs using the latest technologies like HTML, CSS, JavaScript, and React. Our approach ensures that every website we build is not only visually appealing but
                            also optimized for performance, delivering a smooth and engaging user experience across all devices. By focusing on responsive design and interactivity, we aim to keep users engaged, increase conversions, and provide a seamless
                            digital experience that reflects your brand’s identity and enhances customer satisfaction.</p>
                    </div>

                    <div class="col-12 d-flex flex-row flex-wrap justify-content-end align-items-end">

                        <div class="col-xl-6 col-lg 6 col-md-12 col-sm-12 col-12 pe-xl-4 pe-lg-4 pe-0">
                            <img src="./images/services-page/front-end.png" class="pb-4" alt="frontend">
                            <p class="poppins-regular font-16px text-black text-justify">
                                We craft visually engaging, responsive websites using HTML, CSS, JavaScript, and React to enhance user experience.
                            </p>
                        </div>
                        <div class="col-xl-6 col-lg 6 col-md-12 col-sm-12 col-12 ps-xl-4 ps-lg-4 ps-0">
                            <img src="./images/services-page/back-end.png" class="pb-4" alt="backend">
                            <p class="poppins-regular font-16px text-black text-justify">
                                Our backend solutions, powered by PHP, Laravel, and MERN stack, ensure efficient data management and smooth performance.
                            </p>
                        </div>

                    </div>
                </div>
            </div>

        </div>

        <div class="py-4">
            <div class="container-fluid bg-powder-blue">
                <div class="container py-5 d-flex flex-xl-row flex-lg-row flex-md-column flex-sm-column flex-column justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 px-xl-3 px-lg-3 px-0 py-xl-0 py-lg-0 py-md-3 py-sm-3 py-3 d-flex flex-column justify-content-center align-items-center">
                        <img src="./images/services-page/custom-code.png" class="pb-2" alt="custom code">
                        <h3 class="poppins-semi-bold font-20px text-light-blue">Custom Code</h3>
                        <p class="poppins-regular font-16px text-black text-center">Tailored with HTML, CSS, JavaScript for standout designs.</p>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 px-xl-3 px-lg-3 px-0 py-xl-0 py-lg-0 py-md-3 py-sm-3 py-3 d-flex flex-column justify-content-center align-items-center">
                        <img src="./images/services-page/wordpress.png" class="pb-2" alt="wordpress">
                        <h3 class="poppins-semi-bold font-20px text-light-blue">Wordpress</h3>
                        <p class="poppins-regular font-16px text-black text-center">Dynamic websites using custom themes and plugins.</p>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 px-xl-3 px-lg-3 px-0 py-xl-0 py-lg-0 py-md-3 py-sm-3 py-3 d-flex flex-column justify-content-center align-items-center">
                        <img src="./images/services-page/php.png" class="pb-2" alt="php">
                        <h3 class="poppins-semi-bold font-20px text-light-blue">Backend In Php</h3>
                        <p class="poppins-regular font-16px text-black text-center">Robust solutions in core PHP and Laravel frameworks.</p>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 px-xl-3 px-lg-3 px-0 py-xl-0 py-lg-0 py-md-3 py-sm-3 py-3 d-flex flex-column justify-content-center align-items-center">
                        <img src="./images/services-page/mern.png" class="pb-2" alt="mean and mern">
                        <h3 class="poppins-semi-bold font-20px text-light-blue">MEAN / MERN</h3>
                        <p class="poppins-regular font-16px text-black text-center">Full-stack applications for seamless user experience and performance.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- APP DEVELOPMENT -->

        <div class="py-8">

            <div class="container py-5 d-flex flex-xl-row flex-lg-row flex-md-column-reverse flex-sm-column-reverse flex-column-reverse flex-wrap">
                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 pe-xl-5 pe-lg-5 pe-0 pt-xl-0 pt-lg-0 pt-md-5 pt-sm-5 pt-5 d-flex flex-wrap">
                    <div class="col-12">
                        <h2 class="poppins-bold font-32 text-light-blue">App Development</h2>
                        <p class="poppins-regular font-16px text-black text-justify">We specialize in building intuitive and high-performing mobile applications using cutting-edge technologies. Our approach ensures that every app we develop is user-centric, secure, and scalable, offering seamless functionality
                            across devices. Whether it's for Android or iOS, we craft mobile experiences that are visually engaging, responsive, and optimized for performance. Our focus on user-friendly interfaces and innovative features ensures your
                            app not only meets business goals but also delights users and enhances customer retention.
                        </p>
                    </div>

                    <div class="col-xl-6 col-lg 6 col-md-12 col-sm-12 col-12 pe-xl-4 pe-lg-4 pe-0">
                        <img src="./images/services-page/flutter.png" class="pb-4" alt="flutter">
                        <p class="poppins-regular font-16px text-black text-justify">
                            We create fast, cross-platform mobile apps with Flutter, ensuring native-like performance and smooth user experiences.
                        </p>
                    </div>

                    <div class="col-xl-6 col-lg 6 col-md-12 col-sm-12 col-12 ps-xl-4 ps-lg-4 ps-0">
                        <img src="./images/services-page/react-native.png" class="pb-4" alt="react native">
                        <p class="poppins-regular font-16px text-black text-justify">
                            We develop cross-platform apps using React Native, providing fluid performance and a consistent user interface.
                        </p>
                    </div>

                </div>

                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                    <img src="./images/services-page/app-development.png" style="width: 100%; height: auto;" alt="app development">
                </div>
            </div>

            <!-- UI / UX / GRAPHICS -->

            <div class="container d-flex flex-wrap">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 pe-xl-3 pe-lg-3 pe-0 d-flex flex-column">
                    <img src="./images/services-page/ui-ux.png" style="width: 100%; height: auto;" alt="ui ux">
                    <h2 class="poppins-bold font-32px text-light-blue py-3 m-0">UI / UX Designing</h2>
                    <p class="poppins-regular font-16px text-black text-justify">
                        We excel in designing user interfaces (UI) and experiences (UX) that are both intuitive and visually stunning. Our UI/UX design process focuses on understanding user behavior, ensuring every interaction on your website or app is seamless and engaging.
                        By combining aesthetics with functionality, we create designs that guide users effortlessly through your digital platforms. Our user-centered approach enhances satisfaction, improves accessibility, and boosts conversion rates,
                        ensuring your digital products deliver value while maintaining consistency with your brand’s identity.
                    </p>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ps-xl-3 ps-lg-3 ps-0 pt-xl-0 pt-lg-0 pt-md-5 pt-sm-5 pt-5 d-flex flex-column">
                    <img src="./images/services-page/graphics.png" style="width: 100%; height: auto;" alt="graphics designing">
                    <h2 class="poppins-bold font-32px text-light-blue py-3 m-0">Graphic Designing</h2>
                    <p class="poppins-regular font-16px text-black text-justify">
                        Our graphic design services bring your brand's vision to life with creative and impactful visuals. Using the latest design tools, we craft logos, banners, and marketing materials that resonate with your audience and align with your brand identity. From
                        concept to execution, our designs are tailored to engage and inspire, creating a lasting impression. Whether you need branding, digital art, or print designs, we ensure each piece is visually compelling and strategically aligned
                        with your business goals.
                    </p>
                </div>
            </div>

        </div>

        <!-- CLIENTS SECTION -->

        <div class="container d-flex flex-xl-row flex-lg-row flex-md-column flex-sm-column flex-column py-8">
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                <p class="poppins-light font-16px font-black">Our Clients</p>
                <h2 class="poppins-bold font-24px text-light-blue">Who Trust Us</h2>
                <p class="poppins-regular font-16px text-black text-justify">
                    Starting with a detailed consultation, we plan, design, develop, and test thoroughly, ensuring successful outcomes and continuous support.
                </p>
            </div>

            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
                <div class="owl-carousel owl-theme">

                    <div class="item">
                        <div class="card" style="border: none;">
                            <div class="card-body">
                                <div class="test-img" style="width: 100%; height: auto;">
                                    <img src="./Images/findsvet-logo.png" style="width: 100%; height: 100px; object-fit: contain;" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="card" style="border: none;">
                            <div class="card-body">
                                <div class="test-img" style="width: 100%; height: auto;">
                                    <img src="./Images/tentesa-logo.png" style="width: 100%; height: 100px; object-fit: contain;" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="card" style="border: none;">
                            <div class="card-body">
                                <div class="test-img" style="width: 100%; height: auto;">
                                    <img src="./Images/sukoon-logo.png" style="width: 100%; height: 100px; object-fit: contain;" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="card" style="border: none;">
                            <div class="card-body">
                                <div class="test-img" style="width: 100%; height: auto;">
                                    <img src="./Images/baghban-logo.png" style="width: 100%; height: 100px; object-fit: contain;" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="card" style="border: none;">
                            <div class="card-body">
                                <div class="test-img" style="width: 100%; height: auto;">
                                    <img src="./Images/reco-logo.png" style="width: 100%; height: 100px; object-fit: contain;" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="card" style="border: none;">
                            <div class="card-body">
                                <div class="test-img" style="width: 100%; height: auto;">
                                    <img src="./Images/alrehman-logo.png" style="width: 100%; height: 100px; object-fit: contain;" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="card" style="border: none;">
                            <div class="card-body">
                                <div class="test-img" style="width: 100%; height: auto;">
                                    <img src="./Images/kpl-logo.png" style="width: 100%; height: 100px; object-fit: contain;" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- GRADIENT BACKGROUND -->

        <div class="py-8">
            <div class="container-fluid d-flex flex-column align-items-center py-5" style="background-image: linear-gradient(to right top, #96a7ac, #829fa8, #6e96a5, #598ea2, #4185a0, #4185a0, #4185a0, #4185a0, #598ea2, #6e96a5, #829fa8, #96a7ac);">

                <div class="col-xl-6 col-lg-6 col-md-12 col-12 d-flex flex-column align-items-center">
                    <h2 class="poppins-semibold font-32px text-white text-center px-5">
                        Empowering Your Vision with Tailored Tech Solutions for Lasting Success
                    </h2>
                    <p class="poppins-regular font-16px text-white text-center">Let's connect! We’d love to discuss your needs and how SpiralTech can help. Please choose a convenient time, and we'll be ready to assist you.</p>
                    <a href="#contact-form" class="poppins-regular text-light-blue navbar-button">
                        <button class="btn-type-2 btn-white text-light-blue px-5 py-3">Schedule a Meeting</button>
                    </a>
                </div>

            </div>
        </div>

        <!-- CONTACT FORM -->

        <div class="container d-flex flex-wrap py-8">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="contact-form">
                    <p class="poppins-light font-16px text-black">Contact Us</p>
                    <h1 class="poppins-bold font-24px text-light-blue">Get In Touch</h1>
                    <p class="poppins-light font-16px text-black">Get in touch with us for inquiries, support, or collaboration. We're here to help you with all your tech needs.</p>

                    <form action="https://api.web3forms.com/submit" method="POST">
                        <input type="hidden" name="access_key" value="993d7282-a4b2-4be2-a7c0-d8376ef2844b">
                        <div class="d-flex justify-content-between">
                            <input type="text" name="first-name" placeholder="First Name" class="poppins-light font-16px text-black py-2 px-4 bg-light-gray my-3" style="width: 48%; height: 50px; border-radius: 15px;" required>
                            <input type="text" name="last-name" placeholder="Last Name" class="poppins-light font-16px text-black py-2 px-4 bg-light-gray my-3" style="width: 48%; height: 50px; border-radius: 15px;">
                        </div>
                        <input type="email" name="email" class="poppins-light font-16px text-black py-2 px-4 my-3 bg-light-gray" placeholder="Email" style="width: 100%; height: 50px; border-radius: 15px;" required>
                        <!-- Honeypot Spam Protection -->
                        <textarea name="message" class="message poppins-light font-16px text-black py-2 px-4 my-3 bg-light-gray" placeholder="Message" style="width: 100%; height: 300px;  border-radius: 15px;" required></textarea>
                        <input type="checkbox" name="botcheck" class="hidden" style="display: none;">

                        <!-- Custom Confirmation / Success Page -->
                        <!-- <input type="hidden" name="redirect" value="https://mywebsite.com/thanks.php"> -->

                        <button class="poppins-semibold btn-type-2 px-5 py-3 font-16px text-white" type="submit">Send Message</button>
                    </form>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 d-flex justify-content-center align-items-center">
                <img src="./Images/contact-picture.png" alt="contact us" style="width: 80%; height: auto;">
            </div>
        </div>

        <!-- FOOTER -->

        <div class="container-fluid bg-img footer-img">
            <div class="container d-flex flex-wrap" style="padding-top: 10rem; ">
                <div class="row pb-5">
                    
                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                    <a href="#nav-bar">
                        <img src="./Logos/verti_full_green.svg" class="h-auto pb-2 footer-logo" style="width: 80%;" alt="Spiral Tech">
                    </a>
                    <p class="poppins-regular font-16px text-black m-0 ">Empowering your business with<br>innovative digital solutions for growth.</p>
                    <div class="footer-links pb-4 pt-3">
                        <a href="https://www.facebook.com/profile.php?id=61563218953237" target="_blank"><img src="./Images/facebook.png" class="me-2" style="width: 40px; height: 40px;" alt="facebook"></a>
                        <a href="https://www.instagram.com/spiral_tech_official/" target="_blank"><img src="./Images/instagram.png" class="me-2" style="width: 40px; height: 40px;" alt="instagram"></a>
                        <a href="https://www.linkedin.com/company/spiral-tech/?viewAsMember=true" target="_blank"><img src="./Images/linkedin.png" class="me-2" style="width: 40px; height: 40px;" alt="linkedin"></a>
                        <a href="https://x.com/spiraltechoffic?t=e2_OM91D0w_F0NF-NkM-aQ&s=09" target="_blank"><img src="./Images/twitter.png" class="me-2" style="width: 40px; height: 40px;" alt="twitter"></a>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 d-flex flex-wrap">

                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 py-xl-0 py-lg-0 py-3">
                        <div class="ps-xl-5 ps-lg-5 ps-0">
                            <p class="poppins-semibold font-16px text-light-blue">Links</p>
                            <ul class="poppins-regular font-16px no-bullets">
                                <li><a href="./index.php">Home</a></li>
                                <li><a href="./services-page.php">Services</a></li>
                                <li><a href="./about-us.php">About Us</a></li>
                                <li><a href="./blogs-page.php">Blogs</a></li>
                                <li><a href="./contact-us.php">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 py-xl-0 py-lg-0 py-3">
                        <p class="poppins-semibold font-16px text-light-blue">Services</p>
                        <ul class="poppins-regular font-16px no-bullets">
                            <li>Frontend Development</li>
                            <li>Backend development</li>
                            <li>Wordpress Development</li>
                            <li>App Development</li>
                            <li>UI/UX Designing</li>
                            <li>Graphic Designing</li>
                        </ul>
                    </div>

                </div>

                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 d-flex flex-column align-items-xl-end align-items-lg-end align-items-md-start align-items-sm-start align-items-xs-start pt-xl-0 pt-lg-0 pt-md-5 pt-sm-5 pt-5">
                    <div class="col-12 d-flex flex-column align-items-xl-end align-items-lg-end align-items-md-start align-items-sm-start align-items-xs-start">
                        <form action="https://api.web3forms.com/submit" method="POST">

                            <h1 class="poppins-semibold text-light-blue font-24px">Newsletter</h1>

                            <!-- Replace with your Access Key -->
                            <input type="hidden" name="access_key" value="">

                            <!-- Form Inputs. Each input must have a name="" attribute -->
                            <input type="text" name="name" class="w-100 poppins-light font-16px text-black py-2 px-4 my-1 bg-transparent" style="border-radius: 15px; border: 2px solid #0E799E;" placeholder="Name" required>
                            <input type="email" name="email" class="w-100 poppins-light font-16px text-black py-2 px-4 my-1 bg-transparent" style="border-radius: 15px; border: 2px solid #0E799E;" placeholder="Email" required>

                            <!-- Honeypot Spam Protection -->
                            <input type="checkbox" name="botcheck" class="hidden" style="display: none;">

                            <!-- Custom Confirmation / Success Page -->
                            <!-- <input type="hidden" name="redirect" value="https://mywebsite.com/thanks.php"> -->

                            <button class="btn-type-2 px-5 py-3 text-white my-1" type="submit">Join</button>

                        </form>
                    </div>
                </div>
                </div>
            </div>
            <div class="container" style="border-top: 1px solid black;">
                <p class="poppins-medium col-12 font-16px text-light-blue text-center my-0 py-4">SpiralTech : ©2024 Copyright all rights are reserved</p>
            </div>
        </div>

    </div>














    <!-- CUSTOM JS FILE -->
    <script src="./js/index.js"></script>
    <!-- link jqurey file  -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <!-- link bootstrape file  -->
    <script src="js/bootstrap.min.js"></script>
    <!-- link aos js file  -->
    <script src="js/aos.js"></script>
    <!-- link all js file  -->
    <script src="js/all.js"></script>
    <!-- link waypoint file  -->
    <script src="js/waypoint.js"></script>
    <!-- owl carousel js file -->
    <script src="./OwlCarousel/dist/owl.carousel.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->


    <script>
        $(document).ready(function() {
            $(".owl-carousel").owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                autoplay: true,
                autoplayTimeout: 3000,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            });
        });
    </script>

</body>

</html>