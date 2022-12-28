<?php
/**
 * Template Name: About Us Page Template
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wordpress-backend-theme
 */

/**
 * ACF fields for the About page of Template 5
 *
 * @Image Banner Image
 * @Group Main Content
 *
 */
$bannerImg = get_field( 'banner_image' ) ?: "https://raw.githubusercontent.com/danielsingian02/template_5/main/assets/images/Asset1.png";

get_header();
?>
	<!-- hero banner -->
	<main id="primary" class="site-main">
        <div class="banner-image" style="background-image: url('<?php echo $bannerImg ?>')">

        </div>
	</main><!-- #main -->

<?php

get_footer();