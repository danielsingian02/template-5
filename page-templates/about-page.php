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

get_header();

echo "<pre>";
echo var_dump(get_field_objects(get_the_ID()));
?>

    <div class="home-page-container">

        <!-- Banner Image -->
        <div class="banner-image" style="background-image: url('<?php echo $bannerImg ?>')">
        </div>

        <div class="home-page-content">

	        <?php

	        get_template_part(
		        "template-parts/welcome",
		        "component",
		        array(
			        "title" => esc_attr($welcomeLeftSection['title']),
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
    </div>

<?php

get_footer();