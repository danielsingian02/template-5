<?php
/**
 * Template Name: Home Page Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package template_5
 */


$bannerImg = get_field('banner_image') ?: "https://raw.githubusercontent.com/danielsingian02/template_5/main/assets/images/Asset1.png";

echo  $bannerImg;



get_header();
?>

    <div>
        <img src="<?php echo $bannerImg ?>" alt="">
    </div>

<?php
get_sidebar();
get_footer();
