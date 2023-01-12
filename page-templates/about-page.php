<?php
/**
 * Template Name: About Us Page Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package template_5
 */

/**
 * ACF fields for the About page of Template 5
 *
 * @Image Banner Image
 * @Group Main Content
 *
 */
$bannerImg = get_field( 'banner_image' ) ?: "https://raw.githubusercontent.com/danielsingian02/template_5/main/assets/images/Asset1.png";

$welcomeLeftSection = get_field( "left_section" ) ?: "";
$welcomeRightSection = get_field( "right_section" ) ?: "";

/**
 * Condition whether the section will be visible or not.
 *
 * $Boolean Testimonial Display This Section
 */

if ($showTestimonial = get_field( "testimonial_display_this_section" ) ?? false) {
    $testimonial = get_field( "testimonial_section" ) ?? "";
}

/**
 * Google Map Embed link, it must contain the url value of the src="" in the Google Maps embed iframe to work.
 *
 * @String $googleMapEmbed
 */
$googleMapEmbed = get_field( "google_map_embed" ) ?: "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3339717.318218167!2d-79.860994!3d35.1705173!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88541fc4fc381a81%3A0xad3f30f5e922ae19!2sNorth%20Carolina%2C%20USA!5e0!3m2!1sen!2sph!4v1670564659285!5m2!1sen!2sph";

get_header();

//echo "<pre>";
//echo var_dump(get_field_objects(get_the_ID()));
?>

    <div class="home-page-container">

        <!-- Banner Image -->
        <div class="banner-image" style="background-image: url('<?php echo $bannerImg ?>')">
        </div>

        <div class="home-page-content">

	        <div class="welcome-container">
		        <?php
		        get_template_part(
			        "template-parts/welcome",
			        "component",
			        array(
				        "title" => acf_esc_html($welcomeLeftSection['title']),
				        "content" => acf_esc_html($welcomeLeftSection['content']),
				        "display_list" => esc_attr($welcomeLeftSection['display_list']),
				        // Note: Sanitize List in the template part itself
				        "lists" => $welcomeLeftSection['list_group'],

				        "left_image" => esc_url($welcomeRightSection['left_image']),
				        "right_image" => esc_attr($welcomeRightSection['right_image']),
			        )
		        );
		        ?>
            </div>

	        <?php
	        if ( $showTestimonial ) {
                get_template_part(
                    "template-parts/testimonial",
                    "component",
                    array(
                        "testimonial" => $testimonial,
                    )
                );
            } ?>

            <?php
            if ( $googleMapEmbed ) {
                get_template_part(
                    "template-parts/google-map",
                    "component",
                    array(
                         "link" => $googleMapEmbed,
                    )
                );
            }
            ?>

        </div>
    </div>

<?php

get_footer();