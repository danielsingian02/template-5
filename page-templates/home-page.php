<?php
/**
 * Template Name: Home Page Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package template_5
 */

/**
 * ACF fields for the Home page of Template 5
 *
 * @Image Banner Image
 * @Group Main Content
 *
 */
$bannerImg = get_field( 'banner_image' ) ?: "https://raw.githubusercontent.com/danielsingian02/template_5/main/assets/images/Asset1.png";

/**
 * Main Content Group Fields
 *
 * @string Title = title
 * @string Content = content
 * @string Left Image = left_image (image url)
 * @string Right Image = right_image (image url)
 */

$mainContent = get_field( 'main_content' ) ?: '';

/**
 * Google Map Link
 *
 * @string Google Map Embed = google_map_embed
 *
 * Add only the value at the src attribute of the Google Maps Embed
 */
$googleMapLink = get_field( 'google_map_embed' ) ?: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3339717.318218167!2d-79.860994!3d35.1705173!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88541fc4fc381a81%3A0xad3f30f5e922ae19!2sNorth%20Carolina%2C%20USA!5e0!3m2!1sen!2sph!4v1670564659285!5m2!1sen!2sph';





get_header();
?>

    <div>
        <img src="<?php echo $bannerImg ?>" alt="">
    </div>

    <iframe
        src="<?php echo $googleMapLink?>"
        height="500"
        width="100%"
        referrerpolicy="no-referrer-when-downgrade"
        loading="lazy"
        frameborder="0"
        allowfullscreen></iframe>

<?php
get_footer();
