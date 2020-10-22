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

<?php
get_footer();
