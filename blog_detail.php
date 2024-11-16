<?php
$apiKey = 'AIzaSyCgI39KFW-afn8DDrmg9W-on_Mjoog6ajY';
$blogId = '2152023608555043419';
$currentPostId = $_GET['id'];

if (isset($currentPostId)) {
    $url = "https://www.googleapis.com/blogger/v3/blogs/$blogId/posts/$currentPostId?key=$apiKey";
    $response = file_get_contents($url);
    $post = json_decode($response, true);

    // Function to extract the first image from a post
    function getFirstImage($content) {
        preg_match('/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $content, $image);
        return (!empty($image['src'])) ? $image['src'] : 'images/port-mobile-8.png'; // Default if no image found
    }

    if (!empty($post)) {
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $post['title']?></title>
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
    <style>
        @media (max-width: 950px) {
            .style-content img{
                width: 100% !important;
                height: auto !important; 
            }
        }
    </style>
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
                        <a class="nav-link" href="#contact-form">Contact Us</a>
                    </li>
                </ul>
                <div class="navbar-button-div d-flex justify-content-center align-items-center">
                    <a href="#contact-form" class="poppins-regular text-light-blue navbar-button">
                        <button class="btn-type-2 text-white px-5 py-3">Schedule A Call</button>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- BLOG -->

    <div class="home-page">

        <div class="container text-justify">

            <div class="py-8 mx-auto" style="max-width: 640px;">
            <?php echo '
        <h1 class="py-3 poppins-bold text-light-blue  style-title">'. $post['title'] .' </h1>';?>
            
            <div class="poppins-regular style-content" ><?php 
            echo $post['content'];?></div>
            <?php
    } else {
        echo '<p>Blog post not found.</p>';
    }
} else {
    echo '<p>No blog post specified.</p>';
}
?>
                <!-- RELATED BLOGS -->

                <div class="py-8">
                <h2 class="poppins-bold font-24px mb-4">Related Blogs</h2>
                <?php
        // Fetch related blog posts
        $relatedUrl = "https://www.googleapis.com/blogger/v3/blogs/$blogId/posts?key=$apiKey";
        $relatedResponse = file_get_contents($relatedUrl);
        $relatedData = json_decode($relatedResponse, true);

        if (isset($relatedData['items']) && !empty($relatedData['items'])) {
            $relatedPosts = $relatedData['items'];
            shuffle($relatedPosts); // Shuffle the posts for randomness
            $randomPosts = array_slice($relatedPosts, 0, 3); // Get 3 random posts

            foreach ($randomPosts as $relatedPost) {
                $relatedPostTitle = $relatedPost['title'];
                $relatedPostId = $relatedPost['id'];
                $relatedPostContent = $relatedPost['content'];
                $relatedPostThumbnail = getFirstImage($relatedPostContent);
                $relatedPostUrl = "blog_detail.php?id=" . $relatedPostId;
                $relatedPostExcerpt = substr(strip_tags($relatedPostContent), 0, 50) . '...'; // Get first 50 characters
                ?>
                   

                    
              <?php echo' <a href="blog_detail.php?id='. $relatedPostId .'" class="link">
              <div class="card mb-4" style="max-width: 100%; border: 0;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <div class="background-img" style="width: 100%; height: 100%; border-radius:10px; background-image:url('.$relatedPostThumbnail.')"></div>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title poppins-semibold font-20px">'. $relatedPostTitle .'</h5>
                                    <p class="poppins-light font-16px">'. date('F d, Y', strtotime($relatedPost['published'])) .'</p>
                                </div>
                            </div>
                        </div>
                    </div>

              </a>';}
            }?>

                </div>
            </div>
        </div>

        <!-- FOOTER -->

        <div class="container-fluid bg-img footer-img">
            <div class="container d-flex flex-wrap" style="padding-top: 10rem;">

                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                    <a href="#nav-bar">
                        <img src="./logos/verti_full_green.svg" class="h-auto pb-5 footer-logo" style="width: 80%;" alt="Spiral Tech">
                    </a>
                    <p class="poppins-regular font-16px text-black m-0 pb-4">Empowering your business with<br>innovative digital solutions for growth.</p>
                    <div class="footer-links py-4">
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
                            <input type="text" name="name" class="w-100 poppins-light font-16px text-black py-2 px-4 my-3 bg-transparent" style="border-radius: 15px; border: 2px solid #0E799E;" placeholder="Name" required>
                            <input type="email" name="email" class="w-100 poppins-light font-16px text-black py-2 px-4 my-3 bg-transparent" style="border-radius: 15px; border: 2px solid #0E799E;" placeholder="Email" required>

                            <!-- Honeypot Spam Protection -->
                            <input type="checkbox" name="botcheck" class="hidden" style="display: none;">

                            <!-- Custom Confirmation / Success Page -->
                            <!-- <input type="hidden" name="redirect" value="https://mywebsite.com/thanks.php"> -->

                            <button class="btn-type-2 px-5 py-3 text-white my-4" type="submit">Join</button>

                        </form>
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


</body>

</html>