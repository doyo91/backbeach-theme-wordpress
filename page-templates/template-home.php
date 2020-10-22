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

<!-- About -->
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
<!-- END About -->

<?php
get_footer();
