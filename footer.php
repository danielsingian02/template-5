<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package template_5
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="footer-content">
            <div class="site-icon">
	            <?php
	            if ( $siteIcon = get_site_icon_url() ) : ?>
                    <img src="<?php echo $siteIcon ?>"
                         class="site-icon"/>
	            <?php
	            else :
		            ?>
                    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
	            <?php
	            endif;
	            ?>
            </div>
            <div class="footer-text-content">
                <p class="footer-text">
	                <?php
	                echo get_option("footer_text_content") ?? "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ipsum nunc turpis arcu dui cursus habitasse elit tempus nisi.";
	                ?>
                </p>
            </div>

        </div>
        <div class="copyright">
	        <p>
		        <?php
		        echo get_option("footer_copyright") ?? "© Copyright 2021 HOA Management Name Here";
		        ?>
            </p>
        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
