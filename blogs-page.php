<?php

?>

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
    <!-- custom css file -->
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
                    <a href="./contact-us" class="poppins-regular text-light-blue navbar-button">
                        <button class="btn-type-2 text-white px-5 py-3">Schedule a Meeting</button>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- HOME PAGE -->

    <div class="home-page">

        <div class="container-fluid p-0 m-0 bg-img main-img">

            <div class="container pt-xl-5 pt-lg-5 pt-md-3 pt-sm-2 pt-0 pb-8">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <h1 class="poppins-bold font-32px text-light-blue">Insights, Updates,<br>and Tech Trends</h1>
                        <p class="poppins-regular font-16px text-black">Stay informed with our latest blog posts, covering industry insights, company updates, and emerging tech trends to keep you ahead.</p>

                        <a href="./contact-us">
                            <button class="btn-type-2 text-white px-5 py-3 my-xl-2 my-lg-2 my-md-2 my-sm-2 my-2">Schedule A Meeting</button>
                        </a>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 d-flex justify-content-center">
                        <img src="./images/blogs-page/blog-page-main.png" style="width: auto; height: 100%;" alt="">
                    </div>
                </div>
            </div>

        </div>

        <!-- LATEST ARTICLE -->
<!-- 
        <div class="container py-4">

            <h2 class="poppins-bold font-32px text-light-blue">Latest Article</h2>

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card my-4 border-0 d-flex flex-xl-row flex-lg-row" style="width: 100%;">
                    <img class="card-img-top" style="width:400px; height:225px;"src="
                    
                    
                    " alt="Card image cap">
                    <div class="card-body px-xl-3 px-lg-3 px-0 w-100">
                        <h2 class="poppins-semibold font-32px text-light-blue"></h2>
                        <p class="card-text"></p>
                        <a href="" target="_blank">
                            <button class="btn-type-2 px-5 py-3 text-white" type="submit">Read More</button>
                        </a>
                    </div>
                </div>
            </div>

        </div> -->

        <!-- POPULAR ARTICLES -->

        <div class="container py-5">
            <h2 class="poppins-bold font-32px text-light-blue">Popular Articles</h2>

            <div class="d-flex flex-wrap flex-xl-row flex-lg-row flex-md-column flex-sm-column flex-column">

            <?php
$apiKey = 'AIzaSyCgI39KFW-afn8DDrmg9W-on_Mjoog6ajY';
$blogId = '2152023608555043419';

$url = "https://www.googleapis.com/blogger/v3/blogs/$blogId/posts?key=$apiKey";
$response = file_get_contents($url);
$posts = json_decode($response, true);

if (!function_exists('getFirstImage')) {
    function getFirstImage($content) {
        // Use regular expression to extract the first image from the post content
        preg_match('/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $content, $image);
        return (!empty($image['src'])) ? $image['src'] : 'images/port-mobile-8.png'; // Default if no image
    }
}

if (!empty($posts['items'])) {
    foreach ($posts['items'] as $post) {
        $title = $post['title'];
        $postId = $post['id'];
        $content = $post['content'];
        $postUrl = "blog_detail.php?id=" . $postId;
        $thumbnail = getFirstImage($content);

        echo '<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 pe-xl-2 pe-lg-2 pe-0">
                    <div class="col-12 pe-xl-2 pe-lg-2 pe-0">
                        <div class="card my-4" style="width: 100%;">
                            <img class="card-img-top" src="'; echo $thumbnail; 
                            echo '" alt="Card image cap">
                            <div class="card-body">
                                <h2 class="poppins-bold font-24px text-light-blue">';
                                echo $title;
                                echo '</h2>
                                <p class="card-text">';
                                  echo substr(strip_tags($content), 0, 40);
                                echo '...</p>
                                <a href="'; echo $postUrl; echo '" target="_blank">
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
                                    <img src="./images/findsvet-logo.png" style="width: 100%; height: 100px; object-fit: contain;" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="card" style="border: none;">
                            <div class="card-body">
                                <div class="test-img" style="width: 100%; height: auto;">
                                    <img src="./images/tentesa-logo.png" style="width: 100%; height: 100px; object-fit: contain;" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="card" style="border: none;">
                            <div class="card-body">
                                <div class="test-img" style="width: 100%; height: auto;">
                                    <img src="./images/sukoon-logo.png" style="width: 100%; height: 100px; object-fit: contain;" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="card" style="border: none;">
                            <div class="card-body">
                                <div class="test-img" style="width: 100%; height: auto;">
                                    <img src="./images/baghban-logo.png" style="width: 100%; height: 100px; object-fit: contain;" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="card" style="border: none;">
                            <div class="card-body">
                                <div class="test-img" style="width: 100%; height: auto;">
                                    <img src="./images/reco-logo.png" style="width: 100%; height: 100px; object-fit: contain;" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="card" style="border: none;">
                            <div class="card-body">
                                <div class="test-img" style="width: 100%; height: auto;">
                                    <img src="./images/alrehman-logo.png" style="width: 100%; height: 100px; object-fit: contain;" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="card" style="border: none;">
                            <div class="card-body">
                                <div class="test-img" style="width: 100%; height: auto;">
                                    <img src="./images/kpl-logo.png" style="width: 100%; height: 100px; object-fit: contain;" alt="">
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

        <div class="container d-flex flex-wrap">
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
                        <!-- <input type="hidden" name="redirect" value="https://mywebsite.com/thanks"> -->

                        <button class="poppins-semibold btn-type-2 px-5 py-3 font-16px text-white" type="submit">Send Message</button>
                    </form>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 d-flex justify-content-center align-items-center">
                <img src="./images/contact-picture.png" alt="contact us" style="width: 80%; height: auto;">
            </div>
        </div>

        <!-- FOOTER -->
        <div class="container-fluid bg-img footer-img">
            <div class="container d-flex flex-wrap" style="padding-top: 10rem; ">
                <div class="row pb-5">
                    
                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                    <a href="#nav-bar">
                        <img src="./logos/verti_full_green.svg" class="h-auto pb-2 footer-logo" style="width: 80%;" alt="Spiral Tech">
                    </a>
                    <p class="poppins-regular font-16px text-black m-0 ">Empowering your business with<br>innovative digital solutions for growth.</p>
                    <div class="footer-links pb-4 pt-3">
                        <a href="https://www.facebook.com/profile.php?id=61563218953237" target="_blank"><img src="./images/facebook.png" class="me-2" style="width: 40px; height: 40px;" alt="facebook"></a>
                        <a href="https://www.instagram.com/spiral_tech_official/" target="_blank"><img src="./images/instagram.png" class="me-2" style="width: 40px; height: 40px;" alt="instagram"></a>
                        <a href="https://www.linkedin.com/company/spiral-tech/?viewAsMember=true" target="_blank"><img src="./images/linkedin.png" class="me-2" style="width: 40px; height: 40px;" alt="linkedin"></a>
                        <a href="https://x.com/spiraltechoffic?t=e2_OM91D0w_F0NF-NkM-aQ&s=09" target="_blank"><img src="./images/twitter.png" class="me-2" style="width: 40px; height: 40px;" alt="twitter"></a>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 d-flex flex-wrap">

                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 py-xl-0 py-lg-0 py-3">
                        <div class="ps-xl-5 ps-lg-5 ps-0">
                            <p class="poppins-semibold font-16px text-light-blue">Links</p>
                            <ul class="poppins-regular font-16px no-bullets">
                                <li><a href="./index">Home</a></li>
                                <li><a href="./services-page">Services</a></li>
                                <li><a href="./about-us">About Us</a></li>
                                <li><a href="./blogs-page">Blogs</a></li>
                                <li><a href="./contact-us">Contact Us</a></li>
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
                            <!-- <input type="hidden" name="redirect" value="https://mywebsite.com/thanks"> -->

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