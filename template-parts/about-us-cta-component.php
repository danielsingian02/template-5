 <div class="about-us-call-to-action__container" style="background-color: <?php echo $args['bg_color']; ?>">
 	<div class="about-us-call-to-action__wrapper">
 		<h3 class="about-us-cta__title" style="color: <?php echo $args['text_color']; ?>">
 			<?php
				echo $args["title"];
				?>
 		</h3>
 		<div class="about-us-cta__content" style="color: <?php echo $args['text_color']; ?>">
 			<?php
				echo $args["content"];
				?>
 		</div>
 		<a class="about-us-cta__button" style="background-color: <?php echo $args['button_background_color']; ?>; color: <?php echo $args['button_text_color']; ?>" target="_blank" href="<?php echo $args["button_link"]; ?>">
 			<?php
				echo $args["button_text"];
				?>
 		</a>
 	</div>
 </div>