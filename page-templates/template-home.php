<?php
/**
 * Template Name: Template Home
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<!-- Hero -->
<div class="home-banner">
    <div class="container">
        <h1>A Dining Experience</h1>
    </div>
</div>

<div class="home-call-to-action">
   <div class="container">
        <div class="row">
            <div class="col-md-4">
                <a href="#" class="call-to-action">
                    <div class="image"></div>
                    <div class="title">Dining Menu</div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#" class="call-to-action second">
                    <div class="image"></div>
                    <div class="title">Lunch Menu</div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#" class="call-to-action third">
                    <div class="image"></div>
                    <div class="title">Functions</div>
                </a>
            </div>
        </div>
   </div> 
</div>
<!-- END Hero -->

<!-- Welcome -->
<div class="home-welcome">
    <div class="title-holder">
        <div class="container">
            <h2>
                <span>Welcome to</span>
                The Backbeach Eating House
            </h2>
        </div> 
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-8">
                <p class="tagline">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae aut, veniam sed facere ratione dolorum velit deleniti qui dolores nisi explicabo suscipit sunt eveniet enim. Ea nobis iste consequatur obcaecati!.
                </p>
                <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam in voluptates porro ab optio esse nihil fugit deserunt animi dolor molestias incidunt sint blanditiis possimus ex reprehenderit magnam, quod perspiciatis est similique maxime? Cupiditate, repellendus.
                </p>
            </div>
            <div class="col-lg-3">
                <a href="#" class="button">Read More
                    <i class="fa fa-chevron-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- END Welcome -->
<!-- News -->
<div class="home-news">
    <div class="bg-image"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-5 col-md-6 col-8 m-auto">
            <a href="#" class="news-img">
                    <div class="image"></div>
                    <div class="date">10.06.2020</div>
                    <div class="category">What's On</div>
                </a>
            </div>
            <div class="col-xl-1 d-none d-xl-block"></div>
            <div class="col-md-6">
                <h2>Mother's Day</h2>
                <div class="content-holder">
                    Join us to celebrate your mum this Mother's Day.
                     Breakfast and Lunch is pretty full but we're taking dinner bookings so you can enjoy the best of our superb location right on the beach. All dinner reservations recive a complimentary box of chocolates to...  
                </div>
                <a href="#" class="button">Read More
                    <i class="fa fa-chevron-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- END News -->
<!-- About -->
<div class="home-about">
    <div class="bg-image">
        <div class="top-overlay">
            <img src="<?php echo get_template_directory_uri() ?>/img/home-about-top.svg" alt="Cutout Top" width="100%">
        </div>
        <div class="bottom-overlay">
            <img src="<?php echo get_template_directory_uri() ?>/img/home-about-bottom.svg" alt="Cutout Bottom" width="100%">
        </div>
    </div>
    <div class="title-holder">
        <div class="container">
            <h2>
                <span>Served fresh</span>
                from the paddock to the plate
            </h2>
        </div> 
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-8">
                <p class="tagline">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae aut, veniam sed facere ratione dolorum velit deleniti qui dolores nisi explicabo suscipit sunt eveniet enim. Ea nobis iste consequatur obcaecati!.
                </p>
                <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam in voluptates porro ab optio esse nihil fugit deserunt animi dolor molestias incidunt sint blanditiis possimus ex reprehenderit magnam, quod perspiciatis est similique maxime? Cupiditate, repellendus.
                </p>
            </div>
            <div class="col-lg-3">
                <a href="#" class="button">Read More
                    <i class="fa fa-chevron-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="home-about-images d-none d-md-block">
   <div class="container">
        <div class="row">
            <div class="col-md-4">
                <a href="#" class="call-to-action">
                    <div class="image"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#" class="call-to-action second">
                    <div class="image"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#" class="call-to-action third">
                    <div class="image"></div>
                </a>
            </div>
        </div>
   </div> 
</div>
<!-- END About -->
<!-- Testimonials -->
<div class="home-testimonials">
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-8">
                <h2>Happy Customers</h2>
                <div class="testimonial-holder">
                    <p>Ah! what a place. I could go have breakfast wvery single day and not get tired by the views. The staff are very kind and helpful, and the food is AMAZING! A MUST visit place if you're visitting Bunbury!</p>
                    <div class="separator"></div>
                    <div class="author">Saad Ulde</div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Testimonials -->
<!-- Subscribe -->
<div class="home-subscribe">
    <div class="title-holder">
        <div class="container">
            <h2>
                <span>Sign Up</span>
                Subscribe to our email newsletter
            </h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-11">
                <?php echo do_shortcode( '[contact-form-7 id="18" title="Newsletter Subscription"]' ) ?>
            </div>
        </div>
    </div>
</div>
<!-- END Subscribe -->
<!-- Social -->
<div class="home-social">
    <div class="title-holder">
        <div class="container">
            <h2>
                <span>Socials</span>
                Follow us on facebook & instagram
            </h2>
        </div> 
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-11">
                <div class="facebook-holder">
                    <div class="title">
                        <i class="fa fa-facebook-square"></i>
                        What's new on facebook
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/call-to-action-1.png" alt="News Item" width="100%">
                        </div>
                        <div class="col-lg-6">
                            <div class="content">
                                <div class="meta-data">
                                    <div class="date">
                                        <i class="fa fa-calendar"></i>
                                        Posted 31 Jan 2020
                                    </div>
                                    <div class="likes">
                                        <i class="fa fa-thumbs-up"></i>
                                        24 Likes
                                    </div>
                                </div>
                                <p>Check out the view (and the dolphins, they're out there today!) Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, sunt corporis? Eum libero quis modi?</p>
                                <a href="#" class="button">Read on Facebook</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="instagram-holder">
                    <div class="title">
                        <i class="fa fa-instagram"></i>
                        @backbeachcafe
                    </div>
                    <div class="row">
                    <?php echo do_shortcode( '[instagram-feed]' ) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Social -->

<?php
get_footer();
