<?php
/**
 * Template Name: Template 5
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

get_header();
?>
<!-- hero banner -->
	<main id="primary" class="site-main">
		<?php $image = get_field('page_hero') ;
              $limage = get_field('left_image');
              $rimage = get_field('right_image');
              $iconlist = get_field('icon_list')?>
        <img src="<?php echo $image;?>" id="hero">
<!-- end of hero banner -->

<!-- about section -->
        <div class="about">
            <div class="about-col1">
                <h2 class="about-col1__head"><?php the_field('intro_title');?></h2>
                <p class="about-col1__intro"><?php the_field('intro');?></p>
                <div class="list-wrapper">
                    <div class="icon-list">
                        <img src="<?php echo $iconlist;?>" class="imagelist">
                    </div>
                    <div class="list">
                        <p class="list__items"><?php the_field('list');?></p>
                    </div>
                </div>
                <div class="list-wrapper">
                    <div class="icon-list">
                        <img src="<?php echo $iconlist;?>" class="imagelist">
                    </div>
                    <div class="list">
                        <p class="list__items"><?php the_field('list2');?></p>
                    </div>
                </div>
                <div class="list-wrapper">
                    <div class="icon-list">
                        <img src="<?php echo $iconlist;?>" class="imagelist">
                    </div>
                    <div class="list">
                        <p class="list__items"><?php the_field('list3');?></p>
                    </div>
                </div>
                <div class="list-wrapper">
                    <div class="icon-list">
                        <img src="<?php echo $iconlist;?>" class="imagelist">
                    </div>
                    <div class="list">
                        <p class="list__items"><?php the_field('list4');?></p>
                    </div>
                </div>
            </div>
            <div class="about-col2">
                <div class="about-image-wrap">
                <div class="about__image1"> <img src="<?php echo $limage;?>" class="about-col2__left-image"></div>
                <div class="about__image2"><img src="<?php echo $rimage;?>" class="about-col2__right-image"> </div>
                </div>
            </div>
        </div>
<!-- end of about section-->

<!-- card section -->
        <div class="card-section">
            <h2 class="card-section__head"><?php the_field('card_head');?></h2>
                <p class="card-section__info"><?php the_field('card_subhead');?></p>
                    <div class="card-wrapper">
                        <div class="card-wrapper__card"><?php the_field('first_card');?>
                        <div class="comment-wrapper">
                            <?php $profile = get_field('profile_picture') ;?>
                            <div class="comment__profile"><img src="<?php echo $profile;?>" class="comment-profile"></div>
                            <div class="comment__name"><?php the_field('name_surname');?></div>
                            <div class="comment__description"><?php the_field('description');?></div>
                        </div>
                    </div>
                        <div class="card-wrapper__card"><?php the_field('second_card');?>
                            <div class="comment-wrapper">
                                <?php $profile2 = get_field('profile_picture2') ;?>
                                <div class="comment__profile"><img src="<?php echo $profile2;?>" class="comment-profile"></div>
                                <div class="comment__name"><?php the_field('name_surname2');?></div>
                                <div class="comment__description"><?php the_field('description2');?></div>
                            </div>
                        </div>
                        <div class="card-wrapper__card"><?php the_field('third_card');?>
                            <div class="comment-wrapper">
                                <?php $profile3 = get_field('profile_picture3') ;?>
                                <div class="comment__profile"><img src="<?php echo $profile3;?>" class="comment-profile"></div>
                                <div class="comment__name"><?php the_field('name_surname3');?></div>
                                <div class="comment__description"><?php the_field('description3');?></div>
                            </div>
                        </div>
                    </div>
        </div>
<!-- end of card section -->
<!-- information section -->
        <div class="info-section">
            <h2 class="info-section__heading"><?php the_field('add_to_cart_head');?></h2>
            <p class="info-section__information"><?php the_field('add_to_cart_info');?></p>
            <div class="info-section__button-wrap"><a href="#" class="info-section__button">Button</a></div>
        </div>
<!-- end of information section -->
<!-- gallery section -->
        <div class="gallery">

        <div class="gallery-col1">
            <h2 class="gallery__heading"><?php the_field('gallery_heading');?></h2>
            <h2 class="gallery__introduction"><?php the_field('gallery_intro');?></h2>
            <a href="#" class="gallery__button">Button</a>
        </div>
        <div class="gallery-col2">
            <div class="parent">
                <?php $image1 = get_field('gallery_img1') ;
                    $image2 = get_field('gallery_img2');
                    $image3 = get_field('gallery_img3');
                    $image4 = get_field('gallery_img4');
                ?>
                <div class="div1"> <img src="<?php echo $image1;?>" class="gallery__image1"> </div>
                <div class="div2">  <img src="<?php echo $image2?>" class="gallery__image2"></div>
                <div class="div3"> <img src="<?php echo $image3;?>" class="gallery__image3"> </div>
                <div class="div4"> <img src="<?php echo $image4;?>" class="gallery__image4"></div>
            </div>
        </div>
        </div>

<!-- end of gallery section -->
<!-- location section -->

        <div class="location">
        <?php

/** 
 *  Google Map Link
 * 
 * @string Google Map Embed = google_map_embed
 
 * */      
        $googleMapLink = get_field('google_map_embed') ?: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1663169.1803332209!2d-80.55231773090945!3d35.494947564826745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88541fc4fc381a81%3A0xad3f30f5e922ae19!2sNorth%20Carolina%2C%20USA!5e0!3m2!1sen!2sph!4v1670919995695!5m2!1sen!2sph';
        ?>
        <iframe src="<?php echo $googleMapLink ?>" 
            width="100%" 
            height="450"
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade"
            class="location__iframe">
        </iframe>
        
            <h2 class="location__heading"><?php the_field('location_heading');?></h2>
            <p class="location__closing-remarks"><?php the_field('closing_info');?></p>
        </div>
<!-- end of location section -->
	</main><!-- #main -->

<?php

get_footer();
