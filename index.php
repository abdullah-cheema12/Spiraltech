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

        <div class="container-fluid p-0 m-0 bg-img main-img homepage">

            <div class="container pt-xl-4 pt-lg-4 pt-md-3 pt-sm-2 pt-0 pb-8">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <h1 class="poppins-bold font-32px text-light-blue">Your Vision, Our Innovation, Leading Tech Solutions</h1>
                        <p class="poppins-regular font-16px text-black">Transform your business with our expert web development, graphic design, SaaS, UI/UX services.</p>
                        <div class="d-flex flex-wrap justify-content-between">
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6">
                                <img src="./images/tick.png" class="mb-2" alt="">
                                <p class="poppins-bold font-16px text-light-blue">Innovative Solutions</p>
                                <p class="poppins-light font-14px text-black">Cutting-edge tech for business excellence</p>
                            </div>

                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6">
                                <img src="./images/tick.png" class="mb-2" alt="">
                                <p class="poppins-bold font-16px text-light-blue">Expert Team</p>
                                <p class="poppins-light font-14px text-black">Experienced professionals ensuring top-quality results</p>
                            </div>

                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6">
                                <img src="./images/tick.png" class="mb-2" alt="">
                                <p class="poppins-bold font-16px text-light-blue">Client-Centric Approach</p>
                                <p class="poppins-light font-14px text-black">Tailored services focused on your success</p>
                            </div>
                        </div>

                        <a href="./contact-us.php">
                            <button class="btn-type-2 text-white px-5 py-3 my-xl-5 my-lg-5 my-md-5 my-sm-3 my-3">Schedule A Meeting</button>
                        </a>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 d-flex justify-content-center">
                        <img src="./images/home-page-right.svg" style="width: 90%; height: auto;" alt="">
                    </div>
                </div>
            </div>

        </div>

        <!-- SERVICES SECTION -->

        <div class="container py-8">
            <p class="poppins-light text-black font-16px">Our Services</p>
            <p class="poppins-bold font-24px text-light-blue">Tech And Innovated Solutions</p>
            <p class="poppins-light font-16px text-black col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">Empowering your digital journey with innovative technology solutions designed for seamless business transformation, enhanced efficiency, and sustainable growth. Experience the future of tech with Spiral Tech. </p>
            <div class="d-flex sercives-section flex-wrap">

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 pe-xl-3 pe-lg-3 my-3">
                    <div class="col-12 bg-gray p-4" style="border-radius: 25px;">
                        <img src="./images/web-dev-img.png" class="pb-4" alt="web development">
                        <h2 class="poppins-bold font-32px text-light-blue">Web Development</h2>
                        <p class="poppins-light font-16px text-black">We create modern, responsive, and interactive web designs using HTML, CSS, JS, and React. Our websites are tailored to provide an exceptional user experience and drive engagement.</p>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ps-xl-3 ps-lg-3 my-3">
                    <div class="col-12 bg-gray p-4" style="border-radius: 25px;">
                        <img src="./images/app-dev-img.png" class="pb-4" alt="app development">
                        <h2 class="poppins-bold font-32px text-light-blue">App Development</h2>
                        <p class="poppins-light font-16px text-black">We develop seamless, efficient, and innovative mobile applications. Our app development services cater to both iOS and Android platforms, delivering superior performance and user experience.</p>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 pe-xl-3 pe-lg-3 my-3">
                    <div class="col-12 bg-gray p-4" style="border-radius: 25px;">
                        <img src="./images/ui-ux-img.png" class="pb-4" alt="ui ux design">
                        <h2 class="poppins-bold font-32px text-light-blue">UI/UX Design</h2>
                        <p class="poppins-light font-16px text-black">We craft intuitive, engaging, and user-friendly interfaces. Our UI/UX design services focus on enhancing user satisfaction by improving usability and accessibility.</p>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ps-xl-3 ps-lg-3 my-3">
                    <div class="col-12 bg-gray p-4" style="border-radius: 25px;">
                        <img src="./images/graphic-design-img.png" class="pb-4" alt="graphics designing">
                        <h2 class="poppins-bold font-32px text-light-blue">Graphics Designing</h2>
                        <p class="poppins-light font-16px text-black">Our graphic design team creates visually stunning and impactful designs. From branding to marketing materials, we ensure your visuals captivate and resonate with your audience.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- ABOUT US SECTION -->

        <div class="container d-flex flex-wrap flex-xl-row flex-lg-row flex-md-column-reverse flex-sm-column-reverse flex-column-reverse py-8">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 pe-xl-4 pe-lg-4">
                <img src="./images/about-us-picture.png" style="width: 100%; height: auto;" alt="about us">
            </div>

            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ps-xl-4 ps-lg-4 pb-md-4 pb-sm-4 pb-xs-4 pb-4">
                <p class="poppins-light font-16px font-black">About Us</p>
                <h2 class="poppins-bold font-24px text-light-blue">Empowering Businesses with Innovative Tech Solutions</h2>
                <p class="poppins-regular font-16px text-black text-justify">Spiral Tech provides a complete range of services to elevate your brand digitally. We create immersive, responsive websites that serve as your digital storefronts, captivating visitors and converting them into loyal customers. Our team
                    brings ideas to life through interactive, user-friendly mobile applications, ensuring seamless experiences for your audience. Utilizing the power of online platforms, we enhance your brand's reach, engage your audience, and deliver
                    measurable results. Whether it's web development, app creation, or digital marketing, our innovative solutions are designed to drive your business forward and achieve lasting success in the digital world.</p>
                <button class="btn-type-2 px-5 py-3 text-white">Read More</button>
            </div>
        </div>

        <!-- START YOUR WORK -->

        <div class="container py-8">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mx-auto">
                <p class="textleft text-center poppins-bold font-32px text-light-blue">How we start your work</p>
                <p class="poppins-regular font-16px text-black text-center">Starting with a detailed consultation, we plan, design, develop, and test thoroughly, ensuring successful outcomes and continuous support</p>
            </div>

            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner mt-8">

                    <div class="carousel-item active">
                        <div class="container">
                            <div class="row d-flex flex-wrap bg-light-blue bg-powder-blue py-xl-5 py-lg-5 py-md-3 py-sm-3 py-3" style="border-radius: 25px;">
                                <div class="your-work-left col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 py-xl-5 py-lg-5 py-md-3 py-sm-3 py-3 d-flex justify-content-center align-items-center">
                                    <img src="./Images/planning.png" alt="planning">
                                </div>

                                <div class="your-work-right col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 py-xl-5 py-lg-5 py-md-3 py-sm-3 py-3">
                                    <div class="col-11 mx-auto">
                                        <img src="./Images/one.png" class="pb-4" alt="one">
                                        <h1 class="poppins-semibold two-rem dark-blue-text">Planning</h1>
                                        <p class="poppins-regular one-rem black-text">During the planning phase, we define your project’s scope, gather requirements, and set clear objectives. This includes understanding your vision, outlining key features, and establishing timelines and milestones
                                            to ensure a successful project execution. </p>
                                        <button class="next-slide btn-type-2 px-5 py-3 text-white">Next</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="container">
                            <div class="row d-flex flex-wrap bg-light-blue bg-powder-blue py-xl-5 py-lg-5 py-md-3 py-sm-3 py-3" style="border-radius: 25px;">
                                <div class="your-work-left col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 py-xl-5 py-lg-5 py-md-3 py-sm-3 py-3 d-flex justify-content-center align-items-center">
                                    <img src="./Images/brainstroming.png" alt="brainstroming">
                                </div>

                                <div class="your-work-right col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 py-xl-5 py-lg-5 py-md-3 py-sm-3 py-3">
                                    <div class="col-11 mx-auto">
                                        <img src="./Images/two.png" class="pb-4" alt="two">
                                        <h1 class="poppins-semibold two-rem dark-blue-text">Brainstorming</h1>
                                        <p class="poppins-regular one-rem black-text">In the brainstorming phase, we collaborate to generate ideas and refine the project’s vision. We explore creative solutions, discuss features, and align on the overall direction to ensure the website meets your
                                            goals and stands out.
                                        </p>
                                        <button class="next-slide btn-type-2 px-5 py-3 text-white">Next</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="container">
                            <div class="row d-flex flex-wrap bg-light-blue bg-powder-blue py-xl-5 py-lg-5 py-md-3 py-sm-3 py-3" style="border-radius: 25px;">
                                <div class="your-work-left col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 py-xl-5 py-lg-5 py-md-3 py-sm-3 py-3 d-flex justify-content-center align-items-center">
                                    <img src="./Images/designing.png" alt="designing">
                                </div>

                                <div class="your-work-right col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 py-xl-5 py-lg-5 py-md-3 py-sm-3 py-3">
                                    <div class="col-11 mx-auto">
                                        <img src="./Images/three.png" class="pb-4" alt="three">
                                        <h1 class="poppins-semibold two-rem dark-blue-text">Designing</h1>
                                        <p class="poppins-regular one-rem black-text">In the designing phase, we create the visual and interactive elements of your website. This includes crafting intuitive UI/UX designs that ensure an engaging user experience. We develop wireframes and mockups to
                                            bring your vision to life, focusing on aesthetics, usability, and brand consistency.</p>
                                        <button class="next-slide btn-type-2 px-5 py-3 text-white">Next</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="container">
                            <div class="row d-flex flex-wrap bg-light-blue bg-powder-blue py-xl-5 py-lg-5 py-md-3 py-sm-3 py-3" style="border-radius: 25px;">
                                <div class="your-work-left col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 py-xl-5 py-lg-5 py-md-3 py-sm-3 py-3 d-flex justify-content-center align-items-center">
                                    <img src="./Images/development.png" alt="development">
                                </div>

                                <div class="your-work-right col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 py-xl-5 py-lg-5 py-md-3 py-sm-3 py-3">
                                    <div class="col-11 mx-auto">
                                        <img src="./Images/four.png" class="pb-4" alt="four">
                                        <h1 class="poppins-semibold two-rem dark-blue-text">Development</h1>
                                        <p class="poppins-regular one-rem black-text">During the development phase, we turn designs into a fully functional website. Our team codes the front-end and back-end, integrates necessary features, and ensures seamless performance. We follow best practices
                                            to build a robust, scalable, and secure website tailored to your requirements.</p>
                                        <button class="next-slide btn-type-2 px-5 py-3 text-white">Next</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="container">
                            <div class="row d-flex flex-wrap bg-light-blue bg-powder-blue py-xl-5 py-lg-5 py-md-3 py-sm-3 py-3" style="border-radius: 25px;">
                                <div class="your-work-left col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 py-xl-5 py-lg-5 py-md-3 py-sm-3 py-3 d-flex justify-content-center align-items-center">
                                    <img src="./Images/testing.png" alt="testing">
                                </div>

                                <div class="your-work-right col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 py-xl-5 py-lg-5 py-md-3 py-sm-3 py-3">
                                    <div class="col-11 mx-auto">
                                        <img src="./Images/five.png" class="pb-4" alt="five">
                                        <h1 class="poppins-semibold two-rem dark-blue-text">Testing And Launch</h1>
                                        <p class="poppins-regular one-rem black-text">In the testing and launching phase, we rigorously test your website for functionality, performance, and security. We fix any issues and ensure everything runs smoothly. Once approved, we launch your website, making
                                            it live and accessible to your audience.</p>
                                        <button class="next-slide btn-type-2 px-5 py-3 text-white">Next</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </a>
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
                <div class="owl-carousel owl-theme px-4">

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

        <!-- TESTIMONIAL SECTION -->

        <div class="container py-8">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mx-auto">
                <p class="textleft text-center poppins-bold font-32px text-light-blue">What People Say About Us</p>
                <p class="textleft poppins-regular font-16px text-black text-center">Read our clients' testimonials to learn how we've helped their businesses grow with our innovative and reliable tech solutions.</p>
            </div>

            <div class="owl-carousel owl-theme pt-6">

                <div class="item">
                    <div class="card">
                        <div class="card-body">
                            <div class="test-img" style="width: 100%; height: auto;">
                                <img src="./Images/findsVet.jpg" style="width: 100%; height: auto;" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="card">
                        <div class="card-body">
                            <div class="test-img" style="width: 100%; height: auto;">
                                <img src="./Images/usama-momento.jpg" style="width: 100%; height: auto;" alt="">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- UPDATES AND TECH TRENDS -->

        <div class="container py-8">

            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mx-auto">
                <p class="textleft text-center poppins-bold font-32px text-light-blue">Insights, Updates, and Tech Trends</p>
                <p class="textleft poppins-regular font-16px text-black text-center">Stay informed with our latest blog posts, covering industry insights, company updates, and emerging tech trends to keep you ahead.</p>
            </div>

            <div class="d-flex flex-wrap flex-xl-row flex-lg-row flex-md-column flex-sm-column flex-column">
<?php
$apiKey = 'AIzaSyCgI39KFW-afn8DDrmg9W-on_Mjoog6ajY';
$blogId = '2152023608555043419';

$url = "https://www.googleapis.com/blogger/v3/blogs/$blogId/posts?maxResults=3&key=$apiKey";
$response = file_get_contents($url);
$posts = json_decode($response, true);
if (!function_exists('getFirstImage')) {
    function getFirstImage($content) {
        // Use regular expression to extract the first image from the post content
        preg_match('/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $content, $image);
        return (!empty($image['src'])) ? $image['src'] : 'Images/port-mobile-8.png'; // Default if no image
    }
}
if (!empty($posts['items'])) {
    foreach ($posts['items'] as $post) {
        $title = $post['title'];
        $postId = $post['id'];
        $content = $post['content'];
        $postUrl = "blog_detail.php?id=" . $postId;

        // Get the first image from the post content
        $thumbnail = getFirstImage($content);
        echo '   <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 pe-xl-2 pe-lg-2 pe-0">
                    <div class="col-12 pe-xl-2 pe-lg-2 pe-0">
                        <div class="card my-4" style="width: 100%;">
                            <img class="card-img-top" src="';
                            echo $thumbnail; 
                            echo'" alt="Card image cap">
                            <div class="card-body">
                                <h2 class="poppins-bold font-24px text-light-blue">';
                                echo $title;
                                echo'</h2>
                                <p class="card-text">';
                                echo substr(strip_tags($content), 0, 40);
                                echo'...</p>
                                <a href="';echo $postUrl;echo'" target="_blank">
                                    <button class="btn-type-2 px-5 py-3 text-white" type="submit">Read More</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>';
            }
        } else {
            echo '<p>No blog posts available.</p>';
        }
        ?>

               

            </div>

        </div>

        <!-- GRADIENT BACKGROUND -->

        <div class="py-8">
            <div class="container-fluid d-flex flex-column align-items-center py-5" style="background-image: linear-gradient(to right top, #96a7ac, #829fa8, #6e96a5, #598ea2, #4185a0, #4185a0, #4185a0, #4185a0, #598ea2, #6e96a5, #829fa8, #96a7ac);">

                <div class="col-xl-6 col-lg-6 col-md-12 col-12 d-flex flex-column align-items-center">
                    <h2 class="poppins-semibold font-32px text-white text-center px-3">
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