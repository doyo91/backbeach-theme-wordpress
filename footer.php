<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<footer>
    <div class="wrapper" id="wrapper-footer">
        <div class="bg-image"></div>
        <div class="title-holder">
            <div class="container">
                <h2>
                    <span>Contact</span>
                    Send us a message below
                </h2>
            </div> 
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-11">
                    <?php echo do_shortcode( '[contact-form-7 id="19" title="Footer Form"]' ) ?>

                    <div class="copyright">&copy; Copyright The Beackbeach Eaitng House - All Rights Reserved // Website by Doyo</div>
                </div>
                <div class="col-lg-1"></div>
            </div>
        </div>
        

    </div><!-- wrapper end -->
    <div class="footer-warning">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <img src="<?php echo get_template_directory_uri();?>/img/glass-cheers.svg" alt="Liquor Warning">
                </div>
                <div class="col-lg-10">
                    <h3>WARNING, Under the Liquior Control Act 1998, it is an offence:</h3>
                    <p>To sell or supply liquor to a person under the age of 18 years on a licenced or regulated permises; or for a person under the age of 18 years to purchase, or attempt to purchase, liquor on a licenced or regulated premises.</p>
                </div>
            </div>
        </div>
    </div>
</footer>

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

